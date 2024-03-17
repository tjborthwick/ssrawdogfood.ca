<template>
  <transition name="slide">
    <div
      v-show="show"
      class="mobile-menu fixed overflow-auto top-0 bottom-0 right-0 z-30 xl:hidden py-8 px-10 h-screen w-96 max-w-[95vw] bg-grey-400 text-tan"
    >
      <div class="text-right mb-2">
        <a
          href="#"
          class="no-underline text-4xl font-normal"
          @click.prevent="handleClose"
        >
          <close-svg
            :width="38"
            :height="38"
            class="ml-auto fill-tan hover:fill-white"
          />
        </a>
      </div>

      <ul>
        <li
          v-for="link in mainMenuLinks"
          :key="link.route"
          class="py-1.5"
        >
          <Link
            :href="route(link.route)"
            :class="{ 'text-white': route().current(link.route) }"
            class="no-underline font-roboto hover:text-white text-base font-bold uppercase tracking-wide"
          >
            {{ link.name }}
          </Link>

          <ul
            v-if="link.links"
            class="pl-8 pt-3 pb-0.5"
          >
            <li
              v-for="subLink in link.links"
              :key="subLink.route"
              class="my-0.5"
            >
              <Link
                :href="route(subLink.route)"
                :class="{ 'text-white': route().current(subLink.route) }"
                class="no-underline font-roboto capitalize hover:text-white text-base font-semibold tracking-wide"
              >
                {{ subLink.name }}
              </Link>
            </li>
          </ul>
        </li>

        <li class="my-12" />

        <!-- <li
          v-for="link in userMenuLinks"
          :key="link.route"
          class="py-1"
        >
          <Link
            :href="route(link.route)"
            class="no-underline font-roboto hover:text-white text-base font-bold uppercase tracking-wide"
          >
            {{ link.name }}
          </Link>
        </li> -->
      </ul>
    </div>
  </transition>

  <transition name="fade">
    <div v-if="show" class="bg-overlay fixed top-0 left-0 right-0 bottom-0 z-10"></div>
  </transition>
</template>

<script setup>
import { watch, onUnmounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import CloseSvg from '@/SVG/CloseSvg.vue'

const props = defineProps({
  show: { type: Boolean, default: false }
})

const emit = defineEmits(['update:show'])

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
  { name: 'Account', route: 'profile.edit' },
  { name: 'Cart', route: 'shop.cart' },
  { name: 'Checkout', route: 'shop.cart' },
]

const handleClose = function () {
  emit('update:show', false)
}

const removeBodyClass = function () {
  document.body.classList.remove('overflow-hidden')
}

watch(() => props.show, (newValue) => {
  if (newValue) {
    document.body.classList.add('overflow-hidden')
  } else {
    removeBodyClass()
  }
})

onUnmounted(() => {
  removeBodyClass()
})
</script>

<style>

</style>