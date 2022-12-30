<template>
    <div class="mx-auto max-w-7xl pt-11 h-full">
        <div class="page-title pb-10">
            <h1 class="text-3xl font-semibold text-gray-700">Subscription</h1>
            <p class="font-semibold pt-3 text-gray-500">Manage your subscription Plan</p>
        </div>
        <div class="flex justify-start">
            <div class="border border-emerald-400 shadow w-2/4 m-6 pl-10 pr-10 pb-10" v-for="subscription in subscriptionPackagesDetails">
                <div v-if="subscription.current_subscription == 1"  class=" bg-emerald-800 origin-top float-right text-white text-bold mt-0 mr-9 w-40 text-center" style="transform:translateX(50%) rotate(0deg);" >
                    <div class="">Current Subscription</div>
                </div>
                <h1 class="font-bold text-xl pb-5 pt-5">{{ subscription.package_name }}</h1>
                <p class="text-md text-gray-800 pb-5 h-28 w-full">{{ subscription.description }}</p>

                <p class="text-gray-900 font-semibold text-2xl py-3"><span>KES</span> {{ subscription.price }}</p>
                <h4 class="text-gray-600 pb-4">Features</h4>
                <ul v-for="feature in subscription.features" >
                    <span class="flex py-2">
                        <box-icon name="check-circle" class="fill-emerald-800 ml-2 mr-2"></box-icon>
                        <li>{{ feature.name }}</li>
                    </span>
                </ul>
                <div class="w-full mt-10">
                    <a href="#" class="border bg-emerald-800 border-emerald-800 hover:bg-emerald-700 px-8 py-2 text-white font-bold">Purchase</a>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
import { ArrowRightIcon } from '@heroicons/vue/24/outline';
import { CheckCircleIcon } from '@heroicons/vue/24/solid'

const subscriptionPackagesDetails = [
    {

        package_name: 'Hobby',
        description: 'Hobbyst 100 or less members events or aspiring merchandise sales',
        features: [
            { name: '200 Event Tickets' },
            { name: '10 Merchandise Items' },
            { name: '24/7 Support' },
            { name: 'Analytics & reporting' },
            { name: 'Payment Integration' }
        ],
        price: '1,000'
    },
    {
        current_subscription: 1,
        package_name: 'Growth',
        description: 'Growing creative with significant attendees events and growing merchandise sales',
        features: [
            { name: '500 Event Tickets' },
            { name: '20 Merchandise Items' },
            { name: 'Social Media Share Buttons' },
            { name: 'Reviews Forms' },
            { name: 'Discount and Coupon Codes' },
            { name: 'Payment Integration' },
            { name: 'Email Marketing ' },
            { name: '24/7 Support' },
            { name: 'Analytics & Reporting ' },

        ],
        price: '3,000'
    },
    {

        package_name: 'Business',
        description: 'Large attendee events with large ticket and merchandise volumes ',
        features: [
            { name: '500 Event Tickets'},
            { name: '20 Merchandise Items'},
            { name: 'Social Media Share Buttons'},
            { name: 'Reviews Forms'},
            { name: 'Discount and Coupon Codes'},
            { name: 'Gift Cards'},
            { name: 'Payment Integration'},
            { name: 'Email Marketing'},
            { name: 'USSD Integration'},
            { name: 'CRM Platform'},
            { name: '24/7 Support'},
            { name: 'Analytics & Reporting'},
        ],
        price: '5,000'
    }
]

</script>

<style>
</style>
