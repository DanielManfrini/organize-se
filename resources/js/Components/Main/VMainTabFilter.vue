<script setup>
const props = defineProps({
    name: String,
    state: String,
    city: String
})
</script>

<template>
    <v-container fluid>
        <v-row
            align="center"
            justify="center"
        >
            <v-col
                col="12"
                md="6"
                lg="3"
            >
                <v-text-field
                    v-model="props.name"
                    label="Nome"
                    hide-details="auto"
                />
            </v-col>
            <v-col
                col="12"
                md="6"
                lg="3"
            >
                <v-autocomplete
                    v-model="props.state"
                    label="Estado"
                    hide-details="auto"
                />
            </v-col>
            <v-col
                col="12"
                md="6"
                lg="3"
            >
                <v-autocomplete
                    v-model="props.city"
                    label="Cidade"
                    hide-details="auto"
                />
            </v-col>
            <v-col
                col="12"
                md="6"
                lg="3"
            >
                <v-row
                    justify="end"
                    align="center"
                >
                    <v-btn prepend-icon="mdi-magnify">buscar</v-btn>
                </v-row>
            </v-col>
        </v-row>
    </v-container>
</template>