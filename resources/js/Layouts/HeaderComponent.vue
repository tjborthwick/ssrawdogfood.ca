<template>
  <div
    class="h-[100px] absolute top-0 w-full"
    :class="{ overlay: !inverted }"
  >
    <div class="container px-5 md:px-10 py-3 flex justify-between items-center">
      <Link href="/">
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