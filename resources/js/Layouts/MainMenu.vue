<template>
  <ul class="flex items-center gap-x-5">
    <li>
      <responsive-nav-link
        :active="route().current('marketing.home')"
        :href="route('marketing.home')"
      >
        Home
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('catalogue.index')"
        :href="route('catalogue.index')"
      >
        Products
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('marketing.benefits')"
        :href="route('marketing.benefits')"
      >
        Benefits
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('marketing.feeding')"
        :href="route('marketing.feeding')"
      >
        Transitioning &amp; Feeding
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('marketing.faq')"
        :href="route('marketing.faq')"
      >
        FAQ
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('marketing.about')"
        :href="route('marketing.about')"
      >
        About
      </responsive-nav-link>
    </li>
    <li>
      <responsive-nav-link
        :active="route().current('marketing.contact')"
        :href="route('marketing.contact')"
      >
        Contact
      </responsive-nav-link>
    </li>
    <li>
      <ul class="flex items-center gap-x-2">
        <li>
          <Link
            class="hover:opacity-75"
            :href="route('profile.edit')"
          >
            <img
              class="inline-block"
              src="/images/icons/icon-account.png"
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
              src="/images/icons/icon-cart.png"
              width="32"
              height="auto"
            >
          </Link>
        </li>
      </ul>
    </li>
  </ul>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
</script>

<style scoped>
.active {

}
</style>