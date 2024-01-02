<template>
  <Head>
    <title>About Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="bg-grey-400">
      <div class="page bg-no-repeat bg-hero-about container bg-[length:0px] xs:bg-[length:280px] sm:bg-[length:400px] md:bg-[length:480px] xl:bg-auto">
        <div class="hero-container content relative">
          <h1 class="page-title absolute top-6 sm:top-16">
            About Us
          </h1>
        </div>
      </div>

      <div class="bg-orange-100">
        <div class="container content !pt-[3rem] xs:!pt-[4rem] md:!pt-[5rem] 3xl:!pt-[5.5rem]  lg:pb-16 xl:pb-12 relative">
          <img
            src="/images/products/gourmet-duck.png"
            class="absolute top-[-7rem] sm:top-[-9rem] lg:top-[-10rem] xl:top-[-18.25rem] left-2 md:left-10 xl:left-14 3xl:left-20 max-w-[200px] xs:max-w-xxs sm:max-w-[285px] lg:max-w-xs xl:max-w-none"
          >

          <h2 class="text-base15-2xl leading-snug lg:text-2xl font-cubano uppercase mb-4 tracking-wide">
            Who Is S&S Raw Dod Food?
          </h2>

          <p>
            S&S Raw Dog food is a no frills, high quality raw dog food company based in Woodstock, Ontario. Our focus is bringing you the most cost efficient food while maintaining
            the highest quality. We make our raw dog food twice weekly, so it is never in the freezer long. We offer a range of <Link
              class="inline-block"
              :href="route('catalogue.index')"
            >
              Products
            </Link> as well as <Link
              class="inline-block"
              :href="route('catalogue.custom-food')"
            >
              Custom Food
            </Link>, so if you have a dog with
            special food needs we can help. The proof is in our product, so give us a try!
          </p>
        </div>
      </div>

      <div class="bg-orange-200">
        <div class="container">
          <div class="md:flex">
            <div class="md:w-7/12">
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

            <div class="md:w-5/12 flex-1 bg-hero-about-2 bg-no-repeat bg-cover bg-top-center min-h-[520px] md:min-h-0 lg:min-h-[467px]" />
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
  @apply min-h-[200px] sm:min-h-[325px] xl:min-h-[440px];
}

.bg-hero-about {
  background-position: 105% 100%;
}

@screen sm {
  .bg-hero-about {
    background-position: 90% 100%;
  }
}

@screen xl {
  .bg-hero-about {
    background-position: 100% 100%;
  }
}
</style>