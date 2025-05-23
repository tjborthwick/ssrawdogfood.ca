<template>
  <Head>
    <title>Delivery</title>
  </Head>

  <guest-layout>
    <div class="page">
      <div class="container content">
        <product-breadcrumbs
          class="mb-4"
          :crumbs="crumbs"
        />

        <div class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-16">
          <div class="sm:w-1/3">
            <img src="/images/products/custom-raw-dog-food.png" alt="Container of Raw Dog Food">
          </div>

          <div class="sm:w-2/3">
            <h1 class="text-4xl font-cubano text-grey-400 mb-2">
              Delivery
            </h1>

            <p class="text-grey-400">
              <strong>Fee</strong>: $20 <br>
              <strong>Wednesday Deliveries</strong>: Ingersol, London, Tillsonburg, SW Oxford, Norwich <br>
              <strong>Thursday Deliveries</strong>: Drumbo, Cambridge, Kitchener, Waterloo, Innerkip
            </p>

            <p class="text-grey-400 mt-2">Please note that our service covers specific <a href="#" @click="showPostalCodes = true">postal codes</a> within these regions</p>

            <delivery-form class="mt-4" />
          </div>
        </div>
      </div>
    </div>

    <Modal
      :show="showPostalCodes"
      @close="closeModal"
    >
      <div class="p-4 ">
        <h2 class="text-2xl mb-2 font-cubano font-medium text-gray-900">
          Valid Postal Codes for Delivery
        </h2>

        <p class="">
          N0B 2R0, N0B 1E0, N0B 2E0, N0J 1A0, N0J 1B0, N0J 1C0, N0J 1G0, N0J 1J0, N0J 1L0,
          N0J 1M0, N0J 1N0, N0J 1P0, N0J 1R0, N0J 1S0, N0J 1V0, N0J 1W0, N0J 1X0, N0L 1C0,
          N0L 1V0, N0L 2B0, N0L 2J0, N0M 2C0, N0M 2G0, N0M 2M0, N0L 1G*, N1P*, N1R*, N1S*,
          N1T*, N2A*, N2B*, N2C*, N2E*, N2G*, N2H*, N2J*, N2K*, N2L*, N2M*, N2P*, N2R*,
          N2T*, N2V*, N3C*, N3E*, N3H*, N4G*, N4S*, N4T*, N4V*, N5C*, N5V*, N5W*, N5X*,
          N5Y*, N5Z*, N6A*, N6B*, N6C*, N6E*, N6G*, N6H*, N6J*, N6K*, N6L*, N6M*, N6N*,
          N6P*
        </p>

        <primary-button :inverted="true" @click="closeModal" class="mt-4">
          Close
        </primary-button>
      </div>
    </Modal>
  </guest-layout>
</template>

<script setup>
  import { Head } from '@inertiajs/vue3'
  import { nextTick, ref } from 'vue';
  import GuestLayout from '@/Layouts/GuestLayout.vue'
  import ProductBreadcrumbs from '@/Components/ProductBreadcrumbs.vue'
  import DeliveryForm from '@/Components/DeliveryForm.vue';
  import Modal from '@/Components/Modal.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue'

  const crumbs = [
    { title: 'Products', url: 'catalogue.index' },
    { title: 'Delivery', url: null }
  ]

  const props = defineProps({
    products: { type: Array, default: () => [] }
  })

  const showPostalCodes = ref(false)

  const closeModal = () => {
    showPostalCodes.value = false;
  };
</script>