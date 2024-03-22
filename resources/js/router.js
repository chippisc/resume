import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/Dashboard.vue"),
    },
    {
        path: "/profile",
        component: () => import("./Pages/Profile.vue"),
    },
    {
        path: "/career",
        component: () => import("./Pages/Career.vue"),
    },
    {
        path: "/skills",
        component: () => import("./Pages/Skills.vue"),
    },
    {
        path: "/languages",
        component: () => import("./Pages/Languages.vue"),
    },
    {
        path: "/typeahead",
        component: () => import("./Pages/Typeahead.vue"),
    },
    {
        path: "/infinite-scroll",
        component: () => import("./Pages/InfiniteScroll.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
