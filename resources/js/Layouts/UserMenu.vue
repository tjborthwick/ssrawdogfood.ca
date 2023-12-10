<template>
  <ul class="flex items-center gap-x-3 pl-2 xl:-mr-[1.9rem] 3xl:-mr-14">
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
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  inverted: { type: Boolean, default: false },
  footer: { type: Boolean, default: false },
})

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
</script>

<style scoped>

</style>