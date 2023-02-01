<template>
    <div class="m-10 relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-orange-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody v-if="companies.length > 0">
            <tr v-for="(company, key) in companies" :key="key" class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ company.name }}
                </th>
                <td class="px-6 py-4">
                    {{ company.email }}
                </td>
                <td class="px-6 py-4">
                    {{ company.phone }}
                </td>
                <td class="px-6 py-4">
                    {{ company.cif }}
                </td>
                <td>
                    <button class="btn btn-blue">
                        Button
                    </button>
                </td>
            </tr>
        </tbody>
        <tbody v-else>
             <tr>
                <td class="content-center">No s'han trobat empreses</td>
             </tr>
        </tbody>
    </table>
</div>
</template>

<script>

import axios from 'axios';

export default {
  data() {
    return {
      companies: []
    };
  },
  mounted() {
    axios.get('/llistatEmpreses')
      .then(response => {
        this.companies = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  }
};
</script>



