<template>
  <Head>
    <title>{{ product.title }}</title>
  </Head>

  <guest-layout>
    <div class="page flex flex-col justify-between">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="breadcrumbs"
        />

        <div class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-16">
          <div class="sm:w-1/2">
            <product-images :product="product" />
          </div>

          <div class="sm:w-1/2">
            <h1 class="text-4xl font-cubano text-grey-400 mb-4">
              {{ product.title }}
            </h1>

            <product-price :product="product" :is-product-page="true" class="text-2xl mb-4" />

            <p class="text-grey-400 my-4">
              {{ product.description }}
            </p>

            <p v-if="product.category !== 'Dog Treats'">
              Available by the pound or in patties. Comes
              freshly frozen.
            </p>
          </div>
        </div>
      </div>

      <more-like-this
        v-if="crossSells.length"
        :products="crossSells"
      />
    </div>
  </guest-layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import MoreLikeThis from '@/Components/Products/MoreLikeThis.vue'
import ProductImages from '@/Components/Products/ProductImages.vue'
import ProductPrice from '@/Components/ProductPrice.vue'

const props = defineProps({
  product: { type: Object, required: true },
  breadcrumbs: { type: Array, default: () => [] },
  crossSells: { type: Array, default: () => [] },
})
</script>

<style scoped>

</style>