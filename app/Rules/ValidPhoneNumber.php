<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidPhoneNumber implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * The rule checks for a 10-digit North American phone number.
     * - Allows spaces, dashes, parentheses (which are stripped).
     * - An optional leading '1' (country code) is stripped.
     * - The resulting 10-digit number must not have an area code (first 3 digits)
     *   or exchange code (next 3 digits) starting with '0' or '1'.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!is_string($value) && !is_numeric($value)) {
            return false;
        }

        // 1. Remove common formatting characters (spaces, dashes, parentheses)
        $cleanedValue = preg_replace('/[^\d]/', '', (string) $value);

        // 2. Handle optional leading '1' (country code)
        // If it's 11 digits and starts with '1', strip the '1'
        if (strlen($cleanedValue) === 11 && $cleanedValue[0] === '1') {
            $cleanedValue = substr($cleanedValue, 1);
        }

        // 3. Check if it's now exactly 10 digits
        if (strlen($cleanedValue) !== 10) {
            return false;
        }

        // 4. Validate Area Code (first 3 digits of the 10-digit number)
        // Area codes (NXX) cannot start with 0 or 1.
        $areaCode = substr($cleanedValue, 0, 3);
        if ($areaCode[0] === '0' || $areaCode[0] === '1') {
            return false;
        }
        // You could add more specific NXX rules if needed, e.g., not ending in 11

        // 5. Validate Exchange Code (Central Office Code - next 3 digits)
        // Exchange codes (NXX) also cannot start with 0 or 1.
        $exchangeCode = substr($cleanedValue, 3, 3);
        if ($exchangeCode[0] === '0' || $exchangeCode[0] === '1') {
            return false;
        }

        // All checks passed
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid 10-digit phone number. Area codes and exchange codes cannot start with 0 or 1. Spaces, dashes, and an optional leading \'1\' are permitted.';
    }
}