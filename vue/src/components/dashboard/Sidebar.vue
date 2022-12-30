<template>
    <div id="sidebar" class="fixed top-0 h-screen bg-white w-2/12 pt-10 pl-10 ">
        <div id="auth-details" class="flex items-start justify-between">
            <h1 class="logo text-3xl text-emerald-800">ticko</h1>
            <div id="avatar-notifications-section" class="pr-5 flex pt-1 justify-end">
                <div class="avatar">
                    <h3 class="bg-emerald-800 rounded-full p-1 text-white font-semibold text-sm">MM</h3>
                </div>
                <div class="notification pl-3 pt-1">
                    <box-icon name="bell"></box-icon>
                    <label></label>
                </div>
            </div>
        </div>

        <div id="menu-details" class="pt-10">
            <ul class="flex flex-col justify-center">
                <li class="py-1 font-semibold text-gray-600 hover:text-emerald-900 hover:font-bold active" v-for="menu in menuDetails" @click="$router.push(menu.url)">
                    <box-icon :type="menu.type" :name="menu.icon" class="pt-1"></box-icon>
                    <span class="p-2">{{ menu.value }}</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
    const menuDetails = [
        { url: 'dashboard', name:'Dashboard', value:'Dashboard', icon: 'dashboard', type: 'solid' },
        { url: 'events', name:'Events', value:'Events', icon: 'calendar-event', type: '' },
        { url: 'shop', name:'Shop', value:'Shop', icon: 'cart-alt', type: 'solid' },
        { url: 'customers', name:'Customers', value:'Customers', icon: 'user-circle', type:'solid' },
        { url: 'reviews', name:'Reviews', value:'Reviews', icon: 'message-rounded-dots', type: '' },
        { url: 'promotions', name:'Promotions', value:'Promotions', icon: 'megaphone', type:'solid' },
        { url: 'coupons', name:'Coupons', value:'Coupons', icon: 'coupon', type:'solid' },
        { url: 'giftCards', name:'GiftCards', value:'GiftCards', icon: 'gift', type:'' },
        { url: 'sms', name:'SMS', value:'SMS', icon: 'mobile-alt', type: '' },
        { url: 'payments', name:'Payments', value:'Payments', icon: 'wallet'},
        { url: 'reports', name:'Reports', value:'Reports', icon: 'chalkboard', type: '' },
        { url: 'log', name:'Log Out', value:'Log Out', icon: 'log-out-circle' },
        {},
        { url: 'help', name:'help', value:'Help', icon: 'support' },
        { url: 'documents', name:'documents', value:'Documents', icon: 'folder-open', type:'solid' },
        { url: 'subscription', name:'subscription', value:'Change Plan', icon: 'credit-card', type:'solid' },
    ]
</script>

<style>
    .logo {
        font-family: 'Pacifico';
    }
</style>
