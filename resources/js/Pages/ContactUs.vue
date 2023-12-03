<template>
  <Head>
    <title>Contact Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="page bg-purple bg-hero-contact bg-no-repeat">
      <div class="container content !pt-16">
        <div class="max-w-[16rem] lg:max-w-[24rem]">
          <h1 class="text-5xl font-cubano uppercase mb-6">
            Contact
          </h1>

          <p class="mb-6 max-w-md">
            Don’t hesitate to reach out with any
            questions–we are here to help you
            start your raw food journey
          </p>

          <h2 class="text-2xl font-cubano uppercase mb-1 tracking-wide">
            Pick Up Location *
          </h2>

          <p class="mb-4">
            Kensington Street <br>
            Woodstock, ON N4S 5L6
          </p>


          <p class="mb-4">
            Monday-Friday: 5pm-8pm<br>
            Saturday-Sunday: 9am-5pm
          </p>

          <p>
            * By appointment only.
          </p>

          <contact-form class="mt-10" />
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import ContactForm from '@/Components/ContactForm.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

</script>

<style scoped>
.bg-hero-contact {
  @apply bg-cover bg-left;
  background-position-x: -7rem;
}

@screen md {
  .bg-hero-contact {
    @apply bg-auto bg-bottom;
    background-size: 125%;
  }
}

@screen lg {
  .bg-hero-contact {
    @apply bg-auto bg-bottom;
    background-size: 132%;
  }
}
</style>