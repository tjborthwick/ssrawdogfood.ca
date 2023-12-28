<template>
  <form>
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
        Message
      </label>

      <textarea-input />
    </div>

    <primary-button :inverted="true">
      Send
    </primary-button>
  </form>
</template>

<script setup>
import TextInput from '@/Components/TextInput.vue'
import TextareaInput from '@/Components/TextareaInput.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
</script>

<style scoped>

</style>