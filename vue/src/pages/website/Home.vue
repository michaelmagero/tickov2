<template>
    <Navbar />

    <Hero />

    <!-- FEATURES SECTION -->
    <Features />


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
    import Navbar from '../../components/website/Navbar.vue'
    import Hero from '../../components/website/HeroSection.vue'
    import Features from '../../components/website/Features.vue'
    import Pricing from '../../components/website/Pricing.vue'
    import Footer from '../../components/website/Footer.vue'
</script>
