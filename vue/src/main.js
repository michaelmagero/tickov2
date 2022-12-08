import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

// views
import App from './App.vue'
import Home from './views/Home.vue'
// import Dashboard from '../src/views/dashboard/Dashboard.vue'

// import Login from "./views/landing/Login.vue";
// import Register from "./views/landing/Register.vue";
// import PasswordReset from "./views/landing/PasswordReset.vue";

// styles
// import "@fortawesome/fontawesome-free/css/all.min.css";
import './index.css'


// routes
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
    routes,
});

createApp(App).use(router).mount("#app");
