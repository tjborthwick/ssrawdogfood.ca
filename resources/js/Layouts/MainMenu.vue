<template>
  <ul class="hidden xl:flex items-center gap-x-5">
    <li
      v-for="(link, index) in textLinks"
      :key="index"
    >
      <template v-if="link.links">
        <main-menu-dropdown>
          <template #trigger>
            <span
              class="font-roboto uppercase font-bold outline-0 block"
              :class="{ 'text-white': isInverted }"
            >
              Products
            </span>
          </template>

          <template #content>
            <ul class="py-4 px-7">
              <li
                v-for="(subLink, subIndex) in link.links"
                :key="subIndex"
                class="my-1"
              >
                <Link
                  :active="route().current(link.route)"
                  :href="route(subLink.route)"
                  :class="{ 'text-white': isInverted }"
                  class="no-underline font-roboto text-lg text-tan hover:text-white font-normal"
                >
                  {{ subLink.name }}
                </Link>
              </li>
            </ul>
          </template>
        </main-menu-dropdown>
      </template>

      <template v-else>
        <responsive-nav-link
          :active="route().current(link.route)"
          :href="route(link.route)"
          :class="{ 'text-white': isInverted }"
          class="no-underline"
        >
          {{ link.name }}
        </responsive-nav-link>
      </template>
    </li>

    <li>
      <user-menu :inverted="isInverted" />
    </li>
  </ul>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { inject } from 'vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import UserMenu from '@/Layouts/UserMenu.vue'
import MainMenuDropdown from '@/Components/MainMenuDropdown.vue'

const isInverted = inject('inverted')

const textLinks = [
  { name: 'Home', route: 'marketing.home' },
  { name: 'Products', route: 'catalogue.pure-proteins', links: [
    { name: 'Pure Proteins', route: 'catalogue.pure-proteins' },
    { name: 'Balanced Meals', route: 'catalogue.gourmet-meals' },
    { name: 'Custom Food', route: 'catalogue.custom-food' },
    { name: 'Dog Treats', route: 'catalogue.dog-treats' },
  ] },
  { name: 'Benefits', route: 'marketing.benefits' },
  { name: 'Transitioning & Feeding', route: 'marketing.feeding' },
  { name: 'FAQ', route: 'marketing.faq' },
  { name: 'About', route: 'marketing.about' },
  { name: 'Contact', route: 'marketing.contact' },
]
</script>

<style scoped>
</style>