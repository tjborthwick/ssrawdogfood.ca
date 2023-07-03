<template>
  <div class="bg-grey-400">
    <div class="container content !py-2 flex justify-between">
      <div>
        <p class="text-white font-roboto font-bold">
          Serving Woodstock, Ontario &amp; Surrounding Areas
        </p>

        <p class="text-white text-xs leading-normal">
          &copy; {{ year }} S&amp;S Raw Dog Food. All Rights Reserved
        </p>
      </div>

      <user-menu :footer="true" />
    </div>
  </div>
</template>

<script setup>
import UserMenu from '@/Layouts/UserMenu.vue';

const year = new Date().getFullYear();
</script>

<style  scoped>

</style>