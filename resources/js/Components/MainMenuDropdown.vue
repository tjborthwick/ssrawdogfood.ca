<template>
  <div class="relative">
    <div
      @mouseover="open = true"
      @mouseleave="open = false"
    >
      <responsive-nav-link
        class="no-underline"
        :class="{ 'text-white': isInverted }"
        :active="triggerRouteActive"
        :href="triggerRoute ? route(triggerRoute) : '#'"
        @touchstart.self="open = !open"
        @touchend.stop.prevent.self
      >
        <slot name="trigger" />
      </responsive-nav-link>


      <transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="transform opacity-0 scale-95"
        enter-to-class="transform opacity-100 scale-100"
        leave-active-class="transition ease-in duration-75"
        leave-from-class="transform opacity-100 scale-100"
        leave-to-class="transform opacity-0 scale-95"
      >
        <div
          v-show="open"
          class="absolute z-50 rounded-md shadow-lg -translate-x-14 pt-4"
          :class="[widthClass, alignmentClasses]"
          style="display: none"
          @click="open = false"
        >
          <div class="translate-y-5">
            <slot name="content" />
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>

<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'

const props = defineProps({
    align: { type: String, default: null },
    width: { type: String, default: '48' },
    triggerRoute: { type: String, default: null },
    triggerRouteActive: { type: Boolean, default: false },
    isInverted: { type: Boolean, default: false },
})

const closeOnEscape = (e) => {
    if (open.value && e.key === 'Escape') {
        open.value = false;
    }
}

onMounted(() => document.addEventListener('keydown', closeOnEscape))
onUnmounted(() => document.removeEventListener('keydown', closeOnEscape))

const widthClass = computed(() => {
    return {
        48: 'w-48',
    }[props.width.toString()]
})

const alignmentClasses = computed(() => {
    if (props.align === 'left') {
        return 'origin-top-left left-0'
    } else if (props.align === 'right') {
        return 'origin-top-right right-0'
    } else {
        return 'origin-top'
    }
})

const open = ref(false)
</script>