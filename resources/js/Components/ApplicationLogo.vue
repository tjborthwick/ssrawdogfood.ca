<template>
  <picture>
    <source
      media="(min-width: 600px)"
      :srcset="imageSrc"
      width="420"
      height="80"
    >

    <source
      media="(max-width: 375px)"
      :srcset="mobileImageSrc"
      width="183.75"
      height="61.25"
    >

    <source
      media="(max-width: 599px)"
      :srcset="mobileImageSrc"
      width="210"
      height="70"
    >

    <img
      :src="imageSrc"
      width="420"
      height="80"
      class="logo"
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
.logo {
  max-height: 80px;
}

@screen xl {
  .logo {
    max-width: 400px;
  }
}
</style>