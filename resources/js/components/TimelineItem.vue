<template>
    <li class="mb-10 ms-6">
        <span
            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-slate-700 bg-blue-600"
        >
            <PaperIcon />
        </span>
        <h3 class="flex items-center mb-1 text-lg font-semibold text-white">
            <slot name="title"></slot>
        </h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
            <slot name="time"></slot>
        </time>
        <p class="mb-4 text-base font-normal text-gray-300">
            <slot></slot>
        </p>
    </li>
</template>

<script>
import PaperIcon from "vue-ionicons/dist/ios-paper.vue";

export default {
    components: {
        PaperIcon,
    },
};
</script>
