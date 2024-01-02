<template>
  <Head>
    <title>FAQ</title>
  </Head>

  <guest-layout>
    <div class="flex flex-col h-full">
      <div class="page !h-auto bg-no-repeat bg-hero-faq">
        <div class="hero-container container content relative">
          <h1 class="page-title absolute page-title top-6 sm:top-16">
            Raw FAQS
          </h1>
        </div>
      </div>

      <div class="bg-red inverted flex-1">
        <div class="container content !pt-[3rem] xs:!pt-[5rem] 3xl:!pt-[5.5rem] relative">
          <img
            src="/images/products/gourmet-beef.png"
            class="max-w-[200px] xs:max-w-xxs sm:max-w-[285px] lg:max-w-xs xl:max-w-none position absolute top-[-7rem] sm:top-[-9rem] lg:top-[-10rem] xl:top-[-18.25rem] left-2 md:left-10 lg:left-14 3xl:left-20"
          >

          <faq-component
            v-for="(faq, index) in faqs"
            :key="index"
            :is-active="index === activeIndex"
            class="mb-4"
            @toggle="activeIndex = index"
          >
            <template #question>
              {{ faq.q }}
            </template>

            <template #answer>
              <span v-html="faq.a" />
            </template>
          </faq-component>
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import { ref } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head } from '@inertiajs/vue3'
import FaqComponent from '@/Components/FaqComponent.vue'

const faqs = [
  { q: 'What are the benefits of feeding a raw?', a: `There are many health benefits to feeding your dog a raw diet including alleviating or eliminating allergies. See our <a href="" class="inertia-link">Why Raw?</a> page for more information.` },
  { q: 'Is feeding a raw diet expensive?', a: `Feeding raw food is cheaper than you think. A bigger dog of 50lbs eating our <a href="" class="inertia-inline">Gourmet</a> Meals is approximately $2.50 a day. A small dog is approximately $20 a month.` },
  { q: 'How much raw food should I feed my dog?', a: `How much food depends mostly on your dogs age and size. See our <a href="" class="inertia-link">Feeding Guidelines</a> for more information.` },
  { q: 'How should I transition my dog to a raw diet?', a: `See our <a href="" class="inertia-link">Transitioning Your Dog to Raw Food</a> for more information.` },
  { q: 'Do I need to add anything to raw food?', a: `You don't need to add anything to our <a href="" class="inertia-link">Gourmet Meals</a> which are a complete balanced meal with protein, fruits, veggies and eggs. Our <a href="" class="inertia-link">Pure Proteins</a> provide a great raw base to add your own ingredients.` },
  { q: 'My dog has special food requirements, do you offer custom food?', a: `Yes, we do! See our <a href="" class="inertia-link">Custom Food</a> page for more information.` },
  { q: 'How long does raw dog food last?', a: `Raw dog food lasts 2-3 days in the fridge.` },
  { q: 'Aren’t chicken and turkey bones dangerous for pets?', a: `Only when cooked. Raw chicken and turkey bones are soft, easily digestible and very good for your dog. Cooked bone can be hard and brittle and pose a safety concern. Never feed your dog cooked chicken bones. We also don’t suggest cooking our raw food as it contains bone.` },
  { q: 'Is your raw dog food human-grade?', a: `Yes. All our food is sourced from local licensed facilities. Only pure raw high quality proteins with no chemicals, fillers or things you have never heard of.` },
  { q: 'Why does my dog\'s poop look different?', a: `Raw poops definitely look different than kibble poops. Raw poops are smaller, firmer, not as stinky and sometimes have a chalky white consistency. This is because your raw fed dog is digesting and absorbing what they eat, rather than pooping out all the indigestible fillers that are in kibble.` },
  { q: 'Why is my dog drinking less water?', a: `This is completely normal. Raw food contains way more moisture than kibble, and your dog's digestive system extracts the water in the food, so they are less thirsty.` },
  { q: 'What methods of payment do you accept?', a: `We accept Interac, VISA, Mastercard and cash.` },
  { q: 'When and where do I pick up my order?', a: `Orders are usually ready for pick up in a day or two. We will contact you to let you know when your order is ready and provide our Kensington Street address in Woodstock.` },
  { q: 'What if I have more questions?', a: `Don't hesitate to <a href="${route('marketing.contact')}" class="inertia-inline">contact us</a>. We're here to help!` },
]

const activeIndex = ref(null)
</script>

<style scoped>
.hero-container {
  @apply min-h-[240px] xs:min-h-[325px] lg:min-h-[400px] xl:min-h-[440px];
}

.bg-hero-faq {
  @apply bg-cover bg-center;
}

@screen md {
  .bg-hero-faq {
    /* background-size: calc((100vh * (2400 / 2489)) + 20%); */
    /* background-size: calc((100vh * (4800 / 1600))); */
    background-size: 187%;
    background-position: 35% 0%;
  }
}

@screen lg {
  .bg-hero-faq {
    @apply bg-cover;
    background-position: 35% 0%;
  }

  .bg-hero-faq {
  /* background-position-y: calc(100vw * 0.05 * -1); */
  }
}

@screen 2xl {
  .bg-hero-faq {
  /* background-position-y: calc(100vw * 0.07 * -1) */
  }
}

@screen 5xl {
  .bg-hero-faq {
  /* background-position-y: calc(100vw * 0.2 * -1) */
  }
}
</style>