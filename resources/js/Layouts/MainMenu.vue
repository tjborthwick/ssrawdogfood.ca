<template>
  <ul class="flex items-center gap-x-4 xl:justify-between xl:w-full">
    <!-- Desktop links -->
    <li
      v-for="(link, index) in textLinks"
      :key="index"
      class="hidden xl:block"
    >
      <template v-if="link.links">
        <main-menu-dropdown :trigger-route="link.links[0].route" :trigger-route-active="route().current('catalogue.*')" :is-inverted="isInverted">
          <template #trigger>
            {{ link.name }}
          </template>

          <template #content>
            <ul
              class="py-4 px-7 bg-grey-400"
              :class="{ 'bg-white': isInverted }"
            >
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

    <li class="hidden xs:inline">
      <user-menu
        :inverted="isInverted"
        class="pb-3"
        @update:show-mobile-menu="payload => emit('update:showMobileMenu', payload)"
      />
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

const emit = defineEmits(['update:showMobileMenu'])
</script>

<style scoped>

</style>