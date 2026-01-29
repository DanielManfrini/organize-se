<script setup>
import VMainTabScrollerCard from './Partials/VMainTabScrollerCard.vue';

const props = defineProps({
    items: {
        type: Object,
        default: {}
    }
})
</script>

<template>
    <v-infinite-scroll
        width="100%"
        min-height="350"
        max-height="950"
    >
        <template
            v-for="(item, index) in props.items"
            :key="item"
            @load="handleLoad"
        >
            <v-container fluid="">
                <v-main-tab-scroller-card
                    :logo="item.logo_path"
                    :title="item.display_name"
                    :subtitle="item.description"
                    :site="item.display_website"
                    :email="item.display_email"
                    :phone="item.display_phone"
                    :place="item.display_place"
                />
            </v-container>
        </template>
    </v-infinite-scroll>
</template>
