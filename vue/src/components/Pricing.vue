<template>
    <div class="bg-gray-200">
        <div class="mx-auto max-w-7xl py-20">
            <div class="flex flex-col items-center justify-center py-10">
                <h1 class="text-3xl text-emerald-800">Stress Free Event Ticket and Merchandise Sales</h1>
                <p class="text-xl py-3 font-bold text-gray-600">Choose a plan and start selling immediately</p>
                <div class="py-5">
                    <div class="flex items-center justify-center w-full mb-12">
                        <label for="toggleB" class="flex items-center cursor-pointer">
                            <div class="mr-3 text-gray-700 font-medium">
                                Monthly
                            </div>
                            <div class="relative">
                                <input type="checkbox" id="toggleB" class="sr-only">
                                <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
                                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                            </div>
                            <div class="ml-3 text-gray-700 font-medium">
                                Yearly
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center text-center">
                <div class="hobby-package px-6">
                    <h3 class="text-emerald-800 font-bold text-2xl py-2">Hobby</h3>
                    <p class="text-gray-800 font-semibold py-3">Hobbyst 100 or less members events or aspiring
                        merchandise sales</p>
                    <ul class="py-5">
                        <li class="py-2 font-bold">200 Event Tickets</li>
                        <li class="py-2 font-bold">10 Merchandise Items</li>
                        <li class="py-2 font-bold">24/7 Support</li>
                        <li class="py-2 font-bold">Analytics & reporting</li>
                        <li class="py-2 font-bold">Payment Integration</li>
                    </ul>
                    <p class="text-gray-900 font-semibold text-2xl py-3"><span>KES</span> 1,000</p>
                    <a href="#"
                        class="inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded border border-transparent bg-emerald-800 px-6 py-2 my-4 text-sm text-white shadow-sm hover:bg-emerald-700">Sign
                        up</a>

                </div>
                <div class="group-packages flex items-center justify-center bg-white/80 px-4 py-16 rounded-sm shadow">
                    <div class="growth-package px-6 text-center">
                        <h3 class="text-emerald-800 font-bold text-2xl py-2">Growth</h3>
                        <p class="text-gray-800 font-semibold py-3">Growing creative with significant attendees events
                            and growing merchandise sales</p>
                        <ul class="py-5">
                            <li class="py-2 font-bold">500 Event Tickets</li>
                            <li class="py-2 font-bold">20 Merchandise Items</li>
                            <li class="py-2 font-bold">Social Media Share Buttons</li>
                            <li class="py-2 font-bold">Reviews Forms</li>
                            <li class="py-2 font-bold">Discount and Coupon Codes</li>
                            <li class="py-2 font-bold">Payment Integration</li>
                            <li class="py-2 font-bold">Email Marketing</li>
                            <li class="py-2 font-bold">24/7 Support</li>
                            <li class="py-2 font-bold">Analytics & Reporting</li>

                        </ul>
                        <p class="text-gray-900 font-semibold text-2xl py-2"><span>KES</span> 3,000 / month</p>
                        <a href="#"
                            class="inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded border border-transparent bg-emerald-800 px-6 py-2 my-4 text-sm text-white shadow-sm hover:bg-emerald-700">Sign
                            up</a>
                    </div>
                    <div class="business-package px-6 text-center">
                        <h3 class="text-emerald-800 font-bold text-2xl py-2">Business</h3>
                        <p class="text-gray-800 font-semibold py-3">Large attendee events with large ticket and
                            merchandise volumes </p>
                        <ul class="py-5">
                            <li class="py-2 font-bold">500 Event Tickets</li>
                            <li class="py-2 font-bold">20 Merchandise Items</li>
                            <li class="py-2 font-bold">Social Media Share Buttons</li>
                            <li class="py-2 font-bold">Reviews Forms</li>
                            <li class="py-2 font-bold">Discount and Coupon Codes</li>
                            <li class="py-2 font-bold">Gift Cards</li>
                            <li class="py-2 font-bold">Payment Integration</li>
                            <li class="py-2 font-bold">Email Marketing</li>
                            <li class="py-2 font-bold">USSD Integration</li>
                            <li class="py-2 font-bold">CRM Platform</li>
                            <li class="py-2 font-bold">24/7 Support</li>
                            <li class="py-2 font-bold">Analytics & Reporting</li>
                        </ul>
                        <p class="text-gray-900 font-semibold text-2xl py-2"><span>KES</span> 5,000 / month</p>
                        <a href="#"
                            class="inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded border border-transparent bg-emerald-800 px-6 py-2 my-4 text-sm text-white shadow-sm hover:bg-emerald-700">Sign
                            up</a>
                    </div>
                </div>
            </div>
            <div class="text-center pt-20">
                <a href="#" class="text-emerald-800 font-bold font-3xl hover:underline">Learn More</a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ArrowRightIcon } from '@heroicons/vue/24/outline';
import { CheckCircleIcon } from '@heroicons/vue/24/solid'

</script>

<style>
/* Toggle A */
input:checked~.dot {
    transform: translateX(100%);
    background-color: #48bb78;
}

/* Toggle B */
input:checked~.dot {
    transform: translateX(100%);
    background-color: #48bb78;
}
</style>
