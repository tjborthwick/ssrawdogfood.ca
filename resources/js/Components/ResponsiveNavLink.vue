<template>
  <Link
    :href="href"
    :class="classes"
  >
    <slot />
  </Link>
</template>

<script setup>
import { computed, inject } from 'vue';
import { Link } from '@inertiajs/vue3';

const isInverted = inject('inverted')

const props = defineProps({
  href: { type: String, default: null },
  active: { type: Boolean, default: false }
});

const classes = computed(() => {
  let result = props.active
        ? 'py-1 font-roboto font-bold text-base text-grey-400 uppercase border-b-2 border-tan focus:border-grey-300'
        : 'py-1 font-roboto font-bold text-base text-grey-400 uppercase hover:border-b-2 active:border-b-2 focus:border-b-2'

  result += isInverted ? ' border-white' : 'border-tan'

  return result
});
</script>