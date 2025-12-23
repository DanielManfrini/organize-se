<script setup>
import VHeader from '@/Components/Header/VHeader.vue';
</script>

<template>
    <v-app>
        <v-header />
            <v-main>
                <slot />
            </v-main>
        <v-footer />
    </v-app>
</template>
