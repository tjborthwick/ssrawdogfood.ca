<template>
  <Head>
    <title>About Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="h-full">
      <div class="page !h-auto bg-no-repeat bg-hero-about container">
        <div class="hero-container content relative">
          <h1 class="page-title">
            About Us
          </h1>
        </div>
      </div>

      <div class="bg-orange-100">
        <div class="container content !pt-[3rem] xs:!pt-[4rem] md:!pt-[5rem] 3xl:!pt-[5.5rem]  lg:pb-16 xl:pb-12 relative">
          <img
            src="/images/products/gourmet-duck.png"
            class="hero-product-img"
            alt="Container of Gourmet Duck Dog Food"
          >

          <h2 class="text-base15-2xl leading-snug lg:text-2xl font-cubano uppercase mb-4 tracking-wide">
            Who Is S&S Raw Dod Food?
          </h2>

          <p>
            S&S Raw Dog food is a no frills, high quality raw dog food company based in Woodstock, Ontario. Our focus is bringing you the most cost efficient food while maintaining
            the highest quality. We make our raw dog food twice weekly, so it is never in the freezer long. We offer a range of <Link class="inline-block" :href="route('catalogue.index')">Products</Link> as well as
            <Link class="inline-block" :href="route('catalogue.custom-food')">Custom Food</Link>, so if you have a dog with special food needs we can help. The proof is in our product, so give us a try!
          </p>
        </div>
      </div>

      <div class="bg-orange-200">
        <div class="container">
          <div class="md:flex">
            <div class="flex-1">
              <div class="content !pt-10 lg:pb-10">
                <h2 class="text-base15-2xl leading-snug lg:text-2xl font-cubano uppercase mb-4 tracking-wide">
                  Why We Do What We Do
                </h2>

                <p class=" mb-4">
                  Our puppy had allergies when we brought him home,
                  though at first we weren't sure what was going on. We did
                  the normal things; changed food, went to the vet, and after
                  doing our own research we decided to try raw. Best thing we
                  ever did, as our puppy’s issues cleared up.
                </p>

                <p class=" mb-4">
                  We found buying raw food a little pricey but wanted a
                  healthy happy dog, so we decided to try making our own.
                  From there the rest is history. We thought why not do this
                  for other people? Today we provide a quality product at a
                  good price, making it easier for everyone to feed their dog a
                  raw diet.
                </p>

                <Link :href="route('catalogue.index')">
                  See our Products
                </Link>
              </div>
            </div>

            <div class="flex-1 md:max-w-[290px] lg:max-w-[32%] bg-hero-about-2 bg-no-repeat bg-cover bg-top-center min-h-[520px] md:min-h-0 lg:min-h-[467px]" />
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
.page-title {
  @apply absolute top-6 sm:top-16;
}

.hero-container {
  @apply min-h-[200px] sm:min-h-[325px] xl:min-h-[440px];
}

@media (max-height: 540px) {
  .hero-container {
    @apply min-h-[200px];
  }

  @screen md {
    .hero-container {
      @apply min-h-[210px];
    }
  }

  .page-title {
    @apply top-0;
  }
}

.bg-hero-about {
  @apply bg-[length:0px];
  background-position: 105% 100%;
}

@screen xs {
  .bg-hero-about {
    @apply bg-[length:280px];
  }
}

@screen sm {
  .bg-hero-about {
    @apply bg-[length:400px];
    background-position: 90% 100%;
  }
}

@screen md {
  .bg-hero-about {
    @apply bg-[length:480px];
  }
}

@screen xl {
  .bg-hero-about {
    @apply bg-auto;
    background-position: 100% 100%;
  }
}

@media (max-height: 540px) {
  .bg-hero-about {
    background-size: auto 70%;
    background-position: 80% 100%;
  }

  @screen md {

    .bg-hero-about {
      background-size: auto 85%;
      background-position: 80% 100%;
    }
  }
}

.hero-product-img {
  @apply absolute top-[-7rem] left-2 max-w-[200px];
}

@screen xs {
  .hero-product-img {
    @apply max-w-xxs;
  }
}

@screen sm {
  .hero-product-img {
    @apply top-[-9rem] max-w-[285px];
  }
}

@screen md {
  .hero-product-img {
    @apply left-10;
  }
}

@screen lg {
  .hero-product-img {
    @apply max-w-xs top-[-10rem];
  }
}

@screen xl {
  .hero-product-img {
    @apply max-w-none top-[-18.25rem] left-14;
  }
}

@screen 3xl {
  .hero-product-img {
    @apply left-20;
  }
}

@media (max-height: 540px) {
  .hero-product-img {
    @apply top-[-7rem] left-auto max-w-[200px];
  }

  @screen md {
    .hero-product-img {
        @apply top-[-9rem] max-w-[285px];
    }
  }
}
</style>