<template>
  <div>
    <img :src="product.image" :alt="product.title">

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
        >
      </li>
    </ul>
  </div>
</template>

<script setup>
const props = defineProps({
  product: { type: Object, required: true },
})
</script>

<style scoped>

</style>