<template>
<Head>
    <title>Chicken</title>
</Head>

<guest-layout>
    <div class="h-full flex flex-col justify-between pt-[100px]">
        <div class="w-full max-w-7xl mx-auto px-10 py-6">
            <div>
                <product-breadcrumbs
                    class="mb-4"
                    :crumbs="breadcrumbs"
                />

                <div class="flex gap-x-16">
                    <div class="w-1/2">
                        <img :src="product.image">

                        <ul
                            v-if="product.images"
                            class="flex flex-wrap gap-x-2 my-4"
                        >
                            <li
                                v-for="(image, index) in product.images"
                                :key="index"
                                class="w-1/6"
                            >
                                <img
                                    :src="image.src"
                                    :title="image.title"
                                    :alt="image.alt"
                                    class=""
                                    >
                            </li>
                        </ul>
                    </div>

                    <div class="w-1/2">
                        <h1 class="text-4xl font-cubano text-grey-400 mb-4">
                            {{ product.title }}
                        </h1>

                        <p class="text-grey-400 text-2xl mb-4">
                            From: ${{ product.price.toFixed(2) }}
                        </p>

                        <p class="text-grey-400 mb-4">
                            {{ product.description }}
                        </p>

                        <p>
                            Available by the pound or in patties. Comes
                            freshly frozen.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <more-like-this :products="crossSells" />
    </div>
</guest-layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
import MoreLikeThis from '@/Components/MoreLikeThis.vue'

const props = defineProps({
  product: { type: Object, required: true },
  breadcrumbs: { type: Array, default: () => [] },
  crossSells: { type: Array, default: () => [] },
})
</script>

<style scoped>

</style>