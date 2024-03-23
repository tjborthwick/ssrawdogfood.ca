<template>
  <form @submit.prevent="handleRecaptcha" class="max-w-md">
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

    <div class="flex items-center gap-x-2">
      <primary-button>Send</primary-button>

      <loading-spinner v-if="form.processing" />
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextareaInput from '@/Components/TextareaInput.vue'
import TextInput from '@/Components/TextInput.vue'
import LoadingSpinner from '@/Components/LoadingSpinner.vue'
import { useReCaptcha } from 'vue-recaptcha-v3'

const { executeRecaptcha } = useReCaptcha()

const form = useForm({
  name: '',
  email: '',
  phone: '',
  message: '',
})

const handleRecaptcha = async () => {
  form.processing = true
  form.clearErrors()
  form.captcha_token = await executeRecaptcha('customFood')

  handleSubmit()
}

const handleSubmit = function () {
  form.post(route('catalogue.custom-food.send'), {
    preserveState: (page) => Object.keys(page.props.errors).length,
    preserveScroll: true,
  })
}
</script>

<style scoped>

</style>