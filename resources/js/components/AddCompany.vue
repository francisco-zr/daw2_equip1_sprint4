<template>

    <div class="grid justify-items-end mr-10">
        <button class="bg-orange-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5  " @click="open = true">Crear empresa</button>
    </div>
            <TransitionRoot as="template" :show="open">
            <Dialog as="div" class="relative z-10" @close="open = false">
                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"/>
                </TransitionChild>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="xl:items-start">
                            <div class="flex space-x-2 items-center">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <PlusCircleIcon class="h-6 w-6 text-orange-400" aria-hidden="true" />
                                </div>
                                <DialogTitle as="h3" class="text-lg font-medium leading-6 text-gray-900">Crear nueva empresa</DialogTitle>
                            </div>

                            <div class="mt-3 text-center md:text-left">
                                <form @submit.prevent="submitForm">
                                    <div class="mt-2">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                                            <input type="text" id="first_name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-orange-400 focus:border-orange-400" required>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electrónico</label>
                                            <input type="text" id="first_name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-orange-400 focus:border-orange-400" required>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="flex w-full space-x-8">
                                            <div class="w-full">
                                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                                                <input type="text" id="first_name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-orange-400 focus:border-orange-400" required>
                                            </div>
                                            <div class="w-full">
                                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIF</label>
                                                <input type="text" id="first_name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-orange-400 focus:border-orange-400" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false">Deactivate</button>
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false" ref="cancelButtonRef">Cancel</button>
                        </div>
                    </DialogPanel>
                    </TransitionChild>
                </div>
                </div>
            </Dialog>
            </TransitionRoot>

  </template>

  <script setup>

  import { ref } from 'vue'
  import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
  import { PlusCircleIcon } from '@heroicons/vue/24/outline'

  const open = ref(false)
  </script>
