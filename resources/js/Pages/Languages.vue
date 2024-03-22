<template>
    <main-content>
        <heading>
            <template #category>Lebenslauf - </template>
            Sprachen
        </heading>

        <ul class="space-y-2 pl-1">
            <li class="grid grid-cols-3 md:grid-cols-11 gap-2 items-center">
                <span class="font-bold">Deutsch:</span>
                <span
                    class="bg-green-600 py-1 px-2 rounded-md w-48 md:w-64 block h-8 shadow-md"
                >
                    Muttersprache
                </span>
            </li>
            <li class="grid grid-cols-3 md:grid-cols-11 gap-2 items-center">
                <span class="font-bold">Englisch:</span>
                <span
                    class="relative w-48 md:w-64 py-1 block rounded-md bg-slate-800 h-8 shadow-md"
                >
                    <span
                        class="bg-green-600 w-2/3 h-full top-0 rounded-md block absolute flex items-center"
                    >
                        <span class="px-2 text-center"> Flüssig </span>
                    </span>
                </span>
            </li>
            <li class="grid grid-cols-3 md:grid-cols-11 gap-2 items-center">
                <span class="font-bold">Japanisch:</span>
                <span
                    class="relative w-48 md:w-64 py-1 block rounded-md bg-slate-800 h-8 shadow-md"
                >
                    <span
                        class="bg-green-600 w-1/3 h-full top-0 rounded-md block absolute flex items-center"
                    >
                        <span
                            class="px-2 text-center overflow-visible whitespace-nowrap"
                        >
                            Simple Gespräche
                        </span>
                    </span>
                </span>
            </li>
        </ul>

        <br />
        <basic-button>
            <router-link class="py-2 px-4" to="/typeahead"
                >Zum ersten Codebeispiel</router-link
            >
        </basic-button>
    </main-content>
</template>
