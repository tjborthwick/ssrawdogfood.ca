<template>
  <Head>
    <title>About Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="bg-grey-400">
      <div class="container page bg-no-repeat bg-hero-about bg-[length:260px] xs:bg-[length:300px] sm:bg-[length:400px] md:bg-[length:480px] lg:bg-auto bg-right-bottom">
        <div class="h-[250px] xs:h-[280px] md:h-[320px] lg:h-[420px] container content relative">
          <h1 class="text-5xl font-cubano uppercase absolute top-0 md:top-16">
            About Us
          </h1>

          <img
            src="/images/products/gourmet-duck.png"
            class="absolute bottom-[-2.5rem] md:bottom-[-5rem] left-2 md:left-10 xl:left-20 max-w-[180px] sm:max-w-[200px] md:max-w-[320px] lg:max-w-md"
          >
        </div>
      </div>

      <div class="bg-orange-100">
        <div class="container content !pt-[3rem] md:!pt-[6rem] lg:pb-10">
          <h2 class="text-2xl font-cubano uppercase mb-4 tracking-wide">
            Who Is S&S Raw Dod Food?
          </h2>

          <p>
            S&S Raw Dog food is a no frills, high quality raw dog food company based in Woodstock, Ontario. Our focus is bringing you the most cost efficient food while maintaining
            the highest quality. We make our raw dog food twice weekly, so it is never in the freezer long. We offer a range of <Link
              class=""
              :href="route('catalogue.index')"
            >
              Products
            </Link> as well as <Link
              class=""
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
                <h2 class="text-2xl font-cubano uppercase mb-4 tracking-wide">
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

            <div class="md:w-5/12 flex-1 bg-hero-about-2 bg-no-repeat bg-cover bg-top-center min-h-[520px] md:min-h-0 lg:min-h-[460px]" />
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

@screen lg {
  .bg-hero-about-2 {
    background-position-y: -2rem;
  }
}
</style>