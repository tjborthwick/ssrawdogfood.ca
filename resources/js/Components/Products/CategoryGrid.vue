<template>
  <div class="flex flex-wrap my-4">
    <div
      v-for="category in categories"
      :key="category.id"
      class="text-center w-1/2 py-5"
    >
      <h2 class="text-2xl text-grey-400 text-left font-cubano">
        <Link
          :href="route(category.route)"
          class="no-underline font-normal"
        >
          {{ category.title }}
        </Link>
      </h2>

      <div class="mt-2 max-w-xs lg:max-w-sm xl:max-w-md mr-auto">
        <Link
          :href="route(category.route)"
          class="no-underline"
        >
            <img :src="category.image">
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    categories: { type: Array, required: true },
})
</script>

<style scoped>

</style>