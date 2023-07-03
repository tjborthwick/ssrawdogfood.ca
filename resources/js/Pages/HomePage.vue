<template>
<Head>
    <title>Home</title>
</Head>

<guest-layout :with-footer="false">
    <div class="bg-hero-home bg-cover bg-top bg-no-repeat page">
        <div class="container px-10 flex flex-col justify-center relative">
            <h1 class="text-4xl font-bold uppercase font-cubano text-grey-400 absolute top-64 tracking-wide">
                Awesome Food <br> For Awesome <br> Friends
            </h1>

            <div class="flex flex-col absolute top-0 right-0">
                <div class="bg-purple p-8 max-w-xs">
                    <h2 class="text-3xl text-white uppercase font-cubano mb-4">
                        Raw Dog Food
                    </h2>

                    <p class="text-white mb-2">
                        Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
                    </p>

                    <div class="flex gap-x-6 items-center">
                        <nav-link-button :href="route('catalogue.index')">
                            <span class="whitespace-nowrap">
                                Shop Raw
                            </span>
                        </nav-link-button>

                        <div>
                            <img src="/images/products/chicken.png">
                        </div>
                    </div>
                </div>

                <div class="bg-blue p-8 max-w-xs">
                    <h2 class="text-3xl text-white uppercase font-cubano mb-4">
                        Dog Treats
                    </h2>

                    <p class="text-white mb-2">
                        Tasty &amp; Beneficial All Natural One-Ingredient Dog Treats
                    </p>

                    <div class="flex gap-x-6 items-center">
                        <nav-link-button :href="route('catalogue.dog-treats')">
                            <span class="whitespace-nowrap">
                                Shop Treats
                            </span>
                        </nav-link-button>

                        <div>
                            <img src="/images/products/chicken.png">
                        </div>
                    </div>
                </div>

                <div class="bg-green p-8 max-w-xs">
                    <h2 class="text-3xl text-white uppercase font-cubano mb-4">
                        Learn More:
                    </h2>

                    <ul class="list-disc pl-4 text-white">
                        <li class="text-sm font-bold leading-7">
                            <Link
                                :href="route('marketing.benefits')"
                                class="no-underline hover:underline"
                            >
                                Benefits of Raw
                            </Link>
                        </li>

                        <li class="text-sm font-bold leading-7">
                            <Link
                                :href="route('marketing.feeding')"
                                class="no-underline hover:underline"
                            >
                                Transitioning & Feeding
                            </Link>
                        </li>

                        <li class="text-sm font-bold leading-7">
                            <Link
                                :href="route('marketing.faq')"
                                class="no-underline hover:underline"
                            >
                                Frequently Asked Questions
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
import { Head, Link } from '@inertiajs/vue3'
import NavLinkButton from '@/Components/NavLinkButton.vue'
import CategoryGrid from '@/Components/Products/CategoryGrid.vue'
import FooterComponent from '@/Layouts/FooterComponent.vue'

const props = defineProps({
    categories: { type: Array, required: true },
})
</script>

<style scoped>
@screen xl {
  .bg-hero-home {
    background-position-y: calc(100vw * 0.05 * -1)
    /* background-position-y: calc(100vw * 0.115 * -1) */
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