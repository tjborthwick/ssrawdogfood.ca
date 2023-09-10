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
          Gourmet Meals
        </h1>

        <p class="text-grey-400">
          S&S Gourmet Meals contain our same high quality locally sourced proteins, along with fruits, veggies
          and eggs for a balanced meal. Choose from Chicken, Turkey, Pork and Beef by the pound or in patties.
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
import { Head } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import ProductGrid from '@/Components/Products/ProductGrid.vue'

const crumbs = [
  { title: 'Products', url: route('catalogue.index') },
  { title: 'Gourmet Meals', url: null }
]

const props = defineProps({
  products: { type: Array, default: () => [] }
})
</script>

<style scoped>

</style>