<template>
  <p class="text-grey-400">
    <template v-if="product.price === null">Call for pricing</template>
    <template v-else-if="product.uom === 'each'">${{ product.price.toFixed(2) }}</template>
    <template v-else-if="product.uom === 'lbs'">${{ product.price.toFixed(2) }}/lbs</template>
    <template v-else>{{ product.uom }} for ${{ product.price.toFixed(2) }}</template>
  </p>
</template>

<script setup>
const props = defineProps({
  product: { type: Object, required: true },
})
</script>

<style scoped>

</style>