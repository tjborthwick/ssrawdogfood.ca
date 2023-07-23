<template>
  <Head>
    <title>Benefits of Raw</title>
  </Head>

  <guest-layout>
    <div class="page bg-hero-benefits bg-no-repeat bg-cover">
      <div class="min-h-[400px] 2xl:min-h-[600px] 4xl:min-h-[720px]">
        <div class="container content relative">
          <h1 class="text-5xl 3xl:text-6xl 4xl:text-7xl font-cubano text-grey-400 uppercase tracking-wide absolute top-16 3xl:top-28 5xl:top-48">
            Why Raw?
          </h1>
        </div>
      </div>

      <div class="bg-purple inverted">
        <div class="container content !pt-28 !pb-10 relative">
          <h2 class="text-2xl font-cubano uppercase mb-4 tracking-wide">
            Benefits of Feeding Your Dog a Raw Diet
          </h2>

          <p>
            There are many benefits to a raw diet. S&S Raw Dog Food products do not contain any additives,
            preservatives or grains. Grains are a major source of allergies in dogs as their system can't digest them.
            Raw food and natural treats are the way nature intended!
          </p>

          <img
            src="/images/products/gourmet-turkey.png"
            class="absolute top-[-16rem] left-8"
          >
        </div>
      </div>

      <div class="container content">
        <ul>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Improved Oral Health
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Better Breath
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Healther Skin
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Shinier Coat
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Relieves Allergies
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Smaller Stools
          </li>
          <li class="text-4xl text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
            Better Overall Health
          </li>
        </ul>

        <Link class="text-grey-400 text-xl" :href="route('catalogue.index')">
          See Our Products
        </Link>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3'
</script>

<style scoped>

.bg-hero-benefits {
  /* background-position-y: calc(100vw * 0.01 * -1); */
}

@screen xl {
   .bg-hero-benefits {
    background-position-y: calc(100vw * 0.15 * -1);
  }
}

@screen 2xl {
  .bg-hero-benefits {
    background-position-y: calc(100vw * 0.175 * -1)
  }
}

@screen 5xl {
  .bg-hero-benefits {
    background-position-y: calc(100vw * 0.2 * -1)
  }
}
</style>