<template>
  <div
    class="absolute top-0 w-full"
    :class="{ overlay: !inverted }"
  >
    <div class="container px-5 md:px-10 py-2.5 flex justify-between items-center">
      <Link
        href="/"
        class="block -ml-1.5 xs:-ml-3 md:-ml-5 xl:ml-0"
      >
        <ApplicationLogo />
      </Link>

      <main-menu />
    </div>
  </div>
</template>

<script setup>
import { inject } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import MainMenu from '@/Layouts/MainMenu.vue'

const inverted = inject('inverted')
</script>

<style scoped>
.overlay {
    background: rgba(255,255,255,0.5);
    background: linear-gradient(rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}
</style>