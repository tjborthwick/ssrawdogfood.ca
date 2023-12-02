<template>
  <div>
    <div class="bg-purple p-6 pb-3 md:px-10 md:max-w-xs">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Raw Dog Food
      </h2>

      <p class="text-white mb-2">
        Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
      </p>

      <div class="flex gap-x-20 md:gap-x-6 items-center">
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

        <div>
          <img src="/images/products/chicken.png">
        </div>
      </div>
    </div>

    <div class="bg-blue p-6 pb-3 md:px-10 md:max-w-xs">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Dog Treats
      </h2>

      <p class="text-white mb-2">
        Tasty &amp; Beneficial All Natural One-Ingredient Dog Treats
      </p>

      <div class="flex gap-x-20 md:gap-x-6 items-center">
        <nav-link-button
          :href="route('catalogue.dog-treats')"
          size="small"
        >
          <span class="whitespace-nowrap">
            Shop Treats
          </span>
        </nav-link-button>

        <div>
          <img src="/images/products/chicken.png">
        </div>
      </div>
    </div>

    <div class="bg-green p-6 pb-3 md:px-10 md:max-w-xs">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Learn More:
      </h2>

      <ul class="list-disc pl-4 pb-3 text-white">
        <li class="text-sm font-bold leading-7">
          <Link
            :href="route('marketing.benefits')"
            class="no-underline hover:underline"
          >
            Benefits of Raw
          </Link>
        </li>

        <li class="text-sm font-bold leading-7">
          <Link
            :href="route('marketing.feeding')"
            class="no-underline hover:underline"
          >
            Transitioning & Feeding
          </Link>
        </li>

        <li class="text-sm font-bold leading-7">
          <Link
            :href="route('marketing.faq')"
            class="no-underline hover:underline"
          >
            Frequently Asked Questions
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import NavLinkButton from '@/Components/NavLinkButton.vue'

</script>

<style  scoped>

</style>