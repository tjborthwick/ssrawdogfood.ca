<template>
  <Head>
    <title>Benefits of Raw</title>
  </Head>

  <guest-layout>
    <div class="page bg-hero-benefits bg-no-repeat bg-contain bg-top-center md:bg-cover">
      <div class="min-h-[240px] xs:min-h-[300px] xl:min-h-[500px] 2xl:min-h-[600px] 4xl:min-h-[720px]">
        <div class="container px-5 md:px-10 xl:px-20 relative">
          <h1 class="text-2xl xs:text-3xl md:text-5xl 3xl:text-6xl 4xl:text-7xl font-cubano text-grey-400 uppercase absolute top-6 sm:top-10 3xl:top-28 5xl:top-48">
            Why Raw?
          </h1>
        </div>
      </div>

      <div class="bg-purple inverted">
        <div class="container content !pt-[3rem] xs:!pt-[5.25rem] !pb-10 relative">
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
            class="absolute top-[-7rem] sm:top-[-9.5rem] sm:left-8 max-w-[200px] xs:max-w-xxs sm:max-w-[300px] 3xl:max-w-sm 3xl:top-[-12em] 3xl:left-20"
          >
        </div>
      </div>

      <div class="container content">
        <div class="px-6 py-8">
          <ul>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Improved Oral Health
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Better Breath
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Healther Skin
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Shinier Coat
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Relieves Allergies
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Smaller Stools
            </li>
            <li class="text-3xl text-bold font-cubano text-grey-400 mb-6 uppercase tracking-wide">
              Better Overall Health
            </li>
          </ul>

          <Link
            class="text-grey-400 text-lg"
            :href="route('catalogue.index')"
          >
            See Our Products
          </Link>
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

.bg-hero-benefits {
  /* background-position-y: calc(100vw * 0.05* -1); */
}

@screen xl {
   .bg-hero-benefits {
    background-position-y: calc(100vw * 0.18 * -1);
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