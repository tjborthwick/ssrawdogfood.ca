<template>
  <div
    class="absolute top-0 w-full"
    :class="{ overlay: !inverted }"
  >
    <div class="container content flex justify-between xl:gap-x-16 items-center">
      <Link
        href="/"
        class="block -ml-3 xl:-ml-11 3xl:-ml-14"
      >
        <ApplicationLogo />
      </Link>

      <main-menu  @update:show-mobile-menu="payload => emit('update:showMobileMenu', payload)"/>
    </div>
  </div>
</template>

<script setup>
import { inject } from 'vue'
import { Link } from '@inertiajs/vue3'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import MainMenu from '@/Layouts/MainMenu.vue'

const inverted = inject('inverted')

const props = defineProps({
  showMobileMenu: { type: Boolean, default: false },
})

const emit = defineEmits(['update:showMobileMenu'])
</script>

<style scoped>
.overlay {
    background: rgba(255,255,255,0.5);
    background: linear-gradient(rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}

.content {
  @apply py-2.5;
}
</style>