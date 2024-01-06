<template>
  <div class="bg-grey-400">
    <div class="container content !py-2 sm:flex sm:justify-between">
      <div>
        <p class="text-white font-roboto leading-snug font-bold text-[13.2px]">
          Serving Woodstock, Ontario &amp; Surrounding Areas
        </p>

        <p class="text-white font-light font-sans text-[10px] leading-loose">
          &copy; {{ year }} S&amp;S Raw Dog Food. All Rights Reserved
        </p>
      </div>

      <user-menu
        :footer="true"
        class="hidden sm:flex pb-1"
        @update:show-mobile-menu="payload => emit('update:showMobileMenu', payload)"
      />
    </div>
  </div>
</template>

<script setup>
import UserMenu from '@/Layouts/UserMenu.vue'

const props = defineProps({
  showMobileMenu: { type: Boolean, default: false },
})

const emit = defineEmits(['update:showMobileMenu'])

const year = new Date().getFullYear();
</script>

<style scoped>

</style>