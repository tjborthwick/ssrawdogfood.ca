<template>
  <Head>
    <title>Benefits of Raw</title>
  </Head>
  <!-- xl:min-h-[500px] 2xl:min-h-[600px] 4xl:min-h-[720px] -->
  <guest-layout>
    <div class="page bg-hero-benefits bg-no-repeat">
      <div class="">
        <div class="hero-container container content relative">
          <h1 class="page-title absolute top-6 sm:top-16">
            Why Raw?
          </h1>
        </div>

        <div class="bg-purple inverted">
          <div class="container content !pt-[3rem] xs:!pt-[5rem] 3xl:!pt-[5.5rem] !pb-10 relative">
            <h2 class="text-base15-2xl lg:text-2xl font-cubano uppercase mb-4 tracking-wide">
              Benefits of Feeding Your Dog a Raw Diet
            </h2>

            <p>
              There are many benefits to a raw diet. S&S Raw Dog Food products do not contain any additives,
              preservatives or grains. Grains are a major source of allergies in dogs as their system can't digest them.
              Raw food and natural treats are the way nature intended!
            </p>

            <img
              src="/images/products/gourmet-turkey.png"
              class="absolute top-[-7rem] sm:top-[-9rem] lg:top-[-10rem] 3xl:top-[-11.5em] sm:left-9 max-w-[200px] xs:max-w-xxs sm:max-w-[285px] lg:max-w-xs lg:left-14 3xl:max-w-[360px] 3xl:left-20"
            >
          </div>
        </div>

        <div class="container content">
          <div class="md:px-6 md:py-5">
            <ul>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Improved Oral Health
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Better Breath
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Healther Skin
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Shinier Coat
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Relieves Allergies
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Smaller Stools
              </li>
              <li class="text-2xl md:text-base15-3xl lg:text-3xl leading-none text-bold font-cubano text-grey-400 mb-4 uppercase tracking-wide">
                Better Overall Health
              </li>
            </ul>

            <Link
              class="text-grey-400 text-base"
              :href="route('catalogue.index')"
            >
              See Our Products
            </Link>
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
.hero-container {
  @apply min-h-[240px] xs:min-h-[325px] lg:min-h-[400px] 3xl:min-h-[440px] 5xl:min-h-[512px];
}

.bg-hero-benefits {
  background-size: contain;
}

@media (min-width: 560px), (min-height: 1024px) {
  .bg-hero-benefits {
    background-size: calc(100vw + (1024px - 100vw));
    background-position: 40% 100%;
  }
}

@media (min-height: 1280px) and (max-width: 1180px) {
  .bg-hero-benefits {
    background-size: calc(100vw + (1180px - 100vw));
    background-position: 40% 100%;
  }
}

@media (min-height: 1366px) and (max-width: 1290px) {
  .bg-hero-benefits {
    background-size: calc(100vw + (1290px - 100vw));
    background-position: 40% 100%;
  }
}

@media (max-aspect-ratio: 1/1) and (min-aspect-ratio: 5/6){
  .bg-hero-benefits {
    background-size: cover;
    background-position: 50% 50%;
  }
}

@media (orientation: landscape) {
  .bg-hero-benefits {
    background-size: cover;
    background-position: 50% 50%;
  }

  @media (min-height: 768px) {
    .bg-hero-benefits {
      background-position: 50% 45%;
    }
  }

  @media (min-height: 900px) {
    .bg-hero-benefits {
      background-position: 50% 40%;
    }
  }

  @media (min-height: 1080px) {
    .bg-hero-benefits {
      background-position: 50% 35%;
    }
  }

  @screen 5xl {
    .bg-hero-benefits {
      background-position: 50% 33.5%;
    }
  }
}
</style>