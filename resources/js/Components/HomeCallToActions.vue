<template>
  <div>
    <div class="bg-purple p-6 pb-3 md:px-8 lg:px-10 cta-block">
      <div class="cta-content">
        <div class="">
          <h2 class="text-3xl text-white uppercase font-cubano mb-4">
            Raw Dog Food
          </h2>

          <p class="text-white mb-2">
            Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
          </p>
        </div>

        <div class="cta-links flex gap-x-20 md:gap-x-6 items-center">
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

          <Link
            :href="route('catalogue.index')"
            class="flex justify-center items-center"
          >
            <img
              src="/images/products/chicken.png"
              class="image"
            >
          </Link>
        </div>
      </div>
    </div>

    <div class="bg-blue p-6 pb-3 md:px-8 lg:px-10 cta-block">
      <div class="cta-content">
        <div class="">
          <h2 class="text-3xl text-white uppercase font-cubano mb-4">
            Dog Treats
          </h2>

          <p class="text-white mb-2">
            Tasty &amp; Beneficial All Natural One-Ingredient Dog Treats
          </p>
        </div>

        <div class="cta-links flex gap-x-20 md:gap-x-6 items-center">
          <nav-link-button
            :href="route('catalogue.dog-treats')"
            size="small"
          >
            <span class="whitespace-nowrap">
              Shop Treats
            </span>
          </nav-link-button>

          <Link
            :href="route('catalogue.dog-treats')"
            class="min-h-[100px] flex justify-center items-center"
          >
            <img
              src="/images/products/chicken.png"
              class="image"
            >
          </Link>
        </div>
      </div>
    </div>

    <div class="bg-green p-6 md:px-8 lg:px-10 cta-block">
      <div>
        <h2 class="text-3xl text-white uppercase font-cubano mb-4">
          Learn More:
        </h2>

        <ul class="list-disc pl-4 text-white">
          <li class="leading-snug text-base my-1.5">
            <Link
              :href="route('marketing.benefits')"
              class="no-underline font-bold hover:underline -ml-1.5 block"
            >
              Benefits of Raw
            </Link>
          </li>

          <li class="leading-snug text-base my-1.5">
            <Link
              :href="route('marketing.feeding')"
              class="no-underline font-bold hover:underline -ml-1.5 block"
            >
              Transitioning & Feeding
            </Link>
          </li>

          <li class="leading-snug text-base my-1.5">
            <Link
              :href="route('marketing.faq')"
              class="no-underline font-bold hover:underline -ml-1.5 block"
            >
              <span>Frequently Asked Questions</span>
            </Link>
          </li>
        </ul>
      </div>
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

@media (orientation: portrait) {
  @media (min-height: 1024px) {
    .cta-mobile {
      @apply hidden
    }

    .cta {
      @apply flex flex-col;
    }
  }
}

@media (orientation: landscape)  {
  @media (min-width: 540px) and (max-height: 540px) {
    .cta-mobile {
      @apply flex;
    }

    .cta-block {
      @apply w-1/3 p-6;
    }

    .image {
      @apply w-1/2;
    }

    .cta-links {
      @apply flex gap-y-4 flex-col-reverse;
    }
  }

  @media (min-height: 720px) {
    .cta-mobile {
      @apply hidden
    }

    .cta {
      @apply flex flex-col;
    }
  }

  @screen md {
    .cta {
      @apply !right-0 top-0 left-auto;
    }
  }
}

@media (orientation: landscape) (max-height: 679px) {
  .cta-mobile {
    @apply flex;
  }
}

@media (min-height: 680px) and (max-height: 768px) {
  @screen md {
    .cta-block {
      @apply flex-1 flex flex-col justify-start;
    }
  }
}

@media (orientation: portrait) {
  @screen md {
    .cta-block {
      max-width: 305px;
    }
  }

  @screen lg {
    .cta-block {
      @apply pt-8 max-w-[21rem];
    }
  }
}

@media (orientation: landscape) and (min-height: 680px) {
  .cta-block {
    @apply max-w-xs;
  }
}

@media (orientation: landscape) and (min-height: 768px) {
  .cta-block {
    @apply pt-8;
  }
}

@media (orientation: landscape) and (min-height: 1024px) {
  .cta-block {
    @apply pt-8 max-w-[21rem];
  }
}
</style>