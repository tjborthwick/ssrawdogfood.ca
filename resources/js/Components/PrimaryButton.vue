<template>
  <button
    :type="type"
    :class="classes"
    class="font-cubano uppercase rounded-sm focus:outline-none transition ease-in-out duration-150"
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

const classes = computed(() => {
  let result = props.inverted ? 'bg-tan text-grey-400' : 'bg-grey-400 text-tan'

  result += props.size === 'small' ? ' px-3 py-1.5 h-[36px] text-lg' : ' px-6 py-1 h-[40px] text-xl'

  return result
})
</script>