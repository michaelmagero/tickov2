<template>
     <div id="overall-summary-card" class="pl-20">
        <div class="bg-white shadow-sm border pt-10 w-5/6 h-40 mt-10 mr-10 rounded rounded-md">
            <div id="summary-items" class="flex items-center justify-start">
                <div class="border-r-4 pr-4 pl-10 pr-10 w-1/5">
                    <box-icon type="solid" name="coupon"></box-icon>
                    <div>
                        <h1 class="font-semibold text-lg text-gray-800">Tickets</h1>
                        <h1 class="text-4xl">
                            <span class="font-semibold text-emerald-800"> 300</span>
                        </h1>
                    </div>
                </div>
                <div class="border-r-4 pr-4 pl-10 pr-10 w-1/5">
                    <box-icon type="solid" name="cart-alt"></box-icon>
                    <div>
                        <h1 class="font-semibold text-lg text-gray-800">Shop</h1>
                        <h1 class="text-4xl">
                            <span class="font-semibold text-emerald-800"> 80</span>
                        </h1>
                    </div>
                </div>
                <div class="border-r-4 pr-4 pl-10 pr-10 w-1/5">
                    <box-icon type="solid" name="user-circle"></box-icon>
                    <div>
                        <h1 class="font-semibold text-lg text-gray-800">Customers</h1>
                        <h1 class="text-4xl">
                            <span class="font-semibold text-emerald-800"> 1200</span>
                        </h1>
                    </div>
                </div>
                <div class="border-r-4 pr-4 pl-10 pr-10 w-1/5">
                    <box-icon name="message-rounded-dots"></box-icon>
                    <div>
                        <h1 class="font-semibold text-lg text-gray-800">Reviews</h1>
                        <h1 class="text-4xl">
                            <span class="font-semibold text-emerald-800"> 350</span>
                        </h1>
                    </div>
                </div>
                <div class="border-r-4 pr-4 pl-10 pr-10 w-1/5">
                    <box-icon name="mobile-alt"></box-icon>
                    <div>
                        <h1 class="font-semibold text-lg text-gray-800">SMS</h1>
                        <h1 class="text-4xl">
                            <span class="font-semibold text-emerald-800"> 1000</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const menuDetails = [
        { name:'Dashboard', value:'Dashboard', icon: 'dashboard', type: 'solid' },
        { name:'Events', value:'Events', icon: 'calendar-event', type: '' },
        { name:'Merchandise', value:'Merchandise', icon: 'cart-alt', type: 'solid' },
        { name:'Customers', value:'Customers', icon: 'user-circle', type:'solid' },
        { name:'Reviews', value:'Reviews', icon: 'message-rounded-dots', type: '' },
        { name:'Promotions', value:'Promotions', icon: 'megaphone', type:'solid' },
        { name:'Coupons', value:'Coupons', icon: 'coupon', type:'solid' },
        { name:'GiftCards', value:'GiftCards', icon: 'gift', type:'' },
        { name:'SMS', value:'SMS', icon: 'mobile-alt', type: '' },
        { name:'Payments', value:'Payments', icon: 'wallet'},
        { name:'Reports', value:'Reports', icon: 'chalkboard', type: '' },
        { name:'Log Out', value:'Log Out', icon: 'log-out-circle' },
        {},
        { name:'Help', value:'Help', icon: 'support' },
        { name:'Documents', value:'Documents', icon: 'folder-open', type:'solid' },
        { name:'Change Plan', value:'Change Plan', icon: 'credit-card', type:'solid' },
    ]
</script>

<style>
</style>
