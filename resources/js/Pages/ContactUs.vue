<template>
  <Head>
    <title>Contact Us</title>
  </Head>

  <guest-layout :inverted="true">
    <div class="h-full bg-purple pt-[100px] bg-hero-contact bg-cover bg-no-repeat bg-right">
      <div class="max-w-7xl mx-auto px-10 pt-28">
        <h1 class="text-5xl font-cubano uppercase tracking-wide mb-6">
          Contact
        </h1>

        <p class="mb-6 max-w-md">
          Don’t hesitate to reach out with any
          questions–we are here to help you
          start your raw food journey
        </p>

        <h2 class="text-2xl font-cubano uppercase mb-4 tracking-wide">
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

        <contact-form class="mt-16" />
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

</style>