<template>
  <div class="bg-grey-400">
    <div class="container content !py-2 sm:flex sm:justify-between">
      <div>
        <p class="text-white font-roboto leading-snug font-bold text-xxs">
          Serving Woodstock, Ontario &amp; Surrounding Areas
        </p>

        <p class="text-white font-roboto text-xxs2">
          &copy; {{ year }} S&amp;S Raw Dog Food. All Rights Reserved
        </p>
      </div>

      <user-menu
        :footer="true"
        class="hidden sm:flex pb-1"
      />
    </div>
  </div>
</template>

<script setup>
import UserMenu from '@/Layouts/UserMenu.vue';

const year = new Date().getFullYear();
</script>

<style  scoped>
p {
  /* @apply text-[0.875em]; */
}
</style>