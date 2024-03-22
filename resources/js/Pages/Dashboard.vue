<template>
    <main-content>
        <heading> Übersicht </heading>
        <p>
            Diese Webseite ist ein kleines Projekt, um interessierten Firmen
            eine Möglichkeit zu geben, einen Einblick in meinen Coding Style zu
            geben.
        </p>
        <p>
            Neben meinem Lebenslauf sind daher kleine Coding-Beispiele
            hinterlegt.
        </p>
        <div class="flex space-x-1 items-center py-2">
            <p>
                Das gesamte Projekt kann auf
                <a href="#" class="text-sky-300 font-bold">git</a> eingesehen
                werden
            </p>
        </div>

        <br />
        <basic-button>
            <router-link class="py-2 px-4" to="/profile">Weiter</router-link>
        </basic-button>
    </main-content>
</template>
