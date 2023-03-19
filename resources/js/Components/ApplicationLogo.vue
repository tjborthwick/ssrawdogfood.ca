<template>
  <img
    :src="imageSrc"
    height="80"
    width="420"
    class=""
  >
</template>

<script setup>
import { computed, inject } from 'vue';

const inverted = inject('inverted')

const imageSrc = computed(() => inverted ? '/images/ss-raw-dog-food-inverse.png' : '/images/ss-raw-dog-food.png' )
</script>

<style scoped>

</style>