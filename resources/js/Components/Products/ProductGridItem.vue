<template>
  <div class="product-wrapper">
    <div class="mb-4 max-w-xs mx-auto md:min-h-[165px]">
      <Link :href="route('catalogue.view-product', product.slug)">
        <img
          :src="product.image"
          :alt="product.title"
          class="mx-auto"
        >
      </Link>
    </div>

    <div>
      <h2 class="mb-2">
        <Link
          :href="route('catalogue.view-product', product.slug)"
          class="no-underline font-normal text-xl-b md:text-base15-2xl !leading-tight lg:text-2xl-b text-grey-400 font-cubano "
        >
          {{ product.title }}
        </Link>
      </h2>

      <product-price :product="product" />
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ProductPrice from '@/Components/ProductPrice.vue'
const props = defineProps({
    product: { type: Object, required: true },
})
</script>

<style scoped>
@media (min-width: 769px) {
  .product-wrapper {
    @apply flex flex-col gap-y-8;
  }
}
</style>