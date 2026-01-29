<script setup>
import VPartiesTab from './VPartiesTab.vue';
import { ref } from 'vue';
import VPopularFontsTab from './VPopularFrontsTab.vue';

const tab = ref('one');
</script>

<template>
    <v-tabs v-model="tab" color="primary">
        <!-- <v-tab :value="1">Partidos</v-tab> -->
        <v-tab :value="2">Frentes</v-tab>
        <v-tab :value="3">Sindicatos</v-tab>
    </v-tabs>

    <v-divider></v-divider>

    <v-tabs-window v-model="tab">
        <v-tabs-window-item :value="1">
            <v-parties-tab />
        </v-tabs-window-item>
        <v-tabs-window-item :value="2">
            <v-popular-fonts-tab />
        </v-tabs-window-item>
        <v-tabs-window-item :value="3">
        </v-tabs-window-item>
    </v-tabs-window>
</template>