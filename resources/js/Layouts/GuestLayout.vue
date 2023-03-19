<template>
  <div class="h-full mx-auto">
    <header-component />

    <div class="h-full">
      <slot />
    </div>
  </div>
</template>

<script setup>
import HeaderComponent from "@/Layouts/HeaderComponent.vue";
</script>

<style scoped>

</style>