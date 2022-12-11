<template>
    <div class="bg-gray-100 w-full h-screen">
        <div class="flex flex-col items-center justify-center h-full">
            <div class="card h-auto bg-white/80 px-6 py-4 shadow-md rounded rounded-xl w-1/3">
                <h3 class="text-3xl text-emerald-800 logo text-center pt-4">ticko</h3>
                <h1 class="text-2xl text-gray-900 text-center pt-3 font-bold">Enter your email to receive reset link</h1>
                <div class="signup-form pt-10 pb-10 px-10">
                    <form action="" class="text-sm">
                        <div class="flex flex-col py-2">
                            <input type="email" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Email Address">
                        </div>
                        <div class="flex flex-col py-2">
                            <a href="" class="rounded bg-emerald-800 py-3 py-4 text-white text-center font-semibold mt-4 hover:bg-emerald-700">Send Password Reset Link</a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="pt-4 text-sm">Already have an account? <a @click="$router.push('/auth/login')" class="text-emerald-800 underline hover:text-emerald-700">Sign in</a></p>
        </div>
    </div>
</template>

<script setup>
    const industryTypes = [
        {name: 'Entertainment'},
        {name: 'Creative'},
        {name: 'Education'},
        {name: 'Finance'},
        {name: 'FinTech'},
        {name: 'EdTech'},
        {name: 'Retail'},
        {name: 'FinTech'},
    ]
</script>

<style>
    .logo {
        font-family: 'Pacifico';
    }
</style>


