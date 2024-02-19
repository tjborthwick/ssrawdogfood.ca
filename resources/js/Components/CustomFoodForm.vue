<template>
  <form @submit.prevent="handleSubmit" class="max-w-md">
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

     <text-input type="email" v-model="form.email"/>
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
        Details
      </label>

      <textarea-input v-model="form.message" row="4" placeholder="Tell us about your dog's special needs, or what you're looking for." />
      <input-error :message="form?.errors?.message"/>
    </div>

    <primary-button>Send</primary-button>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextareaInput from '@/Components/TextareaInput.vue'
import TextInput from '@/Components/TextInput.vue'

const form = useForm({
  name: '',
  email: '',
  phone: '',
  message: '',
})

const handleSubmit = function () {
  form.post(route('catalogue.custom-food.send'), {
    preserveState: (page) => Object.keys(page.props.errors).length,
    preserveScroll: true,
  })
}
</script>

<style scoped>

</style>