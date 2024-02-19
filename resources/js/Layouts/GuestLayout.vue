<template>
  <div
    class="h-full mx-auto flex flex-col"
    @click="handleInlineInertiaLinks"
  >
    <!-- <flash-messages /> -->

    <header-component class="header" v-model:show-mobile-menu="showMobileMenu" />

    <div
      class="flex-1"
      :class="{ 'bg-grey-400' : inverted, 'inverted': inverted }"
    >
      <slot />
    </div>

    <footer-component v-if="withFooter" v-model:show-mobile-menu="showMobileMenu" />

    <main-menu-mobile v-model:show="showMobileMenu" />
  </div>
</template>

<script setup>
import { provide, ref } from 'vue'
import HeaderComponent from "@/Layouts/HeaderComponent.vue"
import FooterComponent from "@/Layouts/FooterComponent.vue"
import MainMenuMobile from '@/Layouts/MainMenuMobile.vue'
// import FlashMessages from '@/Layouts/FlashMessages.vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
  inverted: { type: Boolean, default: false },
  withFooter: { type: Boolean, default: true },
})

const showMobileMenu = ref(false)

provide('inverted', props.inverted)

const handleInlineInertiaLinks = function (e) {
  if (e.target.classList.contains('inertia-inline') && e.target.href) {
    e.preventDefault()

    router.visit(e.target.href)
  }
}
</script>

<style scoped>

.header {
  height: 80px;
}

:deep(.page) {
    @apply h-full pt-[80px];
}

@screen xs {
  .header {
    height: 90px;
  }

  :deep(.page) {
      @apply pt-[90px];
  }
}

@screen sm {
  .header {
    height: 100px;
  }

  :deep(.page) {
      @apply pt-[100px];
  }
}
</style>