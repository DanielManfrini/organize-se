<script setup>
const props = defineProps({
    logo: String,
    title: String,
    subtitle: String,
    site: String,
    email: String,
    phone: String,
    place: String,
})
</script>

<template>
    <v-card>
        <v-container fluid>
            <v-row>
                <v-col
                    cols="auto"
                    justify="center"
                    align="center"
                >
                    <v-img
                        v-if="props.logo"
                        :src="`/storage/${props.logo}`"
                        :width="136"
                        alt="Logo da frente"
                    />
                </v-col>
                <v-col>
                    <v-row
                        no-gutters
                        align="center"
                    >
                        <v-card-title>
                            {{ props.title }}
                        </v-card-title>
                    </v-row>
                    <v-row
                        no-gutters
                        align="center"
                    >
                        <v-card-subtitle>
                            {{ props.subtitle }}
                        </v-card-subtitle>
                    </v-row>
                    <v-row
                        no-gutters
                        align="center"
                    >
                        <v-card-text>
                            <v-row>
                                <v-col>
                                    <v-row no-gutters class="gap-2">
                                        <v-icon>mdi-web</v-icon>
                                        <a :href="props.site">{{ props.site }}</a>
                                    </v-row>
                                </v-col>
                                <v-col>
                                    <v-row no-gutters class="gap-2">
                                        <v-icon>mdi-email-outline</v-icon>
                                        <span>{{ props.email }}</span>
                                    </v-row>
                                </v-col>
                                <v-col>
                                    <v-row no-gutters class="gap-2">
                                        <v-icon>mdi-phone-outline</v-icon>
                                        <span>{{ props.phone }}</span>
                                    </v-row>
                                </v-col>
                                <v-col>
                                    <v-row no-gutters class="gap-2">
                                        <v-icon>mdi-map-marker-outline</v-icon>
                                        <span>{{ props.place }}</span>
                                    </v-row>
                                </v-col>
                            </v-row>
                        </v-card-text>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>