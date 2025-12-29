<script setup>
import VMainTabsFilter from './VMainTabFilter.vue';
import VTitle from '@/Components/Typography/VTitle.vue';
</script>

<template>
    <v-sheet class="pa-5">
        <v-container>
            <v-row no-gutters>
                <v-title type="6" title="Encontre partidos que combinem com você!" />
            </v-row>
            <v-row no-gutters>
                <v-main-tabs-filter /> 
            </v-row>
        </v-container>
    </v-sheet>
</template>