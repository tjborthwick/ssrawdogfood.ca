<template>
  <GuestLayout>
    <Head title="Reset Password" />

    <div class="page container content mt-16">
      <form @submit.prevent="submit" class="max-w-2xl">
        <h1 class="page-title">Reset Password</h1>

        <div class="p-4 border rounded-sm">
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

          <div class="mt-4">
            <InputLabel
              for="password"
              value="Password"
            />

            <TextInput
              id="password"
              v-model="form.password"
              type="password"
              class="mt-1 block w-full"
              required
              autocomplete="new-password"
            />

            <InputError
              class="mt-2"
              :message="form.errors.password"
            />
          </div>

          <div class="mt-4">
            <InputLabel
              for="password_confirmation"
              value="Confirm Password"
            />

            <TextInput
              id="password_confirmation"
              v-model="form.password_confirmation"
              type="password"
              class="mt-1 block w-full"
              required
              autocomplete="new-password"
            />

            <InputError
              class="mt-2"
              :message="form.errors.password_confirmation"
            />
          </div>

          <div class="flex items-center justify-end mt-4">
            <PrimaryButton
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Reset Password
            </PrimaryButton>
          </div>
        </div>
      </form>
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

const props = defineProps({
    email: { type: String, default: '' },
    token: { type: String, default: '' },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>