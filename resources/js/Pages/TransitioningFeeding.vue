<template>
  <Head>
    <title>Transitioning & Feeding</title>
  </Head>

  <guest-layout>
    <div class="h-full bg-no-repeat bg-cover pt-[100px]">
      <div>
        <div class="h-[400px] 2xl:h-[600px] 4xl:h-[720px] max-w-7xl mx-auto px-10 relative">
          <h1 class="text-5xl 3xl:text-6xl 4xl:text-7xl font-cubano text-grey-400 uppercase tracking-wide absolute top-16 3xl:top-28 5xl:top-48">
            Transitioning <br> &amp; Feeding
          </h1>

          <img
            src="/images/products/patty.png"
            class="absolute bottom-[-6rem] left-16 max-w-[260px]"
          >
        </div>

        <div class="bg-green text-white">
          <div class="max-w-7xl mx-auto px-10 pt-28 pb-10">
            <h2 class="text-2xl uppercase font-cubano tracking-wide mb-4">
              Transitioning Your Dog To Raw Food
            </h2>

            <div>
              <p class=" mb-4">
                Making the transition to raw food is easier than you might think. We recommend making the switch by
                just stopping feeding kibble, and the next day start feeding raw.
              </p>

              <h3 class="text-xl uppercase font-cubano tracking-wide mb-4">
                A Couple Tips:
              </h3>

              <div class="flex gap-x-8">
                <ul class="list-disc pl-7 pt-2">
                  <li class="mb-4">
                    <p>
                      Start with the most cost effective protein, which is <Link>Chicken</Link>, then once or
                      twice a week switch to a different protein. <Link>Turkey,</Link>&nbsp;
                      <Link class="text-white">Duck</Link> and <Link>Rabbit</Link> are
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
                  src="/images/products/chicken.png"
                  class="max-w-[260px]"
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-blue text-white">
        <div class="flex max-w-7xl mx-auto">
          <div class="w-[56%] lg:w-1/2  px-10 py-10">
            <h2 class="text-2xl uppercase font-cubano tracking-wide mb-4">
              Raw Diet Feeding Guidelines
            </h2>

            <p class="mb-4">
              The following recommendations are guidelines
              only based on an average dog of normal weight
              and activity. Your breeder may recommend a
              feeding schedule.
            </p>

            <h3 class="text-xl uppercase font-cubano tracking-wide mb-4">
              Puppies
            </h3>

            <ul class="list-disc pl-7 mb-4">
              <li class="">
                <p>
                  Up to 4 months: 8-10% of their body weight and
                  feeding 4x daily
                </p>
              </li>
              <li>
                <p>
                  4-6 months: 6-8% of their body weight and
                  feeding 3x daily
                </p>
              </li>
              <li>
                <p>
                  6-8 months: 4-6% of their body weight and
                  feeding 2x daily
                </p>
              </li>
              <li>
                <p>
                  9-12 months 3-4% of their body weight and
                  feeding 2x daily
                </p>
              </li>
            </ul>

            <h3 class="text-xl uppercase font-cubano tracking-wide mb-4">
              Adult Dogs
            </h3>

            <p class="mb-4">
              2% of their body weight or 1lb for every 50lbs of
              the dog. We like to feed twice daily, and
              recognize this doesn’t work for all families, so
              feeding once a day is ok as well.
            </p>

            <h3 class="text-xl uppercase font-cubano tracking-wide mb-4">
              Senior Dogs
            </h3>

            <p>
              Will vary but an average of 1.5% of the dog's
              bodyweight
            </p>
          </div>

          <div class="w-[44%] lg:w-1/2 bg-hero-feeding bg-cover">
            <!-- <img src="/images/dogs/raw-diet-feeding-guidelines.jpg"> -->
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