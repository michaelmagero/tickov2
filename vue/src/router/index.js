import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    { path: "/", component: Home, name: "Home" },
    // { path: "/auth/login", component: Login, name: "Login" },
    // { path: "/auth/login", component: Login, name: "Login" },
    // { path: "/auth/login", component: Login, name: "Login" },
    // { path: "/auth/register", component: Register, name: "Register" },
    // { path: "/auth/reset-password", component: PasswordReset, name: "PasswordReset" },
];


const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
