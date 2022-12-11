<template>
    <div class="bg-gray-100 w-full h-screen">
        <div class="flex flex-col items-center justify-center h-full my-2">
            <div class="card h-auto bg-white/80 px-6 py-4 shadow-md rounded rounded-xl w-1/3">
                <h3 class="text-3xl text-emerald-800 logo text-center pt-4">ticko</h3>
                <h1 class="text-2xl text-gray-900 text-center pt-3 font-bold">Sign Up for a free 14-day trial</h1>
                <div class="signup-form pt-10 pb-10 px-10">
                    <form action="" class="text-sm">
                        <div class="flex flex-col py-2">
                            <input type="text" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Full Names">
                        </div>
                        <div class="flex flex-col py-2">
                            <input type="text" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Company Name">
                        </div>
                        <div class="flex flex-col py-2">
                            <input type="text" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Phone">
                        </div>
                        <div class="flex flex-col py-2">
                            <input type="email" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Email">
                        </div>
                        <div class="flex flex-col py-2">
                            <input type="password" name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold" placeholder="Password">
                        </div>
                        <div class="flex flex-col py-2">
                            <select name="" id="" class="rounded border border-gray-300 mt-2 text-sm font-semibold">
                                <option value="{{ industry.value }}" v-for="industry in industryTypes" class="text-sm"> {{ industry.name   }}</option>
                            </select>
                        </div>
                        <div class="flex flex-col py-2">
                            <a href="" class="rounded bg-emerald-800 py-3 py-4 text-white text-center font-semibold mt-4 hover:bg-emerald-700">Sign Up</a>
                        </div>
                    </form>
                </div>
                <hr>
                <p class="text-center pt-4 text-sm">By Signing up you agree to our <a class="text-emerald-800 underline hover:text-emerald-700">Terms of Service</a> and you have read our <a href="" class="text-emerald-800 underline hover:text-emerald-700">Privacy Policy</a></p>
            </div>
            <p class="pt-4 text-sm">Already have an account? <a @click="$router.push('/auth/login')" class="text-emerald-800 underline hover:text-emerald-700">Sign in</a></p>
        </div>
    </div>
</template>

<script setup>
    const industryTypes = [
        {name: 'Select Your Industry', value: ''},
        {name: 'Entertainment', value: 'Entertainment'},
        {name: 'Creative', value: 'Creative'},
        {name: 'Education', value: 'Education'},
        {name: 'Finance', value: 'Finance'},
        {name: 'FinTech', value: 'FinTech'},
        {name: 'EdTech', value: 'EdTech'},
        {name: 'Retail', value: 'Retail'},
        {name: 'FinTech', value: 'FinTech'},
    ]
</script>

<style>
    .logo {
        font-family: 'Pacifico';
    }
</style>


