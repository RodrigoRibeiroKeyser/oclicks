<template>

    <Head title="Lista de usuários"></Head>

    <v-card
    class="mx-auto"
    variant="flat"
  >
    
    <v-list lines="two">
      

      <v-list-item
        v-for="user in users"
        :key="user.id"
        :title="user.name"
        :subtitle="user.email"
      >
        <template v-slot:prepend>
          <v-avatar color="grey-lighten-1">
            <v-icon color="white">mdi-account</v-icon>
          </v-avatar>
        </template>
        
        <template v-slot:append>
          <v-btn
            color="primary"
            icon="md:edit"
            variant="text"
          ></v-btn>
          
        </template>
        <v-divider ></v-divider>
      </v-list-item>   
      
    </v-list>
  </v-card>

</template>


<script>
import layoutDashaboard from '../../Layout/layout-dashboard.vue'

export default {

    layout: layoutDashaboard

}
</script>
<script setup>
defineProps({
    users: Object,


})

</script>