<template>
    <Popover class="relative bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 mb-10">
        <div class="flex items-center justify-between border-gray-100 py-6 md:justify-start md:space-x-10">
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#">
              <span class="sr-only">Ticko</span>
              <h1 class="text-4xl text-emerald-800 logo">Ticko</h1>
            </a>
          </div>
          <div class="-my-2 -mr-2 md:hidden">
            <PopoverButton class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Open menu</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true" />
            </PopoverButton>
          </div>
          <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
            <router-link to="/" class="text-md font-extrabold hover:text-emerald-800 px-6">Home</router-link>
            <!-- <router-link to="#features" class="text-md font-extrabold hover:text-emerald-800 px-6">Features</router-link> -->
            <router-link to="/events" class="text-md font-extrabold hover:text-emerald-800 px-6">Events</router-link>
            <router-link to="/shops" class="text-md font-extrabold hover:text-emerald-800 px-6">Shops</router-link>
            <router-link to="/pricing" class="text-md font-extrabold hover:text-emerald-800 px-6">Pricing</router-link>

            <router-link to="/auth/login" class="whitespace-nowrap uppercase font-extrabold hover:text-gray-900 border-2 border-emerald-800 py-2 px-10 rounded-3xl text-sm hover:bg-emerald-700 hover:text-white/80 hover:border-none">Login</router-link>
            <!-- <a href="#" class="ml-8 inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded-3xl border border-transparent bg-emerald-800 px-6 py-2 text-sm text-white shadow-sm hover:bg-emerald-700">Sign up</a> -->
            <router-link to="/auth/register" class="ml-4 inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded-3xl border border-transparent bg-emerald-800 px-6 py-2 text-sm text-white shadow-sm hover:bg-emerald-700">Sign Up</router-link>
          </div>
        </div>
      </div>

      <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
        <PopoverPanel focus class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
          <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
              <div class="flex items-center justify-between">
                <div>
                    <h1 class="font-bold text-2xl font-sans text-emerald-800">Ticko</h1>
                </div>
                <div class="-mr-2">
                  <PopoverButton class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>
                    <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                  </PopoverButton>
                </div>
              </div>
              <div class="mt-6">
                <nav class="grid gap-y-8">
                  <a v-for="item in solutions" :key="item.name" :href="item.href" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                    <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true" />
                    <span class="ml-3 text-base font-medium text-gray-900">{{ item.name }}</span>
                  </a>
                </nav>
              </div>
            </div>
            <div class="space-y-6 py-6 px-5">
              <div class="">
                <a href="#" class="flex w-full items-center justify-center rounded-md border border-emerald-400 bg-white/80 px-4 py-2 text-base font-medium text-emerald-400 shadow-sm hover:bg-emerald-500 hover:text-white">Shop</a>
              </div>
              <div>
                <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-emerald-400 px-4 py-2 text-base font-medium text-white shadow-sm">Sign up</a>
                <p class="mt-6 text-center text-base font-medium text-gray-500">
                  Already have an account?
                  {{ ' ' }}
                  <a href="#" class="text-emerald-400  hover:text-emerald-500">Sign in</a>
                </p>
              </div>
            </div>
          </div>
        </PopoverPanel>
      </transition>
    </Popover>
</template>

<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import { Bars3Icon, PhoneIcon, PlayIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'

const callsToAction = [
  { name: 'Watch Demo', href: '#', icon: PlayIcon },
  { name: 'Contact Sales', href: '#', icon: PhoneIcon },
]
const resources = [
  {
    name: 'Music',
    href: '#',
  },
  {
    name: 'Art',
    href: '#',
  },
  {
    name: 'Networking',
    href: '#',
  },
  {
    name: 'Tech',
    href: '#',
  },
  {
    name: 'Agriculture',
    href: '#',
  },
  {
    name: 'Education',
    href: '#',
  },
  {
    name: 'Charity',
    href: '#',
  },
  {
    name: 'Social',
    href: '#',
  },
]
</script>

<style>
    .logo {
        font-family: 'Pacifico';
    }
</style>
