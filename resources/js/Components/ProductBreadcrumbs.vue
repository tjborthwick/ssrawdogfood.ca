<template>
  <ul class="flex items-center gap-x-1">
    <li>
      <Link
        :href="route('marketing.home')"
        class="no-underline font-roboto text-tan"
      >
        Home
      </Link>
    </li>

    <template
      v-for="(crumb, index) in crumbs"
      :key="index"
    >
      <li>
        <span class="font-roboto text-grey-200">
          /
        </span>
      </li>

      <li>
        <Link
          v-if="crumb.url"
          :href="crumb.url"
          class="no-underline font-roboto text-tan"
        >
          {{ crumb.title }}
        </Link>

        <span
          v-else
          class="font-roboto text-grey-200"
        >
          {{ crumb.title }}
        </span>
      </li>
    </template>
  </ul>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  crumbs: { type: Array, default: () => [] },
})
</script>

<style scoped>

</style>