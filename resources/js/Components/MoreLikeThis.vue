<template>
  <div class="bg-grey-100 ">
    <div class="container content">
      <h2 class="text-2xl text-grey-400 font-cubano mb-2">
        More Like This
      </h2>

      <ul class="w-full flex items-center justify-between gap-x-6">
        <li
          v-for="product in products"
          :key="product.slug"
        >
          <div class="max-w-[200px]">
            <Link
              :href="route('catalogue.view-product', product.slug)"
              class="no-underline"
            >
              <img :src="product.image">
            </Link>
          </div>

          <h3 class="text-xl font-cubano text-grey-400 mb-1">
            <Link
              :href="route('catalogue.view-product', product.slug)"
              class="no-underline font-normal"
            >
              {{ product.title }}
            </Link>
          </h3>

          <Link
            :href="route('catalogue.view-product', product.slug)"
            class="no-underline font-normal"
          >
            From: ${{ product.price.toFixed(2) }}
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  products: { type: Object, required: true }
})
</script>

<style scoped>

</style>