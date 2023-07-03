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

            <div class="flex flex-wrap my-4">
                <div
                    v-for="product in products"
                    :key="product.id"
                    class="text-center w-1/3 py-5"
                >
                    <div class="mb-4 max-w-[220px] mx-auto">
                        <Link :href="route('catalogue.view-product', product.slug)">
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
    { title: 'Gourmet Meals', url: null }
  ]

  const props = defineProps({
    products: { type: Array, default: () => [] }
  })
  </script>

<style scoped>

  </style>