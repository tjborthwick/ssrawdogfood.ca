<template>
  <div class="mb-4">
    <div
      class="flex justify-between items-center cursor-pointer"
      @click="handleToggle"
    >
      <h2
        class="text-sm sm:text-base leading-snug md:text-base15-lg lg:text-lg font-bold tracking-wide"
        :class="{ 'mb-2': isActive }"
      >
        <slot name="question" />
      </h2>

      <plus-icon
        v-if="!isActive"
        width="32px"
        height="32px"
        class="text-white min-w-min"
      />

      <minus-icon
        v-if="isActive"
        width="32px"
        height="32px"
        class="text-white min-w-min"
      />
    </div>

    <transition name="accordion">
      <p
        v-show="isActive"
        class="mb-8"
      >
        <slot name="answer" />
      </p>
    </transition>
  </div>
</template>

<script setup>
import PlusIcon from '@/Icons/PlusIcon.vue'
import MinusIcon from '@/Icons/MinusIcon.vue'

const props = defineProps({
  isActive: { type: Boolean, default: false }
})

const emit = defineEmits(['toggle'])

const handleToggle = function () {
  emit('toggle')
}

</script>

<style scoped>
.accordion-enter-active,
.accordion-leave-active {
    transition: all 0.2s;
    max-height: 230px;
}

.accordion-enter,
.accordion-leave-to {
    opacity: 0;
    max-height: 0px;
}
</style>