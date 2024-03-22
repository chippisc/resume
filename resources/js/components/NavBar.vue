<template>
    <div>
        <div
            class="hidden md:grid grid-cols-1 md:grid-cols-2 gap-6 w-full bg-blue-600 text-white justify-between font-bold px-2"
        >
            <div class="flex gap-2 items-center">
                <router-link to="/">
                    <HomeIcon class="fill-white" h="25px" w="25px" />
                </router-link>
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/profile"
                    >Profil</router-link
                >
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/career"
                    >Karriere</router-link
                >
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/skills"
                    >Skills</router-link
                >
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/languages"
                    >Sprachen</router-link
                >
            </div>
            <div class="flex gap-2 md:justify-self-end">
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/typeahead"
                    >Beispiel: Typeahead Suche</router-link
                >
                <router-link
                    active-class="cursor-default underline"
                    class="p-3"
                    to="/infinite-scroll"
                    >Beispiel: Infinite Scrolling</router-link
                >
            </div>
        </div>
        <div class="grid md:hidden">
            <nav class="bg-blue-600">
                <div
                    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
                >
                    <router-link to="/">
                        <HomeIcon class="fill-white" h="25px" w="25px" />
                    </router-link>
                    <button
                        type="button"
                        class="justify-self-end inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-hamburger"
                        aria-expanded="false"
                        @click="showMenu = !showMenu"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 17 14"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"
                            />
                        </svg>
                    </button>
                    <div v-if="showMenu" class="w-full">
                        <ul
                            class="flex flex-col font-medium mt-4 rounded-lg text-white"
                            @click="showMenu = false"
                        >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/profile"
                                >Profil</router-link
                            >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/career"
                                >Karriere</router-link
                            >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/skills"
                                >Skills</router-link
                            >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/languages"
                                >Sprachen</router-link
                            >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/typeahead"
                                >Beispiel: Typeahead Suche</router-link
                            >
                            <router-link
                                active-class="cursor-default underline bg-sky-300 text-black"
                                class="rounded-md py-2 px-3 hover:bg-blue-500"
                                to="/infinite-scroll"
                                >Beispiel: Infinite Scrolling</router-link
                            >
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
import HomeIcon from "vue-ionicons/dist/ios-home.vue";

export default {
    components: {
        HomeIcon,
    },
    data() {
        return {
            showMenu: false,
        };
    },
};
</script>
