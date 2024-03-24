<template>
    <main-content>
        <heading>
            <template #category>Lebenslauf - </template>
            Karriere
        </heading>

        <div class="px-4">
            <ol class="relative border-s border-gray-200">
                <TimelineItem>
                    <template #title>
                        Web-Entwickler bei ETES GmbH, Stuttgart
                    </template>
                    <template #time> Oktober 2022 - heute </template>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <CodeIcon
                                class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                            />
                            Neuentwicklung des ETES Kundenlogins zur Verwaltung
                            der Server, Verträge, DNS und vielem mehr.
                        </li>
                        <li class="flex items-center gap-2">
                            <CodeIcon
                                class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                            />
                            Implementation einer Multi-Tenant-fähigen
                            Meldestelle nach Hinweisgeberschutzgesetz (HinSchG).
                        </li>
                        <li class="flex items-center gap-2">
                            <CodeIcon
                                class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                            />
                            Implementieren von CI Pipelines für Gitlab.
                        </li>
                        <li class="flex items-center gap-2">
                            <CodeIcon
                                class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                            />
                            Automatisiertes Testen von (Legacy) Software.
                        </li>
                        <li class="flex items-center gap-2">
                            <CodeIcon
                                class="fill-sky-300 h-5 w-5 flex items-center text-xl"
                            />
                            Neukonfiguration und Aktualisierung der Gitlab
                            Runner
                        </li>
                    </ul>
                </TimelineItem>
                <TimelineItem>
                    <template #title>
                        B. Sc. Informatik an der Dualen Hochschule
                        Baden-Württemberg, Stuttgart
                    </template>
                    <template #time> September 2019 - September 2022 </template>
                    <ul>
                        <li>Abschlussnote: 2,3</li>
                        <li>Bei dualem Partner ETES GmbH</li>
                    </ul>
                </TimelineItem>
                <TimelineItem>
                    <template #title>
                        B. Sc. Informatik and der Universität des Saarlandes
                    </template>
                    <template #time>
                        Oktober 2018 - September Juli 2019
                    </template>
                </TimelineItem>
                <TimelineItem>
                    <template #title>
                        Abitur am Albert-Schweitzer-Gymnasium, Crailsheim
                    </template>
                    <template #time> September 2010 - Juni 2018 </template>
                    <ul>
                        <li>Abschlussnote: 1,9</li>
                    </ul>
                </TimelineItem>
            </ol>
        </div>

        <br />
        <basic-button>
            <router-link class="py-2 px-4" to="/skills">Weiter</router-link>
        </basic-button>
    </main-content>
</template>

<script>
import CodeIcon from "vue-ionicons/dist/ios-code-working.vue";
import TimelineItem from "../components/TimelineItem.vue";

export default {
    components: {
        CodeIcon,
        TimelineItem,
    },
};
</script>
