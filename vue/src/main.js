import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

import App from './App.vue'
import Welcome from "./views/Welcome.vue"
import Login from "./views/auth/Login.vue"
import Register from "./views/auth/Register.vue"
import PasswordReset from "./views/auth/PasswordReset.vue"
import Home from "./views/Home.vue"
import Index from "./views/dashboard/Index.vue"
import Dashboard from "./views/dashboard/Dashboard.vue"
import Event from "./views/dashboard/Event.vue"
import Shop from "./views/dashboard/Shop.vue"
import Customer from "./views/dashboard/Customer.vue"
import Review from "./views/dashboard/Review.vue"
import Promotion from "./views/dashboard/Promotion.vue"
import Coupon from "./views/dashboard/Coupon.vue"
import GiftCard from "./views/dashboard/GiftCard.vue"
import Sms from "./views/dashboard/Sms.vue"
import Payment from "./views/dashboard/Payment.vue"
import Report from "./views/dashboard/Report.vue"
import Help from "./views/dashboard/Help.vue"
import Document from "./views/dashboard/Document.vue"
import Subscription from "./views/dashboard/Subscription.vue"
import './index.css'
import 'boxicons'


// routes
const routes = [
    { path: "/", component: Welcome, name: "Welcome" },
    { path: "/home", component: Home, name: "Home" },
    { path: "/auth/login", component: Login, name: "Login" },
    { path: "/auth/register", component: Register, name: "Register" },
    { path: "/auth/reset-password", component: PasswordReset, name: "PasswordReset" },

    //Dashboard Routes
    { path: "/dashboard", redirect: '/main-dashboard', name: "Index",  component: Index,
        children: [
            { path: '/main-dashboard', name:'Dashboard', component: Dashboard},
            { path: '/events', name:'Events', component: Event},
            { path: '/shop', name:'Shop', component: Shop },
            { path: '/customers', name:'Customers', component: Customer },
            { path: '/reviews', name:'Reviews', component: Review },
            { path: '/promotions', name:'Promotions', component: Promotion },
            { path: '/coupons', name:'Coupons', component: Coupon },
            { path: '/giftCards', name:'GiftCards', component: GiftCard },
            { path: '/sMS', name:'SMS', component: Sms },
            { path: '/payments', name:'Payments', component: Payment},
            { path: '/reports', name:'Reports', component: Report },
            { path: '/help', name:'help', component: Help },
            { path: '/documents', name:'documents', component: Document},
            { path: '/subscription', name:'Subscription', component: Subscription },
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount("#app");
