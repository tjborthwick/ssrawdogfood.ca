<template>
  <Link
    :href="href"
    class="font-cubano font-normal bg-grey-400 text-tan uppercase rounded-sm focus:outline-none transition ease-in-out duration-150 no-underline"
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
  return props.size === 'small' ? 'px-3 py-1.5 h-[36px] text-lg' : 'px-6 py-1 h-[40px] text-xl'
})
</script>