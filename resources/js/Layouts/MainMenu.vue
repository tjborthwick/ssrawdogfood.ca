<template>
  <ul class="hidden xl:flex items-center gap-x-5">
    <li
      v-for="(link, index) in textLinks"
      :key="index"
    >
      <responsive-nav-link
        :active="route().current(link.route)"
        :href="route(link.route)"
        :class="{ 'text-white': isInverted }"
        class="no-underline"
      >
        {{ link.name }}
      </responsive-nav-link>
    </li>
    <li>
      <user-menu />
    </li>
  </ul>
</template>

<script setup>
import { inject } from 'vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import UserMenu from '@/Layouts/UserMenu.vue';

const isInverted = inject('inverted')

const textLinks = [
  { name: 'Home', route: 'marketing.home' },
  { name: 'Products', route: 'catalogue.index' },
  { name: 'Benefits', route: 'marketing.benefits' },
  { name: 'Transitioning & Feeding', route: 'marketing.feeding' },
  { name: 'FAQ', route: 'marketing.faq' },
  { name: 'About', route: 'marketing.about' },
  { name: 'Contact', route: 'marketing.contact' },
]
</script>

<style scoped>
</style>