<template>
  <Head>
    <title>Transitioning & Feeding</title>
  </Head>

  <guest-layout>
    <div class="page bg-no-repeat bg-cover">
      <div>
        <div class="hero-container container content relative">
          <h1 class="page-title absolute page-title top-6 sm:top-16">
            Transitioning <br> &amp; Feeding
          </h1>

          <img
            src="/images/products/patty.png"
            class="absolute bottom-[-4rem] left-2 sm:left-10 lg:left-14 3xl:left-20 max-w-[185px]"
          >
        </div>

        <div class="bg-green inverted">
          <div class="container content !pt-[4.5rem] !pb-10">
            <h2 class="text-base15-2xl leading-snug lg:text-2xl uppercase font-cubano tracking-wide mb-4">
              Transitioning Your Dog To Raw Food
            </h2>

            <p class="mb-4">
              Making the transition to raw food is easier than you might think. We recommend making the switch by
              just stopping feeding kibble, and the next day start feeding raw.
            </p>

            <h3 class="text-base15-xl lg:text-xl uppercase font-cubano tracking-wide mb-4">
              A Couple Tips:
            </h3>

            <div class="md:flex gap-x-6 items-center lg:items-start">
              <ul class="list-disc pl-7 pt-2">
                <li class="mb-4">
                  <p>
                    Start with the most cost effective protein, which is <Link :href="route('catalogue.view-product', 'chicken')">Chicken</Link>, then once or
                    twice a week switch to a different protein. <Link :href="route('catalogue.view-product', 'turkey')">Turkey,</Link>&nbsp;
                    <Link :href="route('catalogue.view-product', 'gourmet-duck')">Duck</Link> and <Link :href="route('catalogue.view-product', 'gourmet-rabbit')">Rabbit</Link> are
                    also great choices as they are often easy to digest as well.
                  </p>
                </li>
                <li>
                  <p>
                    Serve the first few meals at room temperature rather than cold, and offer
                    a half serving first. Wait a bit before providing the remaining serving. This
                    will help prevent your pet from eating too fast and vomiting.
                  </p>
                </li>
              </ul>

              <img
                src="/images/products/gourmet-chicken.png"
                class="max-w-[220px] ml-auto mt-6 md:mt-0"
              >
            </div>
          </div>
        </div>
      </div>

      <div class="bg-blue inverted">
        <div class="md:flex container">
          <div class="md:w-[50%] lg:w-1/2">
            <div class="content !py-8">
              <h2 class="text-base15-2xl leading-snug lg:text-2xl uppercase font-cubano tracking-wide mb-4">
                Raw Diet Feeding Guidelines
              </h2>

              <p class="mb-4">
                The following recommendations are guidelines
                only based on an average dog of normal weight
                and activity. Your breeder may recommend a
                feeding schedule.
              </p>

              <h3 class="text-base15-lg lg:text-lg uppercase font-cubano tracking-wide mb-4">
                Puppies
              </h3>

              <ul class="list-disc pl-6 mb-4">
                <li class="mb-2">
                  <p class=" -ml-1.5">
                    Up to 4 months: 8-10% of their body weight and
                    feeding 4x daily
                  </p>
                </li>
                <li class="mb-2">
                  <p class=" -ml-1.5">
                    4-6 months: 6-8% of their body weight and
                    feeding 3x daily
                  </p>
                </li>
                <li class="mb-2">
                  <p class=" -ml-1.5">
                    6-8 months: 4-6% of their body weight and
                    feeding 2x daily
                  </p>
                </li>
                <li>
                  <p class=" -ml-1.5">
                    9-12 months 3-4% of their body weight and
                    feeding 2x daily
                  </p>
                </li>
              </ul>

              <h3 class="text-base15-lg lg:text-lg uppercase font-cubano tracking-wide mb-4">
                Adult Dogs
              </h3>

              <p class="mb-4">
                2% of their body weight or 1lb for every 50lbs of
                the dog. We like to feed twice daily, and
                recognize this doesn’t work for all families, so
                feeding once a day is ok as well.
              </p>

              <h3 class="text-base15-lg lg:text-lg uppercase font-cubano tracking-wide mb-4">
                Senior Dogs
              </h3>

              <p>
                Will vary but an average of 1.5% of the dog's
                bodyweight.
              </p>
            </div>
          </div>

          <div class="md:w-[50%] lg:w-1/2 bg-hero-feeding bg-cover min-h-[500px]" />
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
  @apply min-h-[240px] xs:min-h-[325px] xl:min-h-[440px] 5xl:min-h-[512px];
}
</style>