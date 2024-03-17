<template>
  <Head>
    <title>Pure Proteins</title>
  </Head>

  <guest-layout>
    <div class="page">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="crumbs"
        />

        <h1 class="text-4xl font-cubano text-grey-400 mb-2">
          Pure Proteins
        </h1>

        <p class="text-grey-400">
          S&S pure protein raw dog food contains high quality meat, bone and organs sourced from local
          butchers. Choose from Chicken, Turkey, Pork and Beef, available by the pound or in patties. Pure
          proteins provide a fantastic raw base for DIYers to add their own ingredients for a balanced meal.
        </p>

        <product-grid
          :products="products"
          :cols="2"
        />
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import ProductGrid from '@/Components/Products/ProductGrid.vue'

const crumbs = [
  { title: 'Products', url: 'catalogue.index' },
  { title: 'Pure Proteins', url: null }
]

const props = defineProps({
  products: { type: Array, default: () => [] }
})
</script>

<style scoped>

</style>