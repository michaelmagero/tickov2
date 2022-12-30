<template>
    <div class="mx-auto max-w-7xl pt-11 h-screen">
        <div class="page-title pb-10">
            <h1 class="text-3xl font-semibold text-gray-700">Payments</h1>
            <p class="font-semibold pt-3 text-gray-500">These are all payments made to your listed payment platforms</p>
            <a href="" class="text-emerald-800 font-bold underline mt-4">manage payment platforms</a>
        </div>
        <div class="bg-white shadow-sm border p-10 w-full h-auto mr-10 rounded">
            <div class="flex items-center mb-4 mt-2">
                <div class="flex flex-grow items-center h-5">
                    <div class="mr-1">
                        <box-icon name="search" class="mt-2 search-icons fill-gray-500"></box-icon>
                    </div>
                    <input type="text" class="px-1 py-3 w-1/4 bg-transparent text-body placeholder-grey border-none"
                        placeholder="Search payments..." />
                </div>
                <div class="ml-1 -mr-0.5 rounded hover:bg-light-97">
                    <button
                        class="w-5 h-5 p-1 hover:opacity-100 btn-plain btn-has-icon-left btn-icon-only"
                        type="button">
                        <span class="flex-shrink-0 w-3 h-3 text-body">
                            <box-icon name="filter" class="mt-3 fill-gray-500"></box-icon>
                        </span>
                    </button>
                </div>
            </div>
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6" v-for="body in tableHeaders" :key="body.id">
                            {{ body.name }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="body in tableBody" :key="body.id">
                        <td class="py-4 px-6">{{ body.id }}</td>
                        <td class="py-4 px-6">{{ body.event }}</td>
                        <td class="py-4 px-6">{{ body.date }}</td>
                        <td class="py-4 px-6">{{ body.location }}</td>
                        <td class="py-4 px-6">{{ body.organizer }}</td>
                        <td class="py-4 px-6">{{ body.organizer }}</td>
                        <td class="py-4 px-6">{{ body.organizer }}</td>
                        <td class="py-4 px-6">{{ body.status }}</td>
                        <td class="py-4 px-6">
                            <a href="#"><box-icon type="solid" name="edit" class="ml-1 mr-1"></box-icon></a>
                            <a href="#"><box-icon type="solid" name="trash" class="ml-1 mr-1"></box-icon></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script setup>
    const tableHeaders = [
        { name: 'Payment Item' },
        { name: 'Date' },
        { name: 'Location' },
        { name: 'Organizer' },
        { name: 'Action' },
    ]
</script>

<style>
</style>
