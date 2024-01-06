<template>
  <ul class="flex items-center gap-x-3 pl-2 xl:-mr-[1.9rem] 3xl:-mr-14">
    <li class="hidden xs:inline">
      <Link
        class="hover:opacity-75"
        :href="route('profile.edit')"
      >
        <img
          class="inline-block"
          :src="accountIconSrc"
          width="32"
          height="auto"
        >
      </Link>
    </li>
    <li class="hidden xs:inline">
      <Link
        class="hover:opacity-75"
        :href="route('shop.cart')"
      >
        <img
          class="inline-block"
          :src="cartIconSrc"
          width="32"
          height="auto"
        >
      </Link>
    </li>
    <li class="xl:hidden">
      <a
        href="#"
        @click.prevent="emit('update:showMobileMenu', true)"
      >
        <img
          :src="mobileMenuSrc"
          width="32"
          height="auto"
          class="inline-block"
        >
      </a>
    </li>
  </ul>
</template>

<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  inverted: { type: Boolean, default: false },
  footer: { type: Boolean, default: false },
})

const emit = defineEmits(['update:showMobileMenu'])

const accountIconSrc = computed(() => {
  if (props.footer) {
    return '/images/icons/icon-account-var-3.png'
  }

  return props.inverted ? '/images/icons/icon-account-inverse.png' : '/images/icons/icon-account.png'
})

const cartIconSrc = computed(() => {
  if (props.footer) {
    return '/images/icons/icon-cart-var-3.png'
  }

  return props.inverted ? '/images/icons/icon-cart-inverse.png' : '/images/icons/icon-cart.png'
})

const mobileMenuSrc = computed(() => {
  if (props.footer) {
    return '/images/icons/icon-menu-var-3.png'
  }

  return props.inverted ? '/images/icons/icon-menu-inverse.png' : '/images/icons/icon-menu.png'
})
</script>

<style scoped>

</style>