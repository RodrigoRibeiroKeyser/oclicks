<template>

  <Head title="Painel de Controle"></Head>



  <v-tabs v-model="tab" fixed-tabs>
    <v-tab value="one">Calendário</v-tab>
    <v-tab value="two">Planejamento</v-tab>

  </v-tabs>

  <v-card-text>
    <v-window v-model="tab">
      <v-window-item value="one">


        <Calendar is-expanded show-iso-weeknumbers="left-inside" :columns="$screens({ default: 1, lg: 2 })"
          :rows="$screens({ default: 1, lg: 2 })" :is-expanded="$screens({ default: true, lg: false })" />

      </v-window-item>
      <v-window-item value="two">

        <v-timeline side="end">
          <v-timeline-item v-for="item in items" :key="item.id" :dot-color="item.color" size="small">

            <v-alert :value="true" :color="item.color">
              {{ item.text }}
            </v-alert>
          </v-timeline-item>
        </v-timeline>
      </v-window-item>
    </v-window>
  </v-card-text>


</template>

<script setup>
import layoutDashboard from '../../Layout/layout-dashboard.vue';

defineOptions({
    layout: layoutDashboard
})
const items = ref([
        {
          id: 1,
          color: 'info',
          icon: 'mdi-information',
          text: "Ultima marcação as 08:00"
        },
        {
          id: 2,
          color: 'error',
          icon: 'mdi-alert-circle',
          text: "proxima marcação as 12:00"
        },
        {
          id: 3,
          color: 'success',
          icon: 'mdi-alert-circle',
          text: "o final de seu epediente é as 16:00 "
        }])
const tab = ref(null)  
</script>
