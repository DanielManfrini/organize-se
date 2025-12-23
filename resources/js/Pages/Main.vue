<script setup>
import VPageSubtitle from '@/Components/Typography/VPageSubtitle.vue';
import VPageTitle from '@/Components/Typography/VPageTitle.vue';


</script>

<template>
  <v-container height="100%">
    <v-row>
      <v-col>
        <v-sheet elevation="1" rounded>
          <v-container height="100%">
            <v-row no-gutters>
              <v-page-title type="4" title="Seja bem vindo!" />
            </v-row>
            <v-row no-gutters>
              <v-page-subtitle subtitle="Teste subtítulo" />
            </v-row>
            <v-row no-gutters>
              
            </v-row>
          </v-container>
        </v-sheet>
      </v-col>
    </v-row>
  </v-container>
</template>