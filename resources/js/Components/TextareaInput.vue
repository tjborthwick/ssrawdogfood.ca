<template>
  <textarea
    ref="input"
    class="w-full py-1 px-2 bg-transparent border border-white text-white rounded-sm focus:outline-none focus:shadow-none focus:ring-0 focus:border-grey-200 resize-y"
    rows="2"
  />
</template>

<script setup>
import { onMounted, ref } from 'vue'

defineProps({
  modelValue: { type: String, default: null },
})

defineEmits(['update:modelValue'])

const input = ref(null)

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus()
    }
});

defineExpose({ focus: () => input.value.focus() })
</script>

<style scoped>

</style>