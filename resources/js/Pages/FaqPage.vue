<template>
  <Head>
    <title>FAQ</title>
  </Head>

  <guest-layout>
    <div class="flex flex-col h-full">
      <div class="page !h-auto bg-no-repeat bg-hero-faq">
        <div class="hero-container container content relative">
          <h1 class="page-title">
            Raw FAQS
          </h1>
        </div>
      </div>

      <div class="bg-red inverted flex-1">
        <div class="container content relative hero-content-tmp">
          <img
            src="/images/products/gourmet-beef.png"
            class="hero-product-img"
          >

          <faq-component
            :is-active="activeIndex === 0"
            @toggle="handleToggle(0)"
          >
            <template #question>
              What are the benefits of feeding a raw?
            </template>

            <template #answer>
              There are many health benefits to feeding your dog a raw diet including alleviating or eliminating allergies. See our <Link :href="route('marketing.benefits')">Why Raw?</Link> page for more information.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 1"
            @toggle="handleToggle(1)"
          >
            <template #question>
              Is feeding a raw diet expensive?
            </template>

            <template #answer>
              Feeding raw food is cheaper than you think. A bigger dog of 50lbs eating our <Link :href="route('catalogue.gourmet-meals')">Gourmet</Link> Meals is approximately $2.50 a day. A small dog is approximately $20 a month.
            </template>
          </faq-component>

         <faq-component
            :is-active="activeIndex === 2"
            @toggle="handleToggle(2)"
          >
            <template #question>
              How much raw food should I feed my dog?
            </template>

            <template #answer>
              How much food depends mostly on your dogs age and size. See our <Link :href="route('marketing.feeding')">Feeding Guidelines</Link> for more information.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 3"
            @toggle="handleToggle(3)"
          >
            <template #question>
              How should I transition my dog to a raw diet?
            </template>

            <template #answer>
              See our <Link :href="route('marketing.feeding')">Transitioning Your Dog to Raw Food</Link> for more information.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 4"
            @toggle="handleToggle(4)"
          >
            <template #question>
              Do I need to add anything to raw food?
            </template>

            <template #answer>
              You don't need to add anything to our <Link :href="route('catalogue.gourmet-meals')">Gourmet Meals</Link> which are a complete balanced meal with protein, fruits, veggies and eggs. Our <Link :href="route('catalogue.pure-proteins')">Pure Proteins</Link> provide a great raw base to add your own ingredients.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 5"
            @toggle="handleToggle(5)"
          >
            <template #question>
              My dog has special food requirements, do you offer custom food?
            </template>

            <template #answer>
              Yes, we do! See our <Link :href="route('catalogue.custom-food')">Custom Food</Link> page for more information.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 6"
            @toggle="handleToggle(6)"
          >
            <template #question>
              How long does raw dog food last?
            </template>

            <template #answer>
              Raw dog food lasts 2-3 days in the fridge.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 7"
            @toggle="handleToggle(7)"
          >
            <template #question>
              Aren’t chicken and turkey bones dangerous for pets?
            </template>

            <template #answer>
              Only when cooked. Raw chicken and turkey bones are soft, easily digestible and very good for your dog. Cooked bone can be hard and brittle and pose a safety concern. Never feed your dog cooked chicken bones. We also don't suggest cooking our raw food as it contains bone.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 8"
            @toggle="handleToggle(8)"
          >
            <template #question>
              Is your raw dog food human-grade?
            </template>

            <template #answer>
              Yes. All our food is sourced from local licensed facilities. Only pure raw high quality proteins with no chemicals, fillers or things you have never heard of.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 9"
            @toggle="handleToggle(9)"
          >
            <template #question>
              Why does my dog's poop look different?
            </template>

            <template #answer>
              Raw poops definitely look different than kibble poops. Raw poops are smaller, firmer, not as stinky and sometimes have a chalky white consistency. This is because your raw fed dog is digesting and absorbing what they eat, rather than pooping out all the indigestible fillers that are in kibble.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 10"
            @toggle="handleToggle(10)"
          >
            <template #question>
              Why is my dog drinking less water?
            </template>

            <template #answer>
              This is completely normal. Raw food contains way more moisture than kibble, and your dog's digestive system extracts the water in the food, so they are less thirsty.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 11"
            @toggle="handleToggle(11)"
          >
            <template #question>
              What methods of payment do you accept?
            </template>

            <template #answer>
              We accept Interac, VISA, Mastercard and cash.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 12"
            @toggle="handleToggle(12)"
          >
            <template #question>
              When and where do I pick up my order?
            </template>

            <template #answer>
              Orders are usually ready for pick up in a day or two. We will contact you to let you know when your order is ready and provide our Kensington Street address in Woodstock.
            </template>
          </faq-component>

          <faq-component
            :is-active="activeIndex === 13"
            @toggle="handleToggle(13)"
          >
            <template #question>
              What if I have more questions?
            </template>

            <template #answer>
              Don't hesitate to <Link :href="route('marketing.contact')">contact us</Link>. We're here to help!
            </template>
          </faq-component>
        </div>
      </div>
    </div>
  </guest-layout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { ref } from 'vue';
import FaqComponent from '@/Components/FaqComponent.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'

const activeIndex = ref(null)

const handleToggle = function (index) {
  if (activeIndex.value === index) {
    activeIndex.value = null

    return
  }

  activeIndex.value = index
}
</script>

<style scoped>
.page-title {
  @apply absolute top-6 sm:top-16;
}

@media (max-height: 540px) {
  .page-title {
    @apply top-0;
  }
}

.hero-container {
  @apply min-h-[200px] md:min-h-[325px] xl:min-h-[440px] 5xl:min-h-[500px];
}

.hero-content-tmp {
  @apply !pt-[3rem] xs:!pt-[4rem] md:!pt-[5rem] xl:!pt-[6.5rem];
}

@media (max-height: 540px) {
  .hero-container {
    @apply min-h-[200px];
  }

  .hero-content-tmp {
    @apply !pt-[3rem];
  }
}

.bg-hero-faq {
  /** bg image is quite large, so for small devices this is effectively hiding the dog while still using the background image */
  @apply bg-auto bg-left;
}

@screen xs {
  .bg-hero-faq {
    background-size: cover;
    background-position: 45% 0%;
  }
}

@screen sm {
  .bg-hero-faq {
    @apply bg-cover bg-center;
  }
}

@screen md {
  .bg-hero-faq {
    background-size: 180%;
    background-position: 35% 0%;
  }
}

@screen lg {
  .bg-hero-faq {
    @apply bg-cover;
    background-position: 35% 0%;
  }
}

@screen xl {
  .bg-hero-faq {
    background-size: 140%;
    background-position: 20% 20%;
  }
}

@screen 3xl {
  .bg-hero-faq {
    background-size: 110%;
    background-position: 0% 15%;
  }
}

@screen 5xl {
  .bg-hero-faq {
    background-size: cover;
    background-position: 0% 25%;
  }
}

@media (max-height: 540px) {
  .bg-hero-faq {
    background-size: cover;
    background-position: 0% 0%;
  }

  @screen md {
    .bg-hero-faq {
      background-size: 125%;
    }
  }
}

.hero-product-img {
  @apply max-w-[200px] absolute top-[-7rem] left-2;
}

@screen xs {
  .hero-product-img {
    @apply max-w-xxs;
  }
}

@screen sm {
  .hero-product-img {
    @apply max-w-[285px] top-[-9rem];
  }
}

@screen md {
  .hero-product-img {
    @apply left-10;
  }
}

@screen lg {
  .hero-product-img {
    @apply max-w-xs top-[-10rem] left-14;
  }
}

@screen xl {
  .hero-product-img {
    @apply max-w-none top-[-16.25rem];
  }
}

@screen 3xl {
  .hero-product-img {
    @apply left-20;
  }
}

@media (max-height: 540px) {
  .hero-product-img {
    @apply top-[-7rem] left-auto max-w-[200px] ;
  }
}
</style>