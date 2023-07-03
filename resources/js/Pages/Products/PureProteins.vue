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

        <h1 class="text-4xl font-cubano text-grey-400 mb-4">
          Pure Proteins
        </h1>

        <p class="text-grey-400">
          S&S pure protein raw dog food contains high quality meat, bone and organs sourced from local
          butchers. Choose from Chicken, Turkey, Pork and Beef, available by the pound or in patties. Pure
          proteins provide a fantastic raw base for DIYers to add their own ingredients for a balanced meal.
        </p>

        <div class="flex flex-wrap my-4">
          <div
            v-for="product in products"
            :key="product.id"
            class="text-center w-1/2 py-5"
          >
            <div class="mb-4 max-w-xs mx-auto">
              <Link
                :href="route('catalogue.view-product', product.slug)"
                class="no-underline"
              >
                <img
                  :src="product.image"
                  class="mx-auto"
                >
              </Link>
            </div>

            <h2 class="text-2xl text-grey-400 font-cubano">
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
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link } from '@inertiajs/vue3'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'

const crumbs = [
  { title: 'Products', url: route('catalogue.index') },
  { title: 'Pure Proteins', url: null }
]

const props = defineProps({
  products: { type: Array, default: () => [] }
})
</script>

<style scoped>

</style>