<template>
<Head>
    <title>Home</title>
</Head>

<guest-layout :with-footer="false">
    <div class="bg-hero-home bg-cover md:bg-left-top xl:bg-center bg-no-repeat page">
        <div class="container h-full px-6 md:px-10 flex flex-col justify-center relative">
            <h1 class="text-2xl-b md:text-4xl font-bold uppercase font-cubano text-grey-400 absolute -top-3 md:top-20 lg:top-64 tracking-wide">
                Awesome Food <br> For Awesome <br> Friends
            </h1>

            <home-call-to-actions class="hidden md:block absolute bottom-0 left-0 xl:top-0 xl:right-0 xl:left-auto" />
        </div>
    </div>

    <home-call-to-actions class="md:hidden" />

    <div class="xl:hidden">
        <div>
            <div class="container content">
                <h1 class="text-4xl font-cubano text-grey-400 mb-4">Products</h1>

                <p class="text-grey-400">
                    S&S Raw Dog Food offers high quality cost effective Raw Dog Food and All Natural Dog Treats.
                    Whether you’re looking for a pure protein base to add your own ingredients, a balanced meal, or need
                    custom food for your dog with special food needs, give us a try!
                </p>

                <category-grid :categories="categories" />
            </div>

            <footer-component />
        </div>
    </div>
</guest-layout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head } from '@inertiajs/vue3'
import CategoryGrid from '@/Components/Products/CategoryGrid.vue'
import FooterComponent from '@/Layouts/FooterComponent.vue'
import HomeCallToActions from '@/Components/HomeCallToActions.vue'

const props = defineProps({
    categories: { type: Array, required: true },
})
</script>

<style scoped>
.bg-hero-home {
    @apply bg-center;
    background-color: #ecedee;
    background-position-y: 2rem;
}

@media screen and (min-width: 340px) {
    .bg-hero-home {
        background-position-x: calc(100vw * 0.125 * -1);
    }
}

@media screen and (min-height: 740px) {
    .bg-hero-home {
        background-position-x: calc(100vw * 0.3 * -1);
        background-position-y: 2rem;
    }
}

@media screen and (min-height: 915px) {
    .bg-hero-home {
        background-position-x: calc(100vw * 0.375 * -1);
        background-position-y: 2rem;
    }
}

@screen md {
    .bg-hero-home {
        background-position-x: initial;
    }
}

@screen xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.05 * -1)
  }
}

@screen 2xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.125 * -1)
  }
}

@screen 3xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.1375 * -1)
  }
}
</style>