<template>
  <div class="bg-grey-400">
    <div class="container content !py-2 sm:flex sm:justify-between">
      <div>
        <p class="text-white font-roboto font-bold text-xs xs:text-base">
          Serving Woodstock, Ontario &amp; Surrounding Areas
        </p>

        <p class="text-white text-xs leading-normal">
          &copy; {{ year }} S&amp;S Raw Dog Food. All Rights Reserved
        </p>
      </div>

      <user-menu :footer="true" class="hidden sm:flex" />
    </div>
  </div>
</template>

<script setup>
import UserMenu from '@/Layouts/UserMenu.vue';

const year = new Date().getFullYear();
</script>

<style  scoped>

</style>