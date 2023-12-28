<template>
  <Link
    :href="href"
    class="font-cubano font-normal leading-none bg-grey-400 text-tan uppercase py-1 rounded-sm focus:outline-none transition ease-in-out duration-150 no-underline whitespace-nowrap flex items-center"
    :class="sizeClasses"
  >
    <slot />
  </Link>
</template>

<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    href: { type: String, default: null },
    size: { type: String, default: 'base' },
})

const sizeClasses = computed(() => {
  return props.size === 'small' ? 'px-3 h-[32px] text-base15-lg lg:text-lg' : 'px-6 h-[40px] text-base15-xl lg:text-xl'
})
</script>