<template>
  <Link
    :href="href"
    :class="classes"
  >
    <slot />
  </Link>
</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  href: { type: String, default: null },
  active: { type: Boolean, default: false }
});

const classes = computed(() =>
    props.active
        ? 'py-2 font-roboto uppercase font-bold outline-0  border-tan border-b-2 focus:border-grey-300'
        : 'py-2 font-roboto uppercase font-bold outline-0  border-tan hover:border-b-2 active:border-b-2 focus:border-b-2'
);
</script>