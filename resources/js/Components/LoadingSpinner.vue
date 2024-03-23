<template>
<svg :width="width" :height="height" :viewBox="`0 0 ${width} ${height}`" xmlns="http://www.w3.org/2000/svg" class="animate-spin inline-block">
  <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity=".25"/>
  <circle cx="12" cy="2.5" r="1.5"/>
</svg>
</template>

<script setup>
const props = defineProps({
  width: { type: Number, default: 24 },
  height: { type: Number, default: 24 },
})
</script>