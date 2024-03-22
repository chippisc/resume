<template>
    <div>
        <div
            class="flex gap-6 w-full bg-blue-600 text-white justify-between font-bold"
        >
            <div class="flex gap-6">
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
            <div class="flex gap-6">
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
    </div>
</template>
