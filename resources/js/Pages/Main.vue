<script setup>
import VSubtitle from '@/Components/Typography/VSubtitle.vue';
import VTitle from '@/Components/Typography/VTitle.vue';
import VMainTabs from '@/Components/Main/VMainTabs.vue';

</script>

<template>
  <v-container height="100%">
    <v-row>
      <v-col>
        <v-sheet elevation="1" rounded>
          <v-container height="100%">
            <v-row no-gutters>
              <v-title type="4" title="Seja bem vindo!" />
            </v-row>
            <v-row no-gutters>
              <v-subtitle subtitle="Teste subtítulo" />
            </v-row>
            <v-row>
              <v-col cols="12">
                <v-main-tabs />
              </v-col>
            </v-row>
          </v-container>
        </v-sheet>
      </v-col>
    </v-row>
  </v-container>
</template>