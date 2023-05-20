<template>
  <Link
    :href="href"
    class="font-cubano font-normal px-4 py-2 bg-grey-400 text-tan text-xl uppercase rounded-sm focus:outline-none transition ease-in-out duration-150 no-underline"
  >
    <slot />
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: { type: String, default: null },
});
</script>