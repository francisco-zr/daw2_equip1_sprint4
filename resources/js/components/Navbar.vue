<template>
  <header class="hidden md:block">
    <div class="flex justify-between items-center p-3">
      <div class="font-semibold text-xl ml-2"><a href="#"><img class="inline-block mr-2 w-16"
            src="/img/logo_pymeshield.png" alt="Logo">pymeshield</a>
      </div>
      <div class="ml-4 flex justify-end items-center md:ml-6">
        <button type="button"
          class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">Ver notificaciones</span>
          <BellIcon class="h-8 w-8" aria-hidden="true" />
        </button>

        <!-- Profile dropdown -->
        <Menu as="div" class="relative ml-3">
          <div>
            <MenuButton
              class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">Abrir menú de usuario</span>
              <vue-avatar :size="40" :username="user.name" />
            </MenuButton>
          </div>
          <transition enter-active-class="transition ease-out duration-100"
            enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95">
            <MenuItems
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
              <MenuItem v-for="item in userNavigation" :key="item.name" v-slot="{ active }">
              <a :href="item.href" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">{{
                item.name
              }}</a>
              </MenuItem>
            </MenuItems>
          </transition>
        </Menu>
      </div>
    </div>
  </header>
  <div class="min-h-full">
    <Disclosure as="nav" class="bg-orange-500 md:bg-orange-400" v-slot="{ open }">
      <div class="mx-start px-4 lg:px-8">
        <div class="flex items-center md:justify-between py-3 md:py-0">
          <div class="flex items-center">
            <div class="hidden md:block">
              <div class="flex items-baseline">
                <a v-for="item in navigation" :key="item.name" :href="item.href"
                  :class="[item.current ? 'bg-gray-900 text-white' : 'text-black hover:bg-gray-700 hover:text-white', 'px-3 py-2 text-sm font-medium']"
                  :aria-current="item.current ? 'page' : undefined">
                  <component :is="item.icon" class="inline-block mr-1 h-5 w-5" aria-hidden="true" />{{ item.name }}
                </a>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden items-center">
            <!-- Mobile menu button -->
            <DisclosureButton
              class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">Abrir menú principal</span>
              <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
              <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
            </DisclosureButton>
            <div class="font-semibold text-xl ml-2"><a href="#">pymeshield</a></div>
          </div>
        </div>
      </div>

      <DisclosurePanel class="md:hidden bg-orange-400">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <DisclosureButton v-for="item in navigation" :key="item.name" as="a" :href="item.href"
            :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white', 'block px-3 py-2 rounded-md text-base font-medium']"
            :aria-current="item.current ? 'page' : undefined">
            <component :is="item.icon" class="inline-block mr-2 h-6 w-6" aria-hidden="true" />{{ item.name }}
          </DisclosureButton>
        </div>
        <div class="border-t border-gray-700 pt-4 pb-3">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <vue-avatar :size="40" :username="user.name" />
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-gray-900">{{ user.name }}</div>
              <div class="text-sm font-medium leading-none text-gray-700">{{ user.email }}</div>
            </div>
            <button type="button"
              class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">Ver notificaciones</span>
              <BellIcon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <DisclosureButton v-for="item in userNavigation" :key="item.name" as="a" :href="item.href"
              class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-700 hover:text-white">
              {{ item.name }}</DisclosureButton>
          </div>
        </div>
      </DisclosurePanel>
    </Disclosure>
  </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { AcademicCapIcon, Bars3Icon, BellIcon, CalendarDaysIcon, CurrencyEuroIcon, HomeIcon, QuestionMarkCircleIcon, QrCodeIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import VueAvatar from "@webzlodimir/vue-avatar";
import "@webzlodimir/vue-avatar/dist/style.css";

const user = {
  name: 'Usuario Random',
  email: 'admin@pymeshield.com',
  imageUrl:
    '/img/default_profile.png',
}
const navigation = [
  { name: 'Inicio', href: '#', current: true, icon: HomeIcon },
  { name: 'Encuestas', href: '#', current: false, icon: QuestionMarkCircleIcon },
  { name: 'Formación', href: '#', current: false, icon: AcademicCapIcon },
  { name: 'Presupuestos', href: '#', current: false, icon: CurrencyEuroIcon },
  { name: 'Calendario', href: '#', current: false, icon: CalendarDaysIcon },
  { name: 'Inventario', href: '#', current: false, icon: QrCodeIcon },
]
const userNavigation = [
  { name: 'Mi Perfil', href: '#' },
  { name: 'Ajustes', href: '#' },
  { name: 'Admin', href: '#' },
  { name: 'Cerrar Sesión', href: '#' },
]
</script>