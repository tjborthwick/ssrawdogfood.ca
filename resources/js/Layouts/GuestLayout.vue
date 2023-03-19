<template>
  <div class="h-full mx-auto flex flex-col">
    <header-component />

    <div class="bg-grey-400 flex-1">
      <slot />
    </div>

    <footer-component v-if="withFooter" />
  </div>
</template>

<script setup>
import { provide } from 'vue';
import HeaderComponent from "@/Layouts/HeaderComponent.vue";
import FooterComponent from "@/Layouts/FooterComponent.vue";

const props = defineProps({
  inverted: { type: Boolean, default: false },
  withFooter: { type: Boolean, default: true },
})

provide('inverted', props.inverted)
</script>

<style scoped>

</style>