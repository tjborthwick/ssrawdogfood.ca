<template>
  <div>
    <div class="bg-purple cta-block">
      <div class="cta-content">
        <h2 class="cta-title mb-3">
          Raw Dog Food
        </h2>

        <p class="text-white mb-2">
          Pure Raw Proteins and Gourmet Meals. We do Custom Food too!
        </p>
      </div>

      <div class="cta-links gap-x-4">
        <div>
          <nav-link-button
            :href="route('catalogue.index')"
            size="small"
          >
            Shop Raw
          </nav-link-button>
        </div>

        <div>
          <Link :href="route('catalogue.index')"
          >
            <img
              src="/images/products/chicken.png"
              class="image"
            >
          </Link>
        </div>
      </div>
    </div>

    <div class="bg-blue cta-block">
      <div class="cta-content">
        <h2 class="cta-title mb-3">
          Dog Treats
        </h2>

        <p class="text-white mb-2">
          Tasty &amp; Beneficial All Natural <span class="whitespace-nowrap">One-Ingredient</span> Dog Treats
        </p>
      </div>

      <div class="cta-links gap-x-4">
        <div>
          <nav-link-button
            :href="route('catalogue.dog-treats')"
            size="small"
          >
            Shop Treats
          </nav-link-button>
        </div>

        <div>
          <Link
            :href="route('catalogue.dog-treats')"
          >
            <img
              src="/images/products/chicken.png"
              class="image"
            >
          </Link>
        </div>
      </div>
    </div>

    <div class="bg-green cta-block">
      <div>
        <h2 class="cta-title mb-3">
          Learn More:
        </h2>

        <ul class="list-disc pl-4 text-white">
          <li class="text-base mb-2">
            <Link
              :href="route('marketing.benefits')"
              class="no-underline font-bold hover:underline -ml-1.5 block"
            >
              Benefits of Raw
            </Link>
          </li>

          <li class="text-base mb-2">
            <Link
              :href="route('marketing.feeding')"
              class="no-underline font-bold hover:underline -ml-1.5 block"
            >
              Transitioning & Feeding
            </Link>
          </li>

          <li class="text-base">
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

<style scoped>
.cta-title {
  @apply text-base15-3xl lg:text-3xl text-white uppercase font-cubano;
}

.cta-block {
  @apply p-5 pb-3 md:px-[30px] lg:px-10;
}

.cta-block:last-child {
  @apply pb-6;
}

.cta-links {
  @apply flex justify-evenly items-center;
}

.cta-links > div {
  @apply w-1/2 text-center;
}

.image {
  @apply mx-auto max-h-[100px];
}

@media (orientation: landscape)  {
  @media (max-height: 540px) {
    .cta-block {
      @apply p-5 flex flex-col justify-between gap-y-4;
    }

    .cta-links {
      @apply flex gap-y-4 flex-col-reverse;
    }

    .cta-links > div {
      @apply w-auto;
    }
  }
}

@media (orientation: landscape) {
  @media (min-height: 781px) {
    .cta-block:last-child {
      @apply pb-10;
    }
  }
}

@media (orientation: portrait) and (min-width: 796px) {
  .cta-block:last-child {
    @apply pb-10;
  }
}

@media (orientation: portrait) {
  @media (min-width: 720px) {
    .cta-block {
      max-width: 305px;
    }
  }

  @media (min-width: 796px) {
    .cta-block {
      @apply max-w-xs px-10 pt-10;
    }
  }

  @screen lg {
    .cta-block {
      @apply max-w-[21rem];
    }
  }
}

@media (orientation: landscape) and (min-width: 768px) {
  @media (min-height: 541px) {
    .cta-block {
      max-width: 305px;
    }
  }

  @media (min-height: 680px) {
    .cta-block {
      @apply max-w-xs;
    }
  }

  @media(min-height: 796px) {
    .cta-block {
      @apply pt-8;
    }
  }

  @media (min-height: 1024px) {
    .cta-block {
      @apply max-w-[21rem];
    }
  }
}
</style>