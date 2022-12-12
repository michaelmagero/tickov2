<template>
    <div>
        <div class="page-title pt-11 pl-20">
            <h1 class="text-3xl font-semibold text-gray-700">Events</h1>
            <p class="font-semibold pt-3 text-gray-500">This is a list of all events you have created with an option to add a new event.</p>
        </div>
        <div class="pl-20 pt-10">
            <div class="main-button mb-6">
                <a href="" class="bg-emerald-800 rounded py-2 px-4 text-white text-sm font-bold hover:bg-emerald-700 hover:text-white">Create Event</a>
            </div>
            <div class="bg-white shadow-sm border p-10 w-5/6 h-auto mr-10 rounded rounded-md">
                <h1 class="font-semibold text-gray-800">Events</h1>
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

