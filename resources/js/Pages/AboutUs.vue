<template>
  <Head>
    <title>About Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="bg-grey-400 pt-[100px]">
      <div class="relative max-w-7xl mx-auto px-10 bg-hero-about bg-no-repeat bg-right-bottom">
        <div class="h-[420px]">
          <h1 class="text-5xl text-white font-cubano uppercase tracking-wide absolute top-16">
            About Us
          </h1>

          <img
            src="/images/products/gourmet-duck.png"
            class="absolute bottom-[-5rem] left-16"
          >
        </div>
      </div>

      <div class="bg-orange-100">
        <div class="max-w-7xl px-10 pt-28 pb-10 mx-auto">
          <h2 class="text-2xl text-white font-cubano uppercase mb-4 tracking-wide">
            Who Is S&S Raw Dod Food?
          </h2>

          <p class="text-white">
            S&S Raw Dog food is a no frills, high quality raw dog food company based in Woodstock, Ontario. Our focus is bringing you the most cost efficient food while maintaining
            the highest quality. We make our raw dog food twice weekly, so it is never in the freezer long. We offer a range of <Link>products</Link> as well as <Link>custom food</Link>, so if you have a dog with
            special food needs we can help. The proof is in our product, so give us a try
          </p>
        </div>
      </div>

      <div class="bg-orange-200">
        <div class="max-w-7xl mx-auto">
          <div class="flex">
            <div class="w-6/12 px-10 py-10">
              <h2 class="text-2xl text-white font-cubano uppercase mb-4 tracking-wide">
                Why We Do What We Do
              </h2>

              <p class="text-white mb-4">
                Our puppy had allergies when we brought him home,
                though at first we weren't sure what was going on. We did
                the normal things; changed food, went to the vet, and after
                doing our own research we decided to try raw. Best thing we
                ever did, as our puppy’s issues cleared up.
              </p>

              <p class="text-white mb-4">
                We found buying raw food a little pricey but wanted a
                healthy happy dog, so we decided to try making our own.
                From there the rest is history. We thought why not do this
                for other people? Today we provide a quality product at a
                good price, making it easier for everyone to feed their dog a
                raw diet.
              </p>

              <Link class="text-white">
                See our Products
              </Link>
            </div>

            <div class="w-6/12 flex-1 bg-hero-about-2 bg-cover bg-center">
              <!-- <img
                src="/images/dogs/about-2.jpg"
                class="object-contain"
              > -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3'
</script>

<style scoped>

</style>