<script setup>
import logo from '@images/Logos/main_logo.svg';
</script>

<template>
    <v-app-bar :elevation="2">
        <template v-slot:prepend>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
        </template>

        <v-app-bar-title>
            <v-img :src="logo" height="50"></v-img>
        </v-app-bar-title>

        <v-btn>teste</v-btn>
    </v-app-bar>
</template>