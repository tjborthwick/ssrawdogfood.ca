<template>
  <div v-show="message" class="pt-1">
    <p class="text-sm text-red-600">
      {{ message }}
    </p>
  </div>
</template>

<script setup>
defineProps(['message']);
</script>