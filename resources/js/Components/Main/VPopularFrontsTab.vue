<script setup>
import VMainTabsFilter from './VMainTabFilter.vue';
import VTitle from '@/Components/Typography/VTitle.vue';
import VMainTabScroller from './MainTabScroller/VMainTabScroller.vue';
import axios from 'axios';
import { ref } from 'vue';
import VStatusCard from '../Globals/VStatusCard.vue';

const items = ref([]);
const per_page = ref(5);
const current_page = ref(1);
const last_page = ref(null);
const total = ref(0);

const handleData = async () => {
    const { data } = await axios.get('api/main/popular-fronts', {
        params: {
            per_page: per_page.value,
            page: current_page.value
        }
    })

    items.value.push(...data.data)
    last_page.value = data.last_page;
    total.value = data.total;
};


const handleLoad = async ({ done }) => {

    if (items.value.length >= total.value) {
        done('empty')
        return
    }

    if (last_page.value && current_page.value > last_page.value) {
        done('empty')
        return
    }

    await handleData()

    current_page.value++

    done('ok')
};

</script>

<template>
    <v-sheet class="pa-5">
        <v-container>
            <v-row no-gutters>
                <v-title
                    type="6"
                    title="Encontre Frentes Populares!"
                />
            </v-row>
            <v-row no-gutters>
                <v-main-tabs-filter @click="handleData" />
            </v-row>
            <v-row
                class="center"
                no-gutters
            >
                <v-status-card
                    v-if="Object.keys(items).length <= 0"
                    :title="false"
                    subtitle="Realize uma busca nos filtros acima para começar!"
                />
                <v-main-tab-scroller
                    v-else
                    :items="items"
                    @load="handleLoad"
                />
            </v-row>
        </v-container>
    </v-sheet>
</template>

<style scoped>
.center {
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 400px;
    max-height: 1000px;
}
</style>