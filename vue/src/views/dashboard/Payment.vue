<template>
    <div>
        <div class="page-title pt-11 pl-20">
            <h1 class="text-3xl font-semibold text-gray-700">Payments</h1>
            <p class="font-semibold pt-3 text-gray-500">These are all payments made to your listed payment platforms</p>
            <a href="" class="text-emerald-800 font-bold underline">manage payment platforms</a>
        </div>
        <div class="pl-20 pt-10">
            <div class="bg-white shadow-sm border p-10 w-5/6 h-auto mr-10 rounded rounded-md">
                <span class="">
                    <div class="border border-2 px-4 py-1 w-1/3 rounded-full mb-4">
                        <box-icon type="solid" name="seach"></box-icon>
                    </div>
                </span>
                <div id="transactions" class="flex justify-between pt-5">
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">Event</h3>
                        <h3 class="text-lg text-indigo-800 font-semibold">Michael Magero</h3>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">Date</h3>
                        <p class="text-lg text-gray-600 font-semibold">12/12/22</p>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">location</h3>
                        <p class="font-bold text-gray-600 text-xl">Nairobi</p>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">Organizer</h3>
                        <p class="font-bold text-gray-600 text-xl">MGR Studios</p>
                    </div>
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase font-semibold pb-2">action</h3>
                        <p class="font-bold text-gray-600 text-xl">
                            <box-icon type="solid" name="edit"></box-icon>
                            <box-icon type="solid" name="edit"></box-icon>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
</script>

<style>
</style>
