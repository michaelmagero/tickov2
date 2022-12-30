<template>
    <div id="transaction-card" class="pt-10">
        <div class="bg-white shadow-sm border p-10 w-full h-auto mr-10 rounded">
            <h1 class="font-semibold text-gray-800 mb-10">Transactions Summary</h1>
            <div class="flex items-center mb-4 mt-2">
                <div class="flex flex-grow items-center h-5">
                    <div class="mr-1">
                        <box-icon name="search" class="mt-2 search-icons"></box-icon>
                    </div>
                    <input type="text" class="px-1 py-3 w-1/4 bg-transparent text-body placeholder-grey border-none" placeholder="Search payments...">
                </div>
                <div class="ml-1 -mr-0.5 rounded hover:bg-light-97">
                    <button class="w-5 h-5 p-1 hover:opacity-100 btn-plain btn-has-icon-left btn-icon-only" type="button">
                        <span class="flex-shrink-0 w-3 h-3 text-body">
                            <box-icon name="filter" class="mt-3"></box-icon>
                        </span>
                    </button>
                </div>
            </div>
            <div id="transactions" class="flex justify-between pt-5">
                <div>
                    <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">Paid By</h3>
                    <h3 class="text-lg text-indigo-800 font-semibold">Michael Magero</h3>
                    <p class="text-xs text-gray-600 font-semibold">12/12/22</p>
                </div>
                <div>
                    <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">amount</h3>
                    <p class="font-bold text-gray-600 text-xl">+2000</p>
                    <p class="text-emerald-800 uppercase text-xs font-bold">successful</p>
                </div>
                <div>
                    <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">action</h3>
                    <p class="font-bold text-gray-600 text-xl"><box-icon type="solid" name="printer"></box-icon></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>

<style>
</style>
