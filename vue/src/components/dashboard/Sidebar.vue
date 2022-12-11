<template>
    <div id="sidebar" class="bg-white/80 w-2/12 h-screen pt-10 pl-10 ">
        <div id="auth-details" class="flex items-start justify-between">
            <h1 class="logo text-3xl text-emerald-800">ticko</h1>
            <div id="avatar-notifications-section" class="pr-5 flex pt-1 justify-end">
                <div class="avatar">
                    <h3 class="bg-emerald-800 rounded-full p-1 text-white font-semibold text-sm">MM</h3>
                </div>
                <div class="notification pl-3 pt-1">
                    <box-icon name="bell"></box-icon>
                </div>
            </div>
        </div>

        <div id="menu-details" class="pt-10">
            <ul class="flex flex-col justify-center">
                <li class="py-1 font-semibold text-gray-600" v-for="menu in menuDetails">
                    <box-icon :type="menu.type" :name="menu.icon" class="pt-1"></box-icon>
                    <span class="p-2">{{ menu.value }}</span>
                </li>
            </ul>
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
        { name:'USSD', value:'USSD', icon: 'mobile-alt', type: '' },
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
    .logo {
        font-family: 'Pacifico';
    }
</style>
