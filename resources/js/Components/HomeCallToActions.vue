<template>
  <div>
    <div class="bg-purple p-6 pb-3 md:px-8 lg:px-10 block">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Raw Dog Food
      </h2>

      <p class="text-white mb-2">
        Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
      </p>

      <div class="flex gap-x-20 md:gap-x-6 items-center">
        <nav-link-button
          :href="route('catalogue.index')"
          size="small"
        >
          <span
            class="whitespace-nowrap"
          >
            Shop Raw
          </span>
        </nav-link-button>

        <div>
          <img src="/images/products/chicken.png">
        </div>
      </div>
    </div>

    <div class="bg-blue p-6 pb-3 md:px-8 lg:px-10 block">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Dog Treats
      </h2>

      <p class="text-white mb-2">
        Tasty &amp; Beneficial All Natural One-Ingredient Dog Treats
      </p>

      <div class="flex gap-x-20 md:gap-x-6 items-center">
        <nav-link-button
          :href="route('catalogue.dog-treats')"
          size="small"
        >
          <span class="whitespace-nowrap">
            Shop Treats
          </span>
        </nav-link-button>

        <div class="min-h-[100px] flex justify-center items-center">
          <img
            src="/images/products/chicken.png"
          >
        </div>
      </div>
    </div>

    <div class="bg-green p-6 md:px-8 lg:px-10 block">
      <h2 class="text-3xl text-white uppercase font-cubano mb-4">
        Learn More:
      </h2>

      <ul class="list-disc pl-4 text-white">
        <li class="leading-7 text-base 2xl:my-1">
          <Link
            :href="route('marketing.benefits')"
            class="no-underline font-bold hover:underline -ml-1.5"
          >
            Benefits of Raw
          </Link>
        </li>

        <li class="leading-7 text-base 2xl:my-1">
          <Link
            :href="route('marketing.feeding')"
            class="no-underline font-bold hover:underline -ml-1.5"
          >
            Transitioning & Feeding
          </Link>
        </li>

        <li class="leading-7 text-base 2xl:my-1">
          <Link
            :href="route('marketing.faq')"
            class="no-underline font-bold hover:underline -ml-1.5"
          >
            Frequently Asked Questions
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import NavLinkButton from '@/Components/NavLinkButton.vue'

</script>

<style  scoped>
.cta {
  @apply hidden absolute bottom-0 left-0 xl:top-0 xl:right-0 xl:left-auto;
}

.cta-mobile {
  @apply md:hidden
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

  @media (min-height: 680px) and (max-height: 768px) {
    .cta {
      @apply flex flex-col;
    }

    .block {
      @apply flex-1 flex flex-col justify-center;
    }
  }
}

@media (orientation: landscape)  {
  @screen md {
    .cta {
      @apply !right-0 top-0 left-auto;
    }
  }
}

@media (orientation: portrait) {
  @screen md {
    .block {
      max-width: 305px;
    }
  }

  @screen lg {
    .block {
      @apply max-w-xs;
    }
  }
}

@media (orientation: landscape) (max-height: 679px) {
  .cta-mobile {
    @apply flex;
  }
}

@media (orientation: landscape) and (min-height: 680px) {
  .block {
    @apply max-w-xs;
  }
}
</style>