<template>
  <Head>
    <title>Home</title>
  </Head>

  <guest-layout>
    <div class="bg-hero-home page min-h-screen max-h-screen">
      <div class="container h-full content relative">
        <h1 class="page-title">
          Awesome Food <br> For Awesome <br> Friends
        </h1>

        <home-call-to-actions class="cta" />
      </div>
    </div>

    <home-call-to-actions class="cta-mobile" />

    <div class="xl:hidden container content">
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
  </guest-layout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import CategoryGrid from '@/Components/Products/CategoryGrid.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import HomeCallToActions from '@/Components/HomeCallToActions.vue'

const props = defineProps({
    categories: { type: Array, required: true },
})
</script>

<style scoped>
.page-title {
  @apply text-xl leading-tight absolute top-0 sm:top-3 md:top-24;
}

@screen xs {
  .page-title {
    @apply text-2xl leading-tight;
  }
}

@screen md {
  .page-title {
    @apply text-base15-5xl;
  }
}

@screen lg {
  .page-title {
    @apply text-5xl;
  }
}

@media  (orientation: landscape) and (max-height: 540px) {
  .page-title {
    @apply text-3xl leading-tight;
  }
}

@media (orientation: portrait) {
  @media (min-width: 601px) {
    .page-title {
      @apply top-12;
    }
  }

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

  @media (max-height: 540px) {
    .page-title {
      @apply top-16;
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
  @apply bg-cover bg-center bg-no-repeat h-full bg-[#c2bebb];
}

/** extend passed the full screen 1.5 times to give the background image a bit of room */
@media (orientation: landscape) and (max-height: 680px) {
  .bg-hero-home {
    max-height: 150vh;
  }
}

@media (orientation: landscape)  {
  @media (max-height: 389px) {
    .bg-hero-home {
      background-size: 125%;
      background-position: 0% 25%;
    }
  }

  @media (min-height: 390px) and (max-height: 680px) {
    .bg-hero-home {
      background-size: 130%;
      background-position: 32% 25%;
    }
  }

  @screen lg {
    .bg-hero-home {
      background-position: 50% 25%;
    }
  }
}

@media (orientation: portrait) and (max-aspect-ratio: 2400 / 2489) {
  .bg-hero-home {
    background-size: auto 115.5%;
    background-position: 40% 0%;
  }

  @screen md {
    .bg-hero-home {
      background-size: auto 120.25%;
      background-position: 0% 60%;
    }
  }

  /** nudging into place for iPad Pro & Air sizes  */
  @media (min-width: 820px) {
    .bg-hero-home {
      background-position: 8% 60%;
    }
  }

  @media (min-width: 720px) and (min-height: 1280px) {
    @media (max-aspect-ratio: 0.695) {
      .bg-hero-home {
        background-position: 10% 60%;
      }
    }

    @media (max-aspect-ratio: 0.67) {
      .bg-hero-home {
        background-position: 14% 60%;
      }
    }

    @media (max-aspect-ratio: 0.625) {
      .bg-hero-home {
        background-position: 18% 60%;
      }
    }

    @media (max-aspect-ratio: 0.5625) {
      .bg-hero-home {
        background-position: 30% 60%;
      }
    }
  }
}

/**
  CTA positioning
*/
.cta {
  @apply hidden flex-col absolute bottom-0 left-0 xl:top-0 xl:right-0 xl:left-auto;
}

@media (orientation: landscape) and screen(md) {
  .cta {
    @apply right-0 top-0 left-auto;
  }
}

/** switch to horizontal columns */
@media screen(sm) {
  .cta-mobile {
    @apply flex;
  }

  .cta-mobile :deep(.cta-block) {
    @apply w-1/3;
  }
}

/**
  CTA visibility
*/
@media screen(lg) and (min-height: 541px) {
  .cta-mobile {
    @apply hidden;
  }

  .cta {
    @apply flex;
  }
}

/** 890px is roughly where the CTAs would start colliding with the title */
@media screen(md) and (min-height: 890px) {
  .cta-mobile {
    @apply hidden;
  }

  .cta {
    @apply flex;
  }
}

/**
  * Call to actions are leaving a very small amount of empty space before the fold. So forcing full height minus 100px header/menu
  */
@media (orientation: landscape) and (min-height: 681px) and (max-height: 796px) {
  .cta {
    max-height: calc(100vh - 100px);
  }

  @media screen(md) {
    :deep(.cta-block) {
      @apply flex-1 flex flex-col justify-start pt-8;
    }
  }
}
</style>