<template>
  <Head>
    <title>Products</title>
  </Head>

  <guest-layout>
    <div class="pt-[100px]">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="crumbs"
        />

        <h1 class="text-4xl font-cubano text-grey-400 mb-4">
          Products
        </h1>

        <p class="text-grey-400">
          S&S Raw Dog Food offers high quality cost effective Raw Dog Food and All Natural Dog Treats.
          Whether you’re looking for a pure protein base to add your own ingredients, a balanced meal, or need
          custom food for your dog with special food needs, give us a try!
        </p>

        <category-grid :categories="categories" />
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head } from '@inertiajs/vue3'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import CategoryGrid from '@/Components/Products/CategoryGrid.vue'

const crumbs = [
    { title: 'Products', url: null }
]

const props = defineProps({
    categories: { type: Array, default: () => [] }
})
</script>

<style scoped>

</style>