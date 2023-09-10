<template>
  <div>
    <div class="mb-4 max-w-xs mx-auto">
      <Link :href="route('catalogue.view-product', product.slug)">
        <img
          :src="product.image"
          class="mx-auto"
        >
      </Link>
    </div>

    <h2 class="text-xl-b sm:text-2xl-b text-grey-400 font-cubano mb-2">
      <Link
        :href="route('catalogue.view-product', product.slug)"
        class="no-underline font-normal"
      >
        {{ product.title }}
      </Link>
    </h2>

    <p class="text-grey-400">
      From: ${{ product.price.toFixed(2) }}
    </p>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    product: { type: Object, required: true },
})
</script>

<style scoped>

</style>