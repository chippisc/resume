<template>
    <main-content>
        <heading>
            <template #category>Lebenslauf - </template>
            Skills
        </heading>

        <ul class="space-y-2">
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                <span class="text-sky-300 font-bold">Teamfähig</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                <span class="text-sky-300 font-bold">Flexibel</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                <span class="text-sky-300 font-bold"
                    >Interessiert, Neues zu lernen</span
                >
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                TALL Stack (<span class="text-sky-300 font-bold"
                    >Laravel, Livewire, Tailwind CSS, Alpine JS</span
                >)
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                Fullstack Entwicklung mit
                <span class="text-sky-300 font-bold">PHP</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                9 Jahre Erfahrung mit
                <span class="text-sky-300 font-bold">Linux</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                <span class="text-sky-300 font-bold">Docker</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                Grundkenntnisse zu
                <span class="text-sky-300 font-bold">Kubernetes</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                Erfahrung mit
                <span class="text-sky-300 font-bold">RabbitMQ</span>
            </li>
            <li class="flex items-center gap-2">
                <CheckmarkCircleIcon
                    class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                />
                Kleine Einblicke in weitere Frameworks wie
                <span class="text-sky-300 font-bold"
                    >Vue.js, Node.js und Django</span
                >
            </li>
        </ul>

        <br />
        <basic-button>
            <router-link class="py-2 px-4" to="/languages">Weiter</router-link>
        </basic-button>
    </main-content>
</template>

<script>
import CheckmarkCircleIcon from "vue-ionicons/dist/ios-checkmark-circle.vue";

export default {
    components: {
        CheckmarkCircleIcon,
    },
};
</script>
