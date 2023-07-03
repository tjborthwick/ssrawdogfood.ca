<template>
  <Head>
    <title>Dog Treats</title>
  </Head>

  <guest-layout>
    <div class="pt-[100px]">
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

        <div class="flex flex-wrap my-4">
          <div
            v-for="product in products"
            :key="product.id"
            class="text-center w-1/4 py-5"
          >
            <div class="mb-4 max-w-[220px] mx-auto">
              <Link :href="route('catalogue.view-product', product.slug)">
                <img
                  :src="product.image"
                  class="mx-auto"
                >
              </Link>
            </div>

            <h2 class="text-xl text-grey-400 font-cubano">
              <Link
                :href="route('catalogue.view-product', product.slug)"
                class="no-underline"
              >
                {{ product.title }}
              </Link>
            </h2>

            <p class="text-grey-400">
              ${{ product.price.toFixed(2) }}
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
      { title: 'Dog Treats', url: null }
    ]

    const props = defineProps({
      products: { type: Array, default: () => [] }
    })
    </script>

<style scoped>

    </style>