import "./bootstrap";
import { createApp } from "vue";
import router from "./router";
import App from "./App.vue";
import NavBar from "./components/NavBar.vue";
import MainContent from "./components/MainContent.vue";
import BasicButton from "./components/BasicButton.vue";
import Heading from "./components/Heading.vue";

const app = createApp(App);
app.component("NavBar", NavBar);
app.component("MainContent", MainContent);
app.component("BasicButton", BasicButton);
app.component("Heading", Heading);

app.use(router).mount("#app");
