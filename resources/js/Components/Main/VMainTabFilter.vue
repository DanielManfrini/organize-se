<script setup>
const props = defineProps({
    name: String,
    state: String,
    city: String
})

const handleSearch = () => {
    


}
</script>

<template>
    <v-container fluid>
        <v-row align="center" justify="center">
            <v-col col="12" md="6" lg="3">
                <v-text-field label="Nome" hide-details="auto"/>
            </v-col>
            <v-divider vertical class="d-none d-lg-block"></v-divider>
            <v-col col="12" md="6" lg="3">
                <v-autocomplete label="Estado" hide-details="auto"/>
            </v-col>
            <v-divider vertical class="d-none d-lg-block"></v-divider>
            <v-col col="12" md="6" lg="3">
                <v-autocomplete label="Cidade" hide-details="auto"/>
            </v-col>
            <v-divider vertical class="d-none d-lg-block"></v-divider>
            <v-col col="12" md="6" lg="3">
                <v-btn @click="handleSearch">buscar</v-btn>    
            </v-col>
        </v-row>
    </v-container>
</template>