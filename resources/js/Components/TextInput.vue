<template>
  <input
    ref="input"
    class="w-full py-1 px-2 rounded-sm bg-transparent border focus:outline-none shadow"
    :class="classes"
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)"
  >
</template>

<script setup>
import { onMounted, ref, computed, inject } from 'vue'

defineEmits(['update:modelValue'])

defineProps({
  modelValue: { type: String, default: null },
})

const inverted = inject('inverted')

const input = ref(null)

const classes = computed(() => inverted ? 'border-white text-white focus:border-grey-200 focus:ring-0' : 'border-grey-200 text-grey-300')

onMounted(() => {
  if (input.value.hasAttribute('autofocus')) {
      input.value.focus()
  }
});

defineExpose({ focus: () => input.value.focus() })
</script>