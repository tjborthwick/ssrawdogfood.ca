<template>
  <div
    class="h-full mx-auto flex flex-col"
    @click="handleInlineInertiaLinks"
  >
    <header-component class="header" />

    <div
      class="flex-1"
      :class="{ 'bg-grey-400' : inverted, 'inverted': inverted }"
    >
      <slot />
    </div>

    <footer-component v-if="withFooter" />
  </div>
</template>

<script setup>
import { provide } from 'vue';
import HeaderComponent from "@/Layouts/HeaderComponent.vue";
import FooterComponent from "@/Layouts/FooterComponent.vue";
import { router } from '@inertiajs/vue3'

const props = defineProps({
  inverted: { type: Boolean, default: false },
  withFooter: { type: Boolean, default: true },
})

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