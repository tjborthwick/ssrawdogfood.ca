<template>
  <ul class="flex items-center gap-x-4">

    <!-- Desktop links -->
    <li
      v-for="(link, index) in textLinks"
      :key="index"
      class="hidden xl:block"
    >
      <template v-if="link.links">
        <main-menu-dropdown>
          <template #trigger>
            <responsive-nav-link
              class="no-underline"
              :class="{ 'text-white': isInverted }"
              :active="route().current('catalogue.*')"
              :href="route(link.links[0].route)"
            >
              {{ link.name }}
            </responsive-nav-link>
          </template>

          <template #content>
            <ul class="py-4 px-7 bg-grey-400" :class="{ 'bg-white': isInverted }">
              <li
                v-for="(subLink, subIndex) in link.links"
                :key="subIndex"
                class="my-1"
              >
                <Link
                  :href="route(subLink.route)"
                  :class="{
                    'text-grey-400 hover:text-tan': isInverted,
                    'text-tan hover:text-white': !isInverted,
                    'text-tan': isInverted && route().current(subLink.route),
                    'text-white': !isInverted && route().current(subLink.route)
                  }"
                  class="no-underline font-roboto text-lg font-normal active:text-white"
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

    <li class="xl:hidden">
      <main-menu-mobile />
    </li>
  </ul>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { inject } from 'vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import UserMenu from '@/Layouts/UserMenu.vue'
import MainMenuMobile from '@/Layouts/MainMenuMobile.vue'
import MainMenuDropdown from '@/Components/MainMenuDropdown.vue'

const isInverted = inject('inverted')

const textLinks = [
  { name: 'Home', route: 'marketing.home' },
  { name: 'Products', route: 'catalogue.pure-proteins', links: [
    { name: 'Pure Proteins', route: 'catalogue.pure-proteins' },
    { name: 'Gourmet Meals', route: 'catalogue.gourmet-meals' },
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