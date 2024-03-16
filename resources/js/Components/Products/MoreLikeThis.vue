<template>
  <div class="bg-grey-100 ">
    <div class="container content">
      <h2 class="text-2xl text-grey-400 font-cubano mb-2">
        More Like This
      </h2>

      <ul class="w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        <li
          v-for="product in products"
          :key="product.slug"
          class="flex flex-col justify-between"
        >
          <div class="max-w-[200px]">
            <Link
              :href="route('catalogue.view-product', product.slug)"
              class="no-underline"
            >
              <img :src="product.image" :alt="product.title">
            </Link>
          </div>

          <div>
            <h3 class="text-lg sm:text-xl-b font-cubano text-grey-400 mb-2">
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
              <product-price :product="product" :href="route('catalogue.view-product', product.slug)" />
            </Link>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ProductPrice from '@/Components/ProductPrice.vue'

const props = defineProps({
  products: { type: Object, required: true }
})
</script>

<style scoped>

</style>