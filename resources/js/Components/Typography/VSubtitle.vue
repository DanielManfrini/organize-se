<script setup>
const props = defineProps({
    subtitle: String,
    type: {
        type: String,
        default: '1'
    }
});
</script>

<template>
    <span :class="`text-subtitle-${type}`">{{ props.subtitle }}</span>
</template>