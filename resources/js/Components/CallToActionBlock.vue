<template>
  <div class="bg-purple md:px-8 lg:px-10 cta-block">
    <div class="cta-content">
      <div class="">
        <h2 class="text-3xl text-white uppercase font-cubano mb-4">
          <slot name="title" />
        </h2>

        <p class="text-white mb-2">
          Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
        </p>
      </div>

      <div class="cta-links flex gap-x-20 md:gap-x-6 items-center">
        <nav-link-button
          :href="route('catalogue.index')"
          size="small"
        >
          <span
            class="whitespace-nowrap"
          >
            Shop Raw
          </span>
        </nav-link-button>

        <Link
          :href="route('catalogue.index')"
          class="flex justify-center items-center"
        >
          <img
            src="/images/products/chicken.png"
            class="image"
          >
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>

<style  scoped>

</style>