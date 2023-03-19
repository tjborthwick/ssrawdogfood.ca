<template>
  <ul class="flex items-center gap-x-2">
    <li>
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
    <li>
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
  </ul>
</template>

<script setup>
import { computed, inject } from 'vue'
import { Link } from '@inertiajs/vue3';

const isInverted = inject('inverted')

const accountIconSrc = computed(() => isInverted ? '/images/icons/icon-account-inverse.png' : '/images/icons/icon-account.png')
const cartIconSrc = computed(() => isInverted ? '/images/icons/icon-cart-inverse.png' : '/images/icons/icon-cart.png')
</script>

<style scoped>

</style>