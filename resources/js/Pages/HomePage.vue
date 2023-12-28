<template>
  <Head>
    <title>Home</title>
  </Head>

  <guest-layout :with-footer="false">
    <div class="bg-hero-home page max-h-screen">
      <div class="container h-full content flex flex-col justify-center relative">
        <h1 class="page-title">
          Awesome Food <br> For Awesome <br> Friends
        </h1>

        <home-call-to-actions class="cta" />
      </div>
    </div>

    <home-call-to-actions class="cta-mobile" />

    <div class="xl:hidden">
      <div>
        <div class="container content">
          <h1 class="text-4xl font-cubano text-grey-400 mb-2">
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
  @apply text-xl leading-tight xs:text-2xl xs:leading-tight md:text-base15-5xl lg:text-5xl absolute top-0 sm:top-3 md:top-24;
}

@media (orientation: portrait) {
  @screen lg {
    .page-title {
      @apply top-60;
    }
  }
}

@media (orientation: portrait) and (max-aspect-ratio: 720 / 1280) {
  @media (min-width: 720px) {
    .page-title {
      @apply text-4xl top-36;
    }
  }
}

@media (orientation: landscape) {
  @screen xl {
    .page-title {
      @apply top-36;
    }
  }

  @media (max-width: 1920px) {
    .page-title {
      @apply top-60;
    }
  }

  @media (max-width: 1600px) {
    .page-title {
      @apply top-44;
    }
  }

  @media (max-width: 1366px) {
    .page-title {
      @apply top-40;
    }
  }
}

@screen 3xl {
  .page-title {
    @apply top-60 -ml-8;
  }
}

@screen 5xl {
  .page-title {
    @apply -ml-12;
  }
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

/** Targeting tall/vertical desktops */
@media (orientation: portrait) and (max-aspect-ratio: 800 / 1280) {
  @media (min-width: 720px) {
    .bg-hero-home {
      background-position: 20% 60%;
    }
  }

  @media (max-height: 1024px) and @screen md {
    .bg-hero-home {
      background-position: 15% 60%;
    }
  }

  @screen md {
    .bg-hero-home {
      background-position: 15% 60%;
    }
  }
}

/** Targeting tall/vertical desktops */
@media (orientation: portrait) and (max-aspect-ratio: 720 / 1280) {
  @media (min-width: 720px) {
    .bg-hero-home {
      background-position: 20% 100%;
    }
  }

  @media (min-width: 864px) {
    .bg-hero-home {
      background-position: 25% 100%;
    }
  }
}

@media (orientation: landscape)  {
  @media (max-height: 389px) {
    .bg-hero-home {
      background-size: 125%;
      background-position: 0% 10%;
      max-height: 160vh;
    }
  }

  @media (min-height: 390px) and (max-height: 680px) {
    .bg-hero-home {
      background-size: 130%;
      background-position: 0% 18%;
      max-height: 160vh;
    }
  }

  @media (min-height: 390px) and (max-height: 601px) {
    .bg-hero-home {
      background-size: 120%;
      background-position: 35% 35%;
      max-height: 150vh;
    }
  }

  @screen lg {
    .bg-hero-home {
      background-position: 50% 25%;
    }
  }

  @screen 3xl {
    .bg-hero-home {
      /* background-position: 100% 25%; */
    }
  }
}
</style>