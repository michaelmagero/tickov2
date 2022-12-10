<template>
    <div class="bg-gray-100 w-full h-screen">
        <div class="flex flex-col items-center justify-center h-full">
            <div class="card h-auto bg-white/80 px-6 py-4 shadow-md rounded rounded-xl w-1/3">
                <h3 class="text-3xl text-emerald-800 logo text-center pt-4">ticko</h3>
                <h1 class="text-4xl text-gray-900 text-center pt-3 font-bold">Welcome to Ticko</h1>
                <p class="text-center text-gray-600 pt-6">Ticko is an integrated ticketing and merchandise platform for creatives and businesses.
                    Sign up to manage your ticketing or online shop.</p>
                <div class="signup-buttons flex flex-col items-center justify-center pt-8 pb-4">
                    <div class="font-semibold w-96 text-center rounded border border-emerald-800 px-10 py-2 my-2 hover:bg-emerald-800 hover:text-white hover:border-0">
                        <a href="" class="">Sign up with Google</a>
                    </div>
                    <div class="font-semibold w-96 text-center rounded border border-emerald-800 px-10 py-2 my-2 hover:bg-emerald-800 hover:text-white hover:border-0">
                        <a href="" class="">Sign up with Facebook</a>
                    </div>
                    <div class="font-semibold w-96 text-center rounded border border-emerald-800 px-10 py-2 my-2 hover:bg-emerald-800 hover:text-white hover:border-0">
                        <a @click="$router.push('/auth/register')" class="">Sign up with Email</a>
                    </div>
                </div>
                <hr>
                <p class="text-center pt-4 text-sm">By Signing up you agree to our <a class="text-emerald-800 underline hover:text-emerald-700">Terms of Service</a></p>
            </div>
            <p class="pt-4 text-sm">Already have an account? <a @click="$router.push('/auth/login')" class="text-emerald-800 underline hover:text-emerald-700">Sign in</a></p>
        </div>
    </div>
</template>

<script setup>
</script>

<style>
    .logo {
        font-family: 'Pacifico';
    }
</style>


