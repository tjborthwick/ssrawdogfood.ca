<template>
  <div>
    <a
      href="#"
      @click="showMenu = true"
    >
      <img
        :src="mobileMenuSrc"
        width="32"
        height="auto"
        class="inline-block pb-3"
      >
    </a>

    <Transition name="slide">
      <div
        v-show="showMenu"
        class="fixed top-0 bottom-0 right-0 z-30 xl:hidden py-8 px-10 h-screen w-96 max-w-[95vw] bg-grey-400 text-tan"
      >
        <div class="text-right">
          <a
            href="#"
            class="no-underline text-4xl font-normal"
            @click="showMenu = false"
          >
            <close-svg
              :width="32"
              :height="32"
              class="ml-auto fill-tan hover:fill-white"
            />
          </a>
        </div>

        <ul>
          <li
            v-for="link in mainMenuLinks"
            :key="link.route"
            class="text-lg font-bold uppercase py-2"
          >
            <Link
              :href="route(link.route)"
              :class="{ 'text-white': route().current(link.route) }"
              class="no-underline font-roboto hover:text-white"
            >
              {{ link.name }}
            </Link>

            <ul
              v-if="link.links"
              class="pl-8 pt-6 "
            >
              <li
                v-for="subLink in link.links"
                :key="subLink.route"
                class="capitalize text-lg py-0.5"
              >
                <Link
                  :href="route(subLink.route)"
                  :class="{ 'text-white': route().current(subLink.route) }"
                  class="no-underline font-roboto capitalize hover:text-white"
                >
                  {{ subLink.name }}
                </Link>
              </li>
            </ul>
          </li>

          <li class="my-12" />

          <li
            v-for="link in userMenuLinks"
            :key="link.route"
            class="text-lg font-bold uppercase py-2"
          >
            <Link
              :href="route(link.route)"
              class="no-underline font-roboto hover:text-white"
            >
              {{ link.name }}
            </Link>
          </li>
        </ul>
      </div>
    </Transition>
  </div>
</template>

<script setup>
import { computed, inject, ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import CloseSvg from '@/SVG/CloseSvg.vue'

const isInverted = inject('inverted')

const showMenu = ref(false)

const mobileMenuSrc = computed(() => isInverted ? '/images/icons/icon-menu-inverse.png' : '/images/icons/icon-menu.png')

const mainMenuLinks = [
  { name: 'Home', route: 'marketing.home' },
  { name: 'Products', route: 'catalogue.pure-proteins', links: [
    { name: 'Pure Proteins', route: 'catalogue.pure-proteins' },
    { name: 'Gourmet Meals', route: 'catalogue.gourmet-meals' },
    { name: 'Custom Food', route: 'catalogue.custom-food' },
    { name: 'Dog Treats', route: 'catalogue.dog-treats' },
  ] },
  { name: 'Benefits of Raw', route: 'marketing.benefits' },
  { name: 'Transitioning & Feeding', route: 'marketing.feeding' },
  { name: 'FAQ', route: 'marketing.faq' },
  { name: 'About Us', route: 'marketing.about' },
  { name: 'Contact Us', route: 'marketing.contact' },
]

const userMenuLinks = [
  { name: 'Account', route: 'marketing.home' },
  { name: 'Cart', route: 'marketing.home' },
  { name: 'Checkout', route: 'marketing.home' },
]
</script>

<style>
.slide-leave-active, .slide-enter-active {
   transition: transform .375s ease;
 }

 .slide-enter-from,
 .slide-leave-to {
   transform: translateX(100%);
 }
</style>