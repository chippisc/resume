<template>
    <main-content>
        <heading>
            <template #category>Codebeispiele - </template>
            Typeahead Suche
        </heading>

        <p>
            Das Suchfeld gibt eine Kombination aus generierten Nutzernamen sowie
            vollem Namen zurück.
            <br />
            Alle getippten Wörter müssen dabei im gesuchten Eintrag vorhanden
            sein, die Suche wird also genauer, je mehr getipp wird.
        </p>

        <br />

        <div
            class="border border-gray-300 rounded-md py-1.5 relative bg-white text-slate-800"
        >
            <input
                id="search"
                v-model="search"
                placeholder="Tippen, um Daten zu suchen"
                name="search"
                class="border-none w-full focus:ring-0 px-2 focus:outline-none bg-inherit"
            />
            <ul
                v-if="exampleData && exampleData.length"
                class="absolute top-full divide-y divide-gray-300 w-full mt-2 shadow-md rounded-md border border-gray-300 z-50 bg-slate-500 text-white font-bold"
            >
                <li
                    class="py-2 w-full px-2 grid grid-cols-2 gap-6 font-extrabold bg-slate-400"
                >
                    <span>Name</span>
                    <span>Nutzername</span>
                </li>
                <li
                    v-for="dataset in exampleData"
                    :key="dataset.id"
                    class="py-2 w-full px-2 grid grid-cols-2 gap-6"
                >
                    <ExampleDataResult :dataset="dataset" />
                </li>
            </ul>
        </div>
        <div
            v-if="searchError"
            class="text-sm font-bold py-1 text-red-500"
            v-text="searchError"
        ></div>
    </main-content>
</template>

<script>
import debounce from "lodash.debounce";
import ExampleDataResult from "../components/ExampleDataResult.vue";
import axios from "axios";

export default {
    components: {
        ExampleDataResult,
    },
    data() {
        return {
            search: "",
            searchError: "",
            exampleData: null,
        };
    },
    watch: {
        search: debounce(function () {
            this.fetchExampleData();
        }, 100),
    },
    methods: {
        fetchExampleData() {
            if (!this.search) {
                this.exampleData = null;
                this.searchError = null;
                return;
            } else {
                axios
                    .get("/api/example-data/query", {
                        headers: {
                            accept: "application/json",
                        },
                        params: {
                            search: this.search,
                        },
                    })
                    .then((response) => {
                        if (response.status === 200) {
                            this.exampleData = response.data;
                            this.searchError = null;
                        }
                    })
                    .catch((error) => {
                        let status = error.response?.status ?? 500;
                        status === 422
                            ? (this.searchError = error.response.data.message)
                            : (this.searchError =
                                  "Die Anfrage konnte nicht verarbeitet werden, bitte probieren Sie es später erneut.");
                    });
            }
        },
    },
};
</script>
