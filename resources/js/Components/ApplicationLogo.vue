<template>
  <picture>
    <source
      media="(min-width: 600px)"
      :srcset="imageSrc"
      width="420"
      height="80"
      class="max-h-[80px]"
    >

    <source
      media="(max-width: 599px)"
      :srcset="mobileImageSrc"
      width="210"
      height="70"
      class="max-h-[70px]"
    >

    <img
      :src="imageSrc"
      width="420"
      height="80"
      class="max-h-[80px]"
    >
  </picture>
</template>

<script setup>
import { computed, inject } from 'vue';

const inverted = inject('inverted')

const imageSrc = computed(() => inverted ? '/images/ss-raw-dog-food-inverse.png' : '/images/ss-raw-dog-food.png')

const mobileImageSrc = computed(() => inverted ? '/images/ss-raw-dog-food-small-inverse.png' : '/images/ss-raw-dog-food-small.png')
</script>

<style scoped>

</style>