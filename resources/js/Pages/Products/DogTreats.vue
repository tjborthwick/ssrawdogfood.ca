<template>
  <Head>
    <title>Dog Treats</title>
  </Head>

  <guest-layout>
    <div class="page">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="crumbs"
        />

        <h1 class="text-4xl font-cubano text-grey-400 mb-2">
          Dog Treats
        </h1>

        <p class="text-grey-400">
          All natural one ingredient treats for your dog to chew on. Many of our treats help improve oral health by
          removing plaque and tartar through chewing. Great for keeping busy pets occupied!
        </p>

        <product-grid
          :products="products"
          :cols="3"
        />
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head } from '@inertiajs/vue3'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import ProductGrid from '@/Components/Products/ProductGrid.vue'

const crumbs = [
  { title: 'Products', url: route('catalogue.index') },
  { title: 'Dog Treats', url: null }
]

const props = defineProps({
  products: { type: Array, default: () => [] }
})
</script>

<style scoped>

</style>