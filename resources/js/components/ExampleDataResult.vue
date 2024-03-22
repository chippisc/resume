<template>
    <span v-text="dataset.full_name"></span>
    <span class="text-sky-300" v-text="dataset.username"></span>
</template>

<script>
export default {
    props: {
        dataset: Object({}),
    },
};
</script>
