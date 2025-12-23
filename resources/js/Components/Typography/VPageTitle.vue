<script setup>
const props = defineProps({
    title: String,
    type: {
        type: String,
        default: '2'
    }
});
</script>

<template>
    <span :class="`text-h${type}`">{{ props.title }}</span>
</template>