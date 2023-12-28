<template>
  <Head>
    <title>Custom Food</title>
  </Head>

  <guest-layout>
    <div class="page">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="crumbs"
        />

        <div class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-16">
          <div class="sm:w-1/2">
            <img src="/images/products/gourmet-duck.png">
          </div>

          <div class="sm:w-1/2">
            <h1 class="text-4xl font-cubano text-grey-400 mb-2">
              Custom Food
            </h1>

            <p class="text-grey-400">
              Do you have a dog that has special food needs?
              S&S Raw Dog Food offers custom raw foods for
              pets like yours. Whether you know what you
              need, or would like us to develop a custom food
              for your pet's needs, complete the form below to
              get started.
            </p>

            <custom-food-form class="mt-8" />
          </div>
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
  import GuestLayout from '@/Layouts/GuestLayout.vue'
  import { Head } from '@inertiajs/vue3'
  import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
  import CustomFoodForm from '@/Components/CustomFoodForm.vue';

  const crumbs = [
    { title: 'Products', url: route('catalogue.index') },
    { title: 'Custom Food', url: null }
  ]

  const props = defineProps({
    products: { type: Array, default: () => [] }
  })
</script>

<style scoped>

    </style>