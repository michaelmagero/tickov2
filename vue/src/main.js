import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

import App from './App.vue'
import Welcome from "./pages/Welcome.vue"
import Home from "./pages/website/Home.vue"
import Events from "./pages/website/Events.vue"
import Pricing from "./pages/website/Pricing.vue"
import Shops from "./pages/website/Shop.vue"

import Login from "./pages/auth/Login.vue"
import Register from "./pages/auth/Register.vue"
import PasswordReset from "./pages/auth/PasswordReset.vue"
import Index from "./pages/dashboard/Index.vue"
import Dashboard from "./pages/dashboard/Dashboard.vue"
import EventPage from "./pages/dashboard/Event.vue"
import Shop from "./pages/dashboard/Shop.vue"
import Customer from "./pages/dashboard/Customer.vue"
import Review from "./pages/dashboard/Review.vue"
import Promotion from "./pages/dashboard/Promotion.vue"
import Coupon from "./pages/dashboard/Coupon.vue"
import GiftCard from "./pages/dashboard/GiftCard.vue"
import Sms from "./pages/dashboard/Sms.vue"
import Payment from "./pages/dashboard/Payment.vue"
import Report from "./pages/dashboard/Report.vue"
import Help from "./pages/dashboard/Help.vue"
import Document from "./pages/dashboard/Document.vue"
import Subscription from "./pages/dashboard/Subscription.vue"
import './index.css'
import 'boxicons'


// routes
const routes = [
    { path: "/", component: Home, name: "Home" },
    { path: "/events", component: Events, name: "Events" },
    { path: "/shops", component: Shops, name: "Shops" },
    { path: "/pricing", component: Pricing, name: "Pricing" },



    { path: "/auth/login", component: Login, name: "Login" },
    { path: "/auth/register", component: Register, name: "Register" },
    { path: "/auth/reset-password", component: PasswordReset, name: "PasswordReset" },
    { path: "/welcome", component: Welcome, name: "Welcome" },

    //Dashboard Routes
    { path: "/dashboard", redirect: '/admin/dashboard', name: "Index",  component: Index,
        children: [
            { path: '/admin/dashboard', name:'Dashboard', component: Dashboard},
            { path: '/admin/events', name:'EventsPage', component: EventPage},
            { path: '/admin/shop', name:'Shop', component: Shop },
            { path: '/admin/customers', name:'Customers', component: Customer },
            { path: '/admin/reviews', name:'Reviews', component: Review },
            { path: '/admin/promotions', name:'Promotions', component: Promotion },
            { path: '/admin/coupons', name:'Coupons', component: Coupon },
            { path: '/admin/giftcards', name:'GiftCards', component: GiftCard },
            { path: '/admin/sms', name:'SMS', component: Sms },
            { path: '/admin/payments', name:'Payments', component: Payment},
            { path: '/admin/reports', name:'Reports', component: Report },
            { path: '/admin/help', name:'help', component: Help },
            { path: '/admin/documents', name:'documents', component: Document},
            { path: '/admin/subscription', name:'Subscription', component: Subscription },
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount("#app");
