<template>
  <form class="max-w-md">
    <div class="mb-4">
      <label class="block font-bold">
        Name
      </label>

      <text-input />
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Email
      </label>

     <text-input type="email" />
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Phone
      </label>

      <text-input />
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Details
      </label>

      <textarea-input row="4" placeholder="Tell us about your dog's special needs, or what you're looking for." />
    </div>

    <primary-button>Send</primary-button>
  </form>
</template>

<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import TextareaInput from '@/Components/TextareaInput.vue'

</script>

<style scoped>

</style>