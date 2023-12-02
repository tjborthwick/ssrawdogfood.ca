<template>
  <Head>
    <title>Home</title>
  </Head>

  <guest-layout :with-footer="false">
    <div class="bg-hero-home max-h-screen">
      <div class="page">
        <div class="container h-full px-6 md:px-10 flex flex-col justify-center relative">
          <h1 class="page-title font-bold uppercase font-cubano text-grey-400 tracking-wide">
            Awesome Food <br> For Awesome <br> Friends
          </h1>

          <home-call-to-actions class="cta" />
        </div>
      </div>
    </div>

    <home-call-to-actions class="cta-mobile" />

    <div class="xl:hidden">
      <div>
        <div class="container content">
          <h1 class="text-4xl font-cubano text-grey-400 mb-4">
            Products
          </h1>

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
.page-title {
  @apply absolute top-0 sm:top-3 md:top-20 xl:top-64 text-xl-b xs:text-2xl-b md:text-4xl;
}

.cta {
  @apply hidden absolute bottom-0 left-0 xl:top-0 xl:right-0 xl:left-auto;
}

.cta-mobile {
  @apply md:hidden
}

.bg-hero-home {
  @apply bg-cover bg-no-repeat h-full bg-[#c2bebb];
  /** dog is more or less centred on screen at this 37% */
  background-position: 40% 0%;
}

@screen md {
  .bg-hero-home {
    background-position: 0% 0%;
  }
}

@screen sm {
  .cta-mobile {
    @apply flex;
  }
}

/* switching from mobile/desktop versions of cta */
@screen md {
  @media (min-height: 680px) {
    .cta {
      @apply block;
    }

    .cta-mobile {
      @apply hidden;
    }
  }
}

@media (orientation: portrait) and (max-aspect-ratio: 2400 / 2489) {
  .bg-hero-home {
    /** Basically bg-cover + 20% */
    background-size: calc((100vh * (2400 / 2489)) + 20%);
  }

  @screen md {
    .bg-hero-home {
      /** Basically bg-cover + 26% */
      background-size: calc((100vh * (2400 / 2489)) + 26%);
      background-position: 0% 60%;
    }
  }

  @screen lg {
    .bg-hero-home {
      background-position: 8% 60%;
    }
  }
}

/** Targeting odd ball screen sizes like iPad air and Surface Pro 7 */
@media (orientation: portrait) and (max-aspect-ratio: 820 / 1180) {
  @screen md {
    .bg-hero-home {
      background-position: 10% 60%;
    }
  }
}

@media (orientation: landscape)  {

  @media (max-height: 389px) {
    .page-title {
      @apply top-20;
    }

    .bg-hero-home {
      background-size: 125%;
      background-position: 0% 10%;
    }
  }

  @media (min-height: 390px) and (max-height: 680px) {
    .bg-hero-home {
      background-size: 130%;
      background-position: 0% 18%;
    }
  }

  @screen md {
    .cta {
      @apply !right-0 left-auto;
    }
  }

  @screen lg {
    .bg-hero-home {
      @apply bg-top;
      background-position: 50% 25%;
    }
  }
}
</style>