<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AllowedPostalCodes implements Rule
{
    protected string $regex;

    /**
     * The list of allowed postal codes and patterns.
     * An asterisk denotes a wildcard.
     */
    protected array $postalCodeList = [
        'N0B 2R0', 'N0B 1E0', 'N0B 2E0', 'N0J 1A0', 'N0J 1B0', 'N0J 1C0', 'N0J 1G0', 'N0J 1J0', 'N0J 1L0',
        'N0J 1M0', 'N0J 1N0', 'N0J 1P0', 'N0J 1R0', 'N0J 1S0', 'N0J 1V0', 'N0J 1W0', 'N0J 1X0', 'N0L 1C0',
        'N0L 1G*', 'N0L 1V0', 'N0L 2B0', 'N0L 2J0', 'N0M 2C0', 'N0M 2G0', 'N0M 2M0',
        'N1P*', 'N1R*', 'N1S*', 'N1T*', 'N2A*', 'N2B*', 'N2C*', 'N2E*', 'N2G*', 'N2H*', 'N2J*', 'N2K*', 'N2L*', 'N2M*',
        'N2P*', 'N2R*', 'N2T*', 'N2V*', 'N3C*', 'N3E*', 'N3H*', 'N4G*', 'N4S*', 'N4T*', 'N4V*', 'N5C*', 'N5V*', 'N5W*',
        'N5X*', 'N5Y*', 'N5Z*', 'N6A*', 'N6B*', 'N6C*', 'N6E*', 'N6G*', 'N6H*', 'N6J*', 'N6K*', 'N6L*', 'N6M*', 'N6N*',
        'N6P*'
    ];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $patterns = [];
        $processedForUniqueness = []; // To avoid adding duplicate patterns from "N0B 2R0" and "N0B2R0"

        foreach ($this->postalCodeList as $code) {
            // Normalize: uppercase, remove spaces
            $normalized = strtoupper(str_replace(' ', '', $code));

            // Skip if this exact normalized form (with or without *) has been processed
            if (in_array($normalized, $processedForUniqueness)) {
                continue;
            }
            $processedForUniqueness[] = $normalized;

            if (str_ends_with($normalized, '*')) {
                $base = rtrim($normalized, '*'); // Remove trailing *

                // Canadian Postal Code Format: A#A #A# (Letter-Digit-Letter Digit-Letter-Digit)
                // LDU (Local Delivery Unit) is \d[A-Z]\d

                if (strlen($base) === 3) {
                    // e.g., N1P* -> FSA is N1P, LDU is wildcard
                    // Regex part: N1P\d[A-Z]\d
                    $patterns[] = preg_quote($base, '/') . '\d[A-Z]\d';
                } elseif (strlen($base) === 5) {
                    // e.g., N0L1G* -> FSA is N0L, LDU starts with 1G, last digit is wildcard
                    // The 5th char of postal code 'G' is a letter. The 6th (wildcard) must be a digit.
                    // Regex part: N0L1G\d
                    $patterns[] = preg_quote($base, '/') . '\d';
                }
                // You could add an 'else' here to catch unexpected wildcard formats if necessary
            } else {
                // Exact match, ensure it's 6 characters long after normalization
                if (strlen($normalized) === 6) {
                    $patterns[] = preg_quote($normalized, '/');
                }
            }
        }

        if (!empty($patterns)) {
            // The `^` and `$` ensure the entire string matches one of the patterns.
            $this->regex = '/^(' . implode('|', $patterns) . ')$/';
        } else {
            // Regex that will never match if the list is empty (shouldn't happen here)
            $this->regex = '/^(?![\s\S])$/';
        }
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!is_string($value)) {
            return false;
        }
        // Normalize the input value: uppercase, remove spaces
        $processedValue = strtoupper(str_replace(' ', '', $value));

        return (bool) preg_match($this->regex, $processedValue);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not an accepted postal code for delivery.';
    }
}