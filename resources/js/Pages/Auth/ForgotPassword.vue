<template>
  <GuestLayout>
    <Head title="Forgot Password" />

    <div class="page container content mt-16">
      <div class="max-w-2xl">
        <h1 class="page-title mb-4">Request Password Reset</h1>

        <div class="mb-4 text-sm text-gray-600">
          Forgot your password? No problem. Just let us know your email address and we will email you a password reset
          link that will allow you to choose a new one.
        </div>

        <div
          v-if="status"
          class="mb-4 font-medium text-sm text-green-600"
        >
          {{ status }}
        </div>

        <form @submit.prevent="submit" class="p-4 border rounded-sm">
          <div>
            <InputLabel
              for="email"
              value="Email"
            />

            <TextInput
              id="email"
              v-model="form.email"
              type="email"
              class="mt-1 block w-full"
              required
              autofocus
              autocomplete="username"
            />

            <InputError
              class="mt-2"
              :message="form.errors.email"
            />
          </div>

          <div class="flex items-center justify-end mt-4">
            <PrimaryButton
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Email Password Reset Link
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: { type: String, default: '' }
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>