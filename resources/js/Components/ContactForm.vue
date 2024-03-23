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
import { ReCaptchaInstance } from 'recaptcha-v3'
import { useReCaptcha } from 'vue-recaptcha-v3'

const { executeRecaptcha, recaptchaLoaded, instance } = useReCaptcha()

const form = useForm({
  name: '',
  email: '',
  phone: '',
  message: '',
  captcha_token: '',
})

onMounted(async () => {
  await recaptchaLoaded()

  // Hide recaptcha badge from users. It gets automatically embedded by Recaptcha
  instance.value.hideBadge()
})

const handleRecaptcha = async () => {
  form.processing = true
  form.clearErrors()
  form.captcha_token = await executeRecaptcha('contactUs')

  handleSubmit()
}

const handleSubmit = function () {
  form.post(route('marketing.contact.send'), {
    preserveState: (page) => Object.keys(page.props.errors).length,
    preserveScroll: true,
  })
}
</script>

<style scoped>

</style>