<template>
    <Navbar />
    <Hero />


    <!-- FEATURES SECTION -->
    <div class="bg-white/80 mx-auto max-w-7xl px-6 py-40">
        <h1 class="text-center font-bold pb-10 text-4xl py-10 text-emerald-800">why ticko?</h1>

        <div class="flex items-center justify-between px-4">
            <div class="p-10">
                <TicketIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Event Tickets</h3>
                <p class="text-gray-700 font-medium">List your events and manage tickting by creating custom ticket types and prices.</p>
            </div>
            <div class="p-10">
                <ShoppingBagIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Merchandise Shop</h3>
                <p class="text-gray-700 font-medium">Sell your merchandise item with a personalized online shop with all e-shop features out of the box.</p>
            </div>
            <div class="p-10">
                <ShareIcon class="w-10 h-10 text-emerald-800"/>
                <h3 class="py-4 text-2xl font-bold text-gray-800">Social Share Buttons</h3>
                <p class="text-gray-700 font-medium">Promote your events and tickets across leading social media platform with hybrid share buttons with tracking and analytics functionality.</p>
            </div>
        </div>

        <div class="flex items-center justify-between px-4">
            <div class="p-10">
                <DevicePhoneMobileIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Reviews Forms</h3>
                <p class="text-gray-700 font-medium">Gather real time event and merchandise shop feedback and reviews all managed from your dashboard.</p>
            </div>
            <div class="p-10">
                <QrCodeIcon class="w-10 h-10 text-emerald-800"/>
                <h3 class="py-4 text-2xl font-bold text-gray-800">Coupon Codes</h3>
                <p class="text-gray-700 font-medium">Create, share and manage discount and coupon codes for event and merchandise. </p>
            </div>
            <div class="p-10">
                <CreditCardIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Payment Integration</h3>
                <p class="text-gray-700 font-medium">Collect payments directly from customers from all leading mobile and card platforms. No middleman!</p>
            </div>
        </div>

        <div class="flex items-center justify-between px-4">
            <div class="p-10">
                <EnvelopeIcon  class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Email Marketing</h3>
                <p class="text-gray-700 font-medium">Create mail list and run advertising campaigns on upcoming events and merchandise.</p>
            </div>
            <div class="p-10">
                <ChatBubbleBottomCenterIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">USSD Integration</h3>
                <p class="text-gray-700 font-medium">Reach a wider market with customized USSD codes to supplement your online store and ticket sales.</p>
            </div>
            <div class="p-10">
                <ComputerDesktopIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">CRM Platform</h3>
                <p class="text-gray-700 font-medium">Continously engage with your clients and find new clients right from your administration panel. </p>
            </div>
        </div>

        <div class="flex items-center justify-between px-4">
            <div class="p-10">
                <GiftIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Gift Cards</h3>
                <p class="text-gray-700 font-medium">Create redeemable gift cards on events tickets or merchandise redeemable to clients and managed from administrative panel.</p>
            </div>
            <div class="p-10">
                <PhoneArrowDownLeftIcon  class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">24/7 Support</h3>
                <p class="text-gray-700 font-medium">Our support team are always just a few clicks away and ready to help with our shared expertise to make sure using ticko remains valuable. </p>
            </div>
            <div class="p-10">
                <PresentationChartBarIcon class="w-10 h-10 text-emerald-800" />
                <h3 class="py-4 text-2xl font-bold text-gray-800">Analytics & Reporting</h3>
                <p class="text-gray-700 font-medium">Get insights and valuable performance reports on your events and merchandise sales with customizable chart and other data representation options. </p>
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
    import Navbar from '../components/website/Navbar.vue'
    import Hero from '../components/website/HeroSection.vue'
    import Pricing from '../components/website/Pricing.vue'
    import Footer from '../components/website/Footer.vue'
import { ChartPieIcon, ChatBubbleBottomCenterIcon, ComputerDesktopIcon, CreditCardIcon, DevicePhoneMobileIcon, EnvelopeIcon, GiftIcon, PhoneArrowDownLeftIcon, PresentationChartBarIcon, QrCodeIcon, ShareIcon, ShoppingBagIcon, TicketIcon } from '@heroicons/vue/24/outline'
</script>
