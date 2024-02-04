<template>
  <form @submit.prevent="handleSubmit">
    <div class="mb-4">
      <label class="block font-bold">
        Name
      </label>

      <text-input v-model="form.name"/>
      <input-error :message="form?.errors?.name"/>
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Email
      </label>

      <text-input type="email" v-model="form.email" />
      <input-error :message="form?.errors?.email"/>
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Phone
      </label>

      <text-input v-model="form.phone"/>
      <input-error :message="form?.errors?.phone"/>
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Message
      </label>

      <textarea-input v-model="form.message"/>
      <input-error :message="form?.errors?.message"/>
    </div>

    <primary-button :inverted="true">
      Send
    </primary-button>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import TextInput from '@/Components/TextInput.vue'
import TextareaInput from '@/Components/TextareaInput.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import InputError from '@/Components/InputError.vue'
import { watch } from 'vue'

const form = useForm({
  name: '',
  email: '',
  phone: '',
  message: '',
})

const handleSubmit = function () {
  form.post(route('marketing.contact.send'), {
    preserveState: (page) => Object.keys(page.props.errors).length,
    preserveScroll: true,
  })
}

watch(() => form.errors, (newValue) => {
  console.log('watcher', newValue?.name)
}, { immediate: true })

</script>

<style scoped>

</style>