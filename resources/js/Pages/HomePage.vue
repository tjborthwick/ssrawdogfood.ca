<template>
  <Head>
    <title>Home</title>
  </Head>

  <guest-layout :with-footer="false">
    <div class="bg-hero-home bg-cover bg-top bg-no-repeat h-full pt-[100px]">
      <div class="max-w-7xl h-full px-10 mx-auto flex flex-col justify-center relative">
        <h1 class="text-4xl font-bold uppercase font-cubano text-grey-400 absolute top-64 tracking-wide">
          Awesome Food <br> For Awesome <br> Friends
        </h1>

        <div class="flex flex-col absolute top-0 right-0">
          <div class="bg-purple p-8 max-w-xs">
            <h2 class="text-3xl text-white uppercase font-cubano mb-4">
              Raw Dog Food
            </h2>

            <p class="text-white mb-2">
              Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
            </p>

            <div class="flex gap-x-6 items-center">
              <nav-link-button>
                <span class="whitespace-nowrap">Shop Raw</span>
              </nav-link-button>

              <div>
                <img src="/images/products/chicken.png">
              </div>
            </div>
          </div>

          <div class="bg-blue p-8 max-w-xs">
            <h2 class="text-3xl text-white uppercase font-cubano mb-4">
              Dog Treats
            </h2>

            <p class="text-white mb-2">
              Tasty &amp; Beneficial All Natural One-Ingredient Dog Treats
            </p>

            <div class="flex gap-x-6 items-center">
              <nav-link-button>
                <span class="whitespace-nowrap">Shop Treats</span>
              </nav-link-button>

              <div>
                <img src="/images/products/chicken.png">
              </div>
            </div>
          </div>

          <div class="bg-green p-8 max-w-xs">
            <h2 class="text-3xl text-white uppercase font-cubano mb-4">
              Learn More:
            </h2>

            <ul class="list-disc pl-4 text-white">
              <li class="text-sm font-bold leading-7">
                Benefits of Raw
              </li>
              <li class="text-sm font-bold leading-7">
                Transitioning & Feeding
              </li>
              <li class="text-sm font-bold leading-7">
                Frequently Asked Questions
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3'
import NavLinkButton from '@/Components/NavLinkButton.vue'
</script>

<style scoped>
@screen xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.05 * -1)
    /* background-position-y: calc(100vw * 0.115 * -1) */
  }
}

@screen 2xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.125 * -1)
  }
}

@screen 3xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.1375 * -1)
  }
}
</style>