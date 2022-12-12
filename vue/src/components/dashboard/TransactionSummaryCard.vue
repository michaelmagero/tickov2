<template>
    <div id="transaction-card" class="pt-10 pl-20">
        <div class="bg-white shadow-sm border p-10 w-5/6 h-auto mr-10 rounded rounded-md">
            <h1 class="font-semibold text-gray-800">Transactions Summary</h1>
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
