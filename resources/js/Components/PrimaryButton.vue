<template>
  <button
    :type="type"
    :class="classes"
    class="font-cubano px-4 py-2 text-xl uppercase rounded-sm focus:outline-none transition ease-in-out duration-150"
  >
    <slot />
  </button>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  type: { type: String, default: 'submit' },
  inverted: { type: Boolean, default: false }
})

const classes = computed(() => props.inverted ? 'bg-tan text-grey-400' : 'bg-grey-400 text-tan')
</script>