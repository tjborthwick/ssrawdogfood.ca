<template>
  <div class="grid grid-cols-1 xs:grid-cols-2 gap-x-6 gap-y-8 xs:gap-y-12 mt-6 mb-3">
    <div
      v-for="category in categories"
      :key="category.id"
      class="text-center max-w-sm"
    >
      <h2 class="text-xl sm:text-2xl-b text-grey-400 text-left font-cubano">
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