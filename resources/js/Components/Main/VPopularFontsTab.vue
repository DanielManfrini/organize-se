<script setup>
import VMainTabsFilter from './VMainTabFilter.vue';
import VTitle from '@/Components/Typography/VTitle.vue';
import VMainTabScroller from './VMainTabScroller.vue';

const data = ref({})
</script>

<template>
    <v-sheet class="pa-5">
        <v-container>
            <v-row no-gutters>
                <v-title type="6" title="Encontre Frentes Populares!" />
            </v-row>
            <v-row no-gutters>
                <v-main-tabs-filter :data="data"/> 
            </v-row>
            <v-row no-gutters>
                <v-main-tab-scroller :data="data"/> 
            </v-row>
        </v-container>
    </v-sheet>
</template>