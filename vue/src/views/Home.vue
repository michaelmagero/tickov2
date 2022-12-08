<template>
    <Navbar />
    <Hero />
    <!-- FEATURES SECTION -->
    <div class="bg-white/80 mx-auto max-w-7xl px-6 py-40">
        <h1 class="text-center font-bold pb-10 text-4xl py-10 text-emerald-800">why ticko?</h1>
        <div class="flex px-4 pt-10 pb-20">
            <div>
                <TicketIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Event Tickets</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <ShoppingBagIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Merchandise Shop</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <ShareIcon class="w-10 h-10 text-emerald-800"/>
                <h3 class="py-4 text-2xl font-bold text-gray-800">Social Share Buttons</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
        </div>

        <div class="flex px-4 pt-10 pb-20">
            <div>
                <DevicePhoneMobileIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Comment and Reviews Forms</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <QrCodeIcon class="w-10 h-10 text-emerald-800"/>
                <h3 class="py-4 text-2xl font-bold text-gray-800">Discount and Coupon Codes</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <CreditCardIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Payment Integration</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
        </div>
        <div class="flex px-4 pt-10 pb-20">
            <div>
                <EnvelopeIcon  class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Email Marketing</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <ChatBubbleBottomCenterIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">SMS Marketing</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <ComputerDesktopIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">CRM Platform</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
        </div>
        <div class="flex px-4 pt-10 pb-20">
            <div>
                <GiftIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Gift Cards</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <PhoneArrowDownLeftIcon  class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">24/7 Support</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
            <div>
                <PresentationChartBarIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Analytics & Reporting</h3>
                <p class="text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quos, quae reiciendis debitis saepe nam voluptatibus modi aliquid minus ad.</p>
            </div>
        </div>

    </div>
    <!-- CTA SECTION -->
    <div class="flex flex-col items-center justify-center bg-emerald-800 py-24">
        <h1 class="text-5xl text-white py-6">Ready to get Started?</h1>
        <p class="text-white font-bold w-96 text-center py-10 text-xl">Not sure if ticko is what you need? Try it completely free and only pay when you publish an event or launch your merchandise</p>
        <a href="#" class="inline-flex uppercase font-extrabold items-center justify-center whitespace-nowrap rounded border border-transparent bg-white px-10 py-4 my-4 text-sm text-emerald-800 shadow-sm hover:bg-white/80">Sign up Free</a>
    </div>

    <Pricing />
    <Footer />
</template>

<script setup>
    import Navbar from '../components/Navbar.vue'
    import Hero from '../components/HeroSection.vue'
    import FeaturedEvents from '../components/FeaturedEvents.vue'
    import UpcomingEvents from '../components/UpcomingEvents.vue'
    import Pricing from '../components/Pricing.vue'
    import Footer from '../components/Footer.vue'
import { ChartPieIcon, ChatBubbleBottomCenterIcon, ComputerDesktopIcon, CreditCardIcon, DevicePhoneMobileIcon, EnvelopeIcon, GiftIcon, PhoneArrowDownLeftIcon, PresentationChartBarIcon, QrCodeIcon, ShareIcon, ShoppingBagIcon, TicketIcon } from '@heroicons/vue/24/outline'
</script>
