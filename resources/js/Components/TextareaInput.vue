<template>
  <textarea
    ref="input"
    class="block w-full px-2 bg-transparent border rounded-sm resize-y focus:outline-none shadow"
    :class="classes"
    rows="2"
    @input="$emit('update:modelValue', $event.target.value)"
  />
</template>

<script setup>
import { onMounted, ref, inject, computed } from 'vue'

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

<style scoped>

</style>