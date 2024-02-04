<template>
  <div>

  </div>
</template>

<script setup>
import { watch } from 'vue'
import { usePage } from '@inertiajs/vue3'
import {useToast} from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css'

const $page = usePage();
const $toast = useToast();

const duration = 5000
const position = 'top'

watch (() => $page.props?.flash?.success, (newValue) => {
  if (newValue) {
    $toast.success(newValue, {
      duration,
      position,
    })
  }
}, { immediate: true })

watch (() => $page.props?.flash?.error, (newValue) => {
  if (newValue) {
    $toast.error(newValue, {
      duration,
      position,
    })
  }
}, { immediate: true })

watch (() => $page.props?.flash?.warning, (newValue) => {
  if (newValue) {
    $toast.warning(newValue, {
      duration,
      position,
    })
  }
}, { immediate: true })

</script>

<style scoped>

</style>