<template>
  <form class="max-w-md">
    <div class="mb-4">
      <label class="block font-bold">
        Name
      </label>

      <input
        type="text"
        class="w-full bg-purple border-white text-white rounded-sm focus:outline-none focus:shadow-none focus:ring-0 focus:border-grey-200"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Email
      </label>

      <input
        type="email"
        class="w-full bg-purple border-white text-white rounded-sm focus:outline-none focus:shadow-none focus:ring-0 focus:border-grey-200"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Phone
      </label>

      <input
        type="text"
        class="w-full bg-purple border-white text-white rounded-sm focus:outline-none focus:shadow-none focus:ring-0 focus:border-grey-200"
      >
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Message
      </label>

      <textarea
        class="w-full bg-purple border-white text-white rounded-sm focus:outline-none focus:shadow-none focus:ring-0 focus:border-grey-200 resize-y"
        rows="4"
      />
    </div>

    <primary-button :inverted="true">
      Send
    </primary-button>
  </form>
</template>

<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
</script>

<style scoped>

</style>