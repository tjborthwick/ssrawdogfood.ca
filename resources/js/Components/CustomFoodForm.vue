<template>
  <form class="max-w-md">
    <div class="mb-4">
      <label class="block font-bold">
        Name
      </label>

      <input
        type="text"
        class="w-full"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Email
      </label>

      <input
        type="email"
        class="w-full"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Phone
      </label>

      <input
        type="text"
        class="w-full"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Details
      </label>

      <textarea
        class="w-full resize-y"
        rows="4"
        placeholder="Tell us about your dog's special needs, or what you're looking for."
      />
    </div>

    <primary-button>Send</primary-button>
  </form>
</template>

<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'

</script>

<style scoped>

</style>