<template>
  <div
    class="grid grid-cols-1 gap-x-6 gap-y-8 xs:gap-y-12 mt-6 mb-3"
    :class="gridColumClasses"
  >
    <product-grid-item
      v-for="product in products"
      :key="product.id"
      :product="product"
      class="text-center"
    />
  </div>
</template>

<script setup>
import { computed } from 'vue'
import ProductGridItem from '@/Components/Products/ProductGridItem.vue'

const props = defineProps({
    products: { type: Array, default: () => [] },
    cols: { type: Number, default: 3 },
})

const gridColumClasses = computed(() => {
  switch(props.cols) {
    case 2:
      return 'xs:grid-cols-2'

    case 4:
      return 'xs:grid-cols-2 sm:grid-cols-4'

    case 3:
    default:
      return 'xs:grid-cols-2 sm:grid-cols-3'
  }
})
</script>

<style scoped>

</style>