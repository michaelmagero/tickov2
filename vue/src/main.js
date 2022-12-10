import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

import App from './App.vue'
import Welcome from "./views/Welcome.vue"
import Login from "./views/auth/Login.vue"
import Register from "./views/auth/Register.vue"
import PasswordReset from "./views/auth/PasswordReset.vue"
import './index.css'


// routes
const routes = [
    { path: "/", component: Welcome, name: "Welcome" },
    // { path: "/home", component: Home, name: "Home" },
    { path: "/auth/login", component: Login, name: "Login" },
    { path: "/auth/register", component: Register, name: "Register" },
    { path: "/auth/reset-password", component: PasswordReset, name: "PasswordReset" },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount("#app");
