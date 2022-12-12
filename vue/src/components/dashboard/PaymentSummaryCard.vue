<template>
    <div id="payment-cards" class="flex items-center pl-20">
        <div class="bg-white shadow-sm border p-10 w-2/5 h-40 mt-10 mr-10 rounded rounded-md">
            <div class="flex justify-between">
                <div class="payments">
                    <h1 class="font-semibold text-lg text-gray-800">Ticket Payments</h1>
                    <h1 class="text-4xl">
                        <span class="text-gray-500 text-xl"> KES </span>
                        <span class="font-semibold"> 300,000.<span class="text-xl p-0"> 00</span></span>
                    </h1>
                </div>
                <box-icon type="solid" name="coupon" class="payment-summary-icons"></box-icon>
            </div>
        </div>
        <div class="bg-white shadow-sm border p-10 w-2/5 h-40 mt-10 rounded rounded-md">
            <div class="flex justify-between">
                <div class="payments">
                    <h1 class="font-semibold text-lg text-gray-800">Shop Payments</h1>
                    <h1 class="text-4xl">
                        <span class="text-gray-500 text-xl"> KES </span>
                        <span class="font-semibold"> 750,000.<span class="text-xl p-0"> 00</span></span>
                    </h1>
                </div>
                <box-icon type="solid" name="cart-alt" class="payment-summary-icons"></box-icon>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>


<style>
    .payment-summary-icons {
        width: 60px;
        height: 60px;
        color: #ff0000;
    }
</style>
