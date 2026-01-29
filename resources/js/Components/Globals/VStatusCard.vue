<script setup>
import { computed } from 'vue'

const props = defineProps({
    type: {
        type: String,
        default: 'info',
        validator: (v) => ['alert', 'error', 'success', 'info'].includes(v),
    },
    icon: {
        type: [String, Boolean],
        default: null,
    },
    title: {
        type: [String, Boolean],
        default: null,
    },
    subtitle: {
        type: [String, Boolean],
        default: null,
    },
    color: {
        type: String,
        default: null,
    },
})

const STATES = {
    alert: {
        icon: 'mdi-alert-outline',
        title: 'Alerta',
        subtitle: 'Alerta',
        color: 'warning',
    },
    error: {
        icon: 'mdi-close-octagon-outline',
        title: 'Erro',
        subtitle: 'Erro',
        color: 'error',
    },
    success: {
        icon: 'mdi-check',
        title: 'Sucesso',
        subtitle: 'Sucesso',
        color: 'success',
    },
    info: {
        icon: 'mdi-information-outline',
        title: 'Informação',
        subtitle: 'Informação',
        color: 'primary',
    },
}

const state = computed(() => STATES[props.type])

const resolvedIcon = computed(() =>
    props.icon === false ? undefined : props.icon ?? state.value.icon
)

const resolvedTitle = computed(() =>
    props.title === false ? undefined : props.title ?? state.value.title
)

const resolvedSubtitle = computed(() =>
    props.subtitle === false ? undefined : props.subtitle ?? state.value.subtitle
)

const resolvedColor = computed(() =>
    props.color ?? state.value.color
)
</script>

<template>
    <v-card
        :class="['status-card', { 'no-title': !resolvedTitle }]"
        :prepend-icon="resolvedIcon"
        :title="resolvedTitle"
        :subtitle="resolvedSubtitle"
        :color="resolvedColor"
        variant="tonal"
    />
</template>

<style>
.status-card.no-title .v-card-item .v-card-item__content .v-card-subtitle {
    padding: 0;
}
</style>
