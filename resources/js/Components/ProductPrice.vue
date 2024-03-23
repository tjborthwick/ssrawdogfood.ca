<template>
  <template v-if="product.price === null">
    <p class="text-grey-400">
      Call for pricing
      <a v-if="isProductPage" href="tel:+15197883417" class="block font-light mt-0 text-2xl">(519) 788-3417</a>
    </p>
  </template>
<template v-else-if="product.uom === 'each'"><p class="text-grey-400">${{ product.price.toFixed(2) }}</p></template>
<template v-else-if="product.uom === 'lbs'"><p class="text-grey-400">{{ product.price.toFixed(2) }}/lbs</p></template>
<template v-else><p class="text-grey-400">{{ product.uom }} for ${{ product.price.toFixed(2) }}</p></template>
</template>

<script setup>
const props = defineProps({
  product: { type: Object, required: true },
  isProductPage: { type: Boolean, default: false },
})
</script>

<style scoped>

</style>