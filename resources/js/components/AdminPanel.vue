<template>
        <TransitionRoot as="template" :show="sidebarOpen">
            <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
                <TransitionChild as="template" enter="transition-opacity ease-linear duration-300"
                    enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300"
                    leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
                </TransitionChild>

                <div class="fixed inset-0 z-40 flex">
                    <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
                        enter-from="-translate-x-full" enter-to="translate-x-0"
                        leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
                        leave-to="-translate-x-full">
                        <DialogPanel class="relative flex w-full max-w-xs flex-1 flex-col bg-orange-700 pt-5 pb-4">
                            <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0"
                                enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100"
                                leave-to="opacity-0">
                                <div class="absolute top-0 right-0 -mr-12 pt-2">
                                    <button type="button"
                                        class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                        @click="sidebarOpen = false">
                                        <span class="sr-only">Close sidebar</span>
                                        <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                                    </button>
                                </div>
                            </TransitionChild>
                            <div class="flex flex-shrink-0 items-center px-4">
                                <ShieldExclamationIcon class="h-6 w-6 text-black mr-3" aria-hidden="true" />pymeshield
                            </div>
                            <nav class="mt-5 h-full flex-shrink-0 divide-y divide-orange-800 overflow-y-auto"
                                aria-label="Sidebar">
                                <div class="space-y-1 px-2">
                                    <a v-for="item in navigation" :key="item.name" :href="item.href"
                                        :class="[item.current ? 'bg-orange-800 text-white' : 'text-orange-100 hover:text-white hover:bg-orange-600', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']"
                                        :aria-current="item.current ? 'page' : undefined">
                                        <component :is="item.icon" class="mr-4 h-6 w-6 flex-shrink-0 text-orange-200"
                                            aria-hidden="true" />
                                        {{ item.name }}
                                    </a>
                                </div>
                                <div class="mt-6 pt-6">
                                    <div class="space-y-1 px-2">
                                        <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href"
                                            class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-orange-100 hover:bg-orange-600 hover:text-white">
                                            <component :is="item.icon" class="mr-4 h-6 w-6 text-orange-200"
                                                aria-hidden="true" />
                                            {{ item.name }}
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </DialogPanel>
                    </TransitionChild>
                    <div class="w-14 flex-shrink-0" aria-hidden="true">
                        <!-- Dummy element to force sidebar to shrink to fit close icon -->
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-grow flex-col overflow-y-auto bg-orange-600 pt-5 pb-4">
                <div class="flex flex-shrink-0 items-center px-4">
                    <ShieldExclamationIcon class="h-6 w-6 text-black mr-3" aria-hidden="true" />pymeshield
                </div>
                <nav class="mt-5 flex flex-1 flex-col divide-y divide-orange-800 overflow-y-auto" aria-label="Sidebar">
                    <div class="space-y-1 px-2">
                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                            :class="[item.current ? 'bg-orange-800 text-white' : 'text-orange-100 hover:text-white hover:bg-orange-500', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']"
                            :aria-current="item.current ? 'page' : undefined">
                            <component :is="item.icon" class="mr-4 h-6 w-6 flex-shrink-0 text-orange-200"
                                aria-hidden="true" />
                            {{ item.name }}
                        </a>
                    </div>
                    <div class="mt-6 pt-6">
                        <div class="space-y-1 px-2">
                            <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href"
                                class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-orange-100 hover:bg-orange-600 hover:text-white">
                                <component :is="item.icon" class="mr-4 h-6 w-6 text-orange-200" aria-hidden="true" />
                                {{ item.name }}
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="flex flex-1 flex-col lg:pl-64">
            <div class="flex h-16 flex-shrink-0 border-b border-gray-200 bg-white lg:border-none">
                <button type="button"
                    class="border-r border-gray-200 px-4 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 lg:hidden"
                    @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <Bars3CenterLeftIcon class="h-6 w-6" aria-hidden="true" />
                </button>
                <!-- Search bar -->
                <div class="flex flex-1 justify-between px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
                    <div class="flex flex-1">
                        <form class="flex w-full md:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Buscar</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center"
                                    aria-hidden="true">
                                    <MagnifyingGlassIcon class="h-5 w-5" aria-hidden="true" />
                                </div>
                                <input id="search-field" name="search-field"
                                    class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                    placeholder="Buscar" type="search" />
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                            class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                            <span class="sr-only">View notifications</span>
                            <BellIcon class="h-6 w-6" aria-hidden="true" />
                        </button>

                        <!-- Profile dropdown -->
                        <Menu as="div" class="relative ml-3">
                            <div>
                                <MenuButton
                                    class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 lg:rounded-md lg:p-2 lg:hover:bg-gray-50">
                                    <vue-avatar v-if="!user.profile_image" :size="40" :username="user.name + user.last_name" />
                                    <vue-avatar v-else :size="40" :img-src="user.profile_image" />
                                    <ChevronDownIcon class="ml-1 hidden h-5 w-5 flex-shrink-0 text-gray-400 lg:block"
                                        aria-hidden="true" />
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition ease-out duration-100"
                                enter-from-class="transform opacity-0 scale-95"
                                enter-to-class="transform opacity-100 scale-100"
                                leave-active-class="transition ease-in duration-75"
                                leave-from-class="transform opacity-100 scale-100"
                                leave-to-class="transform opacity-0 scale-95">
                                <MenuItems
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <MenuItem v-slot="{ active }">
                                    <a href="#"
                                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Perfil</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                    <a href="/home"
                                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">User mode</a>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                    <a href="/logout"
                                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Cerrar Sesión</a>
                                    </MenuItem>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>
                </div>
            </div>
            <!-- Page header -->
            <div class="bg-white shadow">
                <div class="px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
                    <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                        <div class="min-w-0 flex-1">
                            <!-- Profile -->
                            <div class="flex items-center">
                                <vue-avatar v-if="!user.profile_image" :size="60" :username="user.name + user.last_name" />
                                <vue-avatar v-else :size="60" :img-src="user.profile_image" />
                                <div>
                                    <div class="flex items-center">
                                        <h1
                                            class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:leading-9">
                                            {{ user.name + ' ' + user.last_name }}</h1>
                                    </div>
                                    <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                                        <dt class="sr-only">Company</dt>
                                        <dd
                                            class="flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6">
                                            <UserGroupIcon class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                aria-hidden="true" />
                                            {{ user.type }}
                                        </dd>
                                        <dt class="sr-only">Account status</dt>
                                        <dd
                                            class="mt-3 flex items-center text-sm font-medium capitalize text-gray-500 sm:mr-6 sm:mt-0">
                                            <CheckCircleIcon class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                aria-hidden="true" />
                                            Cuenta Verificada
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</template>

<script setup>
import { ref } from 'vue'
import {
    Dialog,
    DialogPanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
} from '@headlessui/vue'
import {
    Bars3CenterLeftIcon,
    BellIcon,
    CogIcon,
    HomeIcon,
    LockClosedIcon,
    QuestionMarkCircleIcon,
    ScaleIcon,
    ShieldCheckIcon,
    ShieldExclamationIcon,
    UserGroupIcon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import {
    AcademicCapIcon, CurrencyEuroIcon, CalendarDaysIcon, QrCodeIcon, BriefcaseIcon, UserIcon,
    CheckCircleIcon,
    ChevronDownIcon,
    MagnifyingGlassIcon,
} from '@heroicons/vue/20/solid'
import VueAvatar from "@webzlodimir/vue-avatar";
import "@webzlodimir/vue-avatar/dist/style.css";

const sidebarOpen = ref(false)
</script>
<script>
export default {
    data() {
        return {
            user: window.authUser,
            navigation: [
                { name: 'Inicio', href: '#', current: true, icon: HomeIcon },
                { name: 'Encuestas', href: '#', current: false, icon: QuestionMarkCircleIcon },
                { name: 'Formación', href: '#', current: false, icon: AcademicCapIcon },
                { name: 'Presupuestos', href: '#', current: false, icon: CurrencyEuroIcon },
                { name: 'Calendario', href: '#', current: false, icon: CalendarDaysIcon },
                { name: 'Inventario', href: '#', current: false, icon: QrCodeIcon },
                { name: 'Empresas', href: '#', current: false, icon: BriefcaseIcon },
                { name: 'Usuarios', href: '#', current: false, icon: UserIcon },
            ],
            secondaryNavigation: [
                { name: "Ajustes", href: "#", icon: CogIcon },
                { name: "Editar Términos", href: "/edit_terms", icon: CogIcon },
                { name: "Editar Privacidad", href: "/edit_privacy", icon: QuestionMarkCircleIcon },
                { name: "Editar Cookies", href: "/edit_cookies", icon: ShieldCheckIcon },
            ],
        };
    },
    components: { LockClosedIcon, ShieldExclamationIcon }
}
</script>
