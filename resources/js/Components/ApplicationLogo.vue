<template>
  <img
    :src="imageSrc"
    height="80"
    width="420"
    class="max-w-[85%] md:max-w-none -ml-1.5 xs:-ml-3 xl:ml-0"
  >
</template>

<script setup>
import { computed, inject } from 'vue';

const inverted = inject('inverted')

const imageSrc = computed(() => inverted ? '/images/ss-raw-dog-food-inverse.png' : '/images/ss-raw-dog-food.png' )
</script>

<style scoped>

</style>