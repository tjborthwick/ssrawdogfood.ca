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

    <h2 class="mb-2">
      <Link
        :href="route('catalogue.view-product', product.slug)"
        class="no-underline font-normal text-xl-b md:text-base15-2xl lg:text-2xl-b text-grey-400 font-cubano "
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