<template>
  <div class="h-[100px] absolute top-0 w-full overlay">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-2">
      <Link href="/">
        <ApplicationLogo />
      </Link>

      <main-menu />
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import MainMenu from '@/Layouts/MainMenu.vue'
</script>

<style scoped>
.overlay {
    background: rgba(255,255,255,0.5);
    background: linear-gradient(rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}
</style>