<template>
  <Head>
    <title>Benefits of Raw</title>
  </Head>

  <guest-layout>
    <div class="page bg-hero-benefits bg-no-repeat">
      <div class="hero-container container content relative">
        <h1 class="page-title">
          Why Raw?
        </h1>
      </div>

      <div class="bg-purple inverted">
        <div class="container content relative">
          <h2 class="text-base15-2xl leading-snug lg:text-2xl font-cubano uppercase mb-4 tracking-wide">
            Benefits of Feeding Your Dog a Raw Diet
          </h2>

          <p>
            There are many benefits to a raw diet. S&S Raw Dog Food products do not contain any additives,
            preservatives or grains. Grains are a major source of allergies in dogs as their system can't digest them.
            Raw food and natural treats are the way nature intended!
          </p>

          <img
            src="/images/products/gourmet-turkey.png"
            class="hero-product-img"
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
  </guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3'
</script>

<style scoped>
.page-title {
  @apply absolute top-6 sm:top-16;
}

@media (max-height: 540px) {
  .page-title {
    @apply top-0;
  }
}

/** @screen xs breakpoint (390px) */
@media (max-width: 389px) {
  .page-title {
    @apply text-base15-5xl;
  }
}

.hero-container {
  @apply min-h-[200px] md:min-h-[325px];
}

.hero-container + div .content {
  @apply !pt-[3rem] xs:!pt-[4rem] sm:!pt-[5rem] xl:!pt-[6.5rem] !pb-10;
}

@media (max-height: 540px) {
  .hero-container {
    @apply min-h-[200px];
  }

  .hero-container + div .content {
    @apply !pt-[3rem];
  }
}

@media (orientation: portrait) {
  @screen xs {
    .hero-container {
      @apply min-h-[325px];
    }
  }
}

@media screen(xl),
(min-height: 1440px) {
  .hero-container {
    @apply min-h-[440px];
  }
}

@media screen(3xl),
(min-height: 1920px) {
  .hero-container {
    @apply min-h-[570px];
  }
}

@screen xs {
  .bg-hero-benefits {
    background-size: auto 118%;
    background-position: 50% 100%;
  }

  @media (max-height: 540px) {
    .bg-hero-benefits {
      background-size: auto 112%;
      background-position: 25% 100%;
    }
  }
}

@screen md {
  .bg-hero-benefits {
    background-size: auto 116%;
    background-position: 42% 90%;
  }
}

@screen lg {
  .bg-hero-benefits {
    background-size: auto 126%;
    background-position: 42% 78%;
  }
}

@media (orientation: landscape) {
  .bg-hero-benefits {
    background-size: auto 130%;
    background-position: 50% 65%;
  }

  @media (min-width: 1120px) {
    .bg-hero-benefits {
      background-size: auto 145%;
      background-position: 50% 50%;
    }
  }

  @media (min-width: 1440px) {
    .bg-hero-benefits {
      background-size: auto 160%;
      background-position: 50% 45%;
    }
  }

  @media (min-width: 1601px) {
    .bg-hero-benefits {
      background-size: auto 175%;
      background-position: 50% 39%;
    }
  }

  @media (min-width: 1750px) {
    .bg-hero-benefits {
      background-size: cover;
      background-position: 50% 39%;
    }
  }

  @screen 5xl {
    .bg-hero-benefits {
      background-position: 50% 32%;
    }
  }
}

.hero-product-img {
  @apply absolute top-[-7rem] left-2 max-w-[200px];
}

@screen xs {
  .hero-product-img {
    @apply top-[-7rem] max-w-xxs;
  }
}

@screen sm {
  .hero-product-img {
    @apply top-[-9rem] left-10 max-w-[285px];
  }
}

@screen lg {
  .hero-product-img {
    @apply top-[-10rem] left-14 max-w-xs;
  }
}

@screen xl {
  .hero-product-img {
    @apply top-[-16.25rem] max-w-none;
  }
}

@screen 3xl {
  .hero-product-img {
    @apply left-20;
  }
}

@media (max-height: 540px) {
  .hero-product-img {
    @apply top-[-7rem] left-auto max-w-[200px] ;
  }
}
</style>