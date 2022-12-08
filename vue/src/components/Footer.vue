<template>
    <div class="pt-16 bg-gray-800">
        <div class="w-full border-gray-300 lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto max-w-6xl">
            <div class="container mx-auto py-12">
                <div class="xl:flex lg:flex md:flex pt-6">
                    <div class="w-11/12 xl:w-2/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-start pl-3 sm:pl-0">
                        <ul >
                            <li class="text-white/80 font-bold text-xl mb-6">Company</li>
                            <li v-for="detail in companyDetails" :key="detail.name" class="text-base text-white hover:underline mb-3">
                                <a href="javascript:void(0)">{{ detail.name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-11/12 xl:w-2/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-start pl-3 sm:pl-0">
                        <ul >
                            <li class="text-white/80 font-bold text-xl mb-6">Quick Links</li>
                            <li v-for="link in links" :key="link.name" class="text-base text-white hover:underline mb-3">
                                <a href="javascript:void(0)">{{ link.name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-11/12 xl:w-2/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-start pl-3 sm:pl-0">
                        <ul>
                            <li class="text-white/80 font-bold text-xl mb-6">Legal</li>
                            <li  v-for="legal in legalLinks" :key="legal.name" class="text-base text-white hover:underline mb-3">
                                <a href="javascript:void(0)">{{ legal.name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="xl:flex lg:flex md:flex pt-6">
                    <div class="w-11/12 xl:w-2/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-start pl-3 sm:pl-0">
                        <ul >
                            <li class="text-white/80 font-bold text-xl mb-6">Support</li>
                            <li v-for="support in supportLinks" :key="support.name" class="text-base text-white hover:underline mb-5">
                                <a href="javascript:void(0)">{{ support.name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                        <p class="text-white text-base">&copy; {{ new Date().getFullYear() }} Ticko. All Rights Reserved</p>
                    </div>
                    <div class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                        <div class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                            <div>
                                <a href="javascript:void(0)">
                                    <svg aria-label="Twitter" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:void(0)">
                                    <svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:void(0)">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const companyDetails = [
            { name: 'About Us' },
            { name: 'Blog' },
            { name: 'Pricing' },
            { name: 'Become a Partner' },
    ]

    const legalLinks = [
        { name: 'Security' },
        { name: 'Privacy Policy' },
        { name: 'Terms and Conditions' },
    ]

    const supportLinks = [
        { name: 'Phone : +254769907166' },
        { name: 'Email : ticketing@ticko.co.ke' },
        { name: 'Email: merchandise@ticko.co.ke'}
    ]

    const links = [
        { name: 'Shop' },
        { name: 'Events' },
        { name: 'Partners'},
        { name: 'Sing Up'},
    ]

</script>
