<template>
  <form @submit.prevent="handleRecaptcha">
    <div class="mb-4">
      <label class="block font-bold">
        Name
      </label>

      <text-input v-model="form.name"/>
      <input-error :message="form?.errors?.name"/>
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Phone
      </label>

      <text-input v-model="form.phone"/>
      <input-error :message="form?.errors?.phone"/>
    </div>

    <div class="flex  gap-x-2">
      <div class="mb-4 w-full">
        <label class="block font-bold">
          Street Address
        </label>

        <text-input type="text" v-model="form.address" />
        <input-error :message="form?.errors?.address"/>
      </div>

      <div class="mb-4">
        <label class="block font-bold">
          Postal Code
        </label>

        <text-input type="text" v-model="form.postal" />
        <input-error :message="form?.errors?.postal"/>
      </div>
    </div>

    <div class="mb-4">
      <label class="block font-bold">
        Order Details
      </label>

      <textarea-input v-model="form.message"/>
      <input-error :message="form?.errors?.message"/>
    </div>

    <input-error v-if="form?.errors?.captcha_token" :message="form.errors.captcha_token" class="mb-4" />

    <div class="flex items-center gap-x-2">
      <primary-button :inverted="true">
        Send
      </primary-button>

      <loading-spinner v-if="form.processing" />
    </div>
  </form>
</template>

<script setup>
import { onMounted } from 'vue'
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
  phone: '',
  address: '',
  postal: '',
  message: '',
  captcha_token: '',
})

const handleRecaptcha = async () => {
  form.processing = true
  form.clearErrors()
  form.captcha_token = await executeRecaptcha('contactUs')

  handleSubmit()
}

const handleSubmit = function () {
  form.post(route('delivery.send'), {
    preserveState: (page) => Object.keys(page.props.errors).length,
    preserveScroll: true,
  })
}
</script>

<style scoped>

</style>