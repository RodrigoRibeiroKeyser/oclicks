<template>

  <Head title="Lista de usuários"></Head>


  <v-tabs v-model="tab" fixed-tabs>
    <v-tab value="CargoRH">Cargo RH</v-tab>
    <v-tab value="Colaboradores">Colaboradores</v-tab>
    <v-tab value="Supervisores">Supervisores</v-tab>
    <v-tab value="Coordenadores">Coordenadores</v-tab>
    <v-tab value="Gerentes">Gerentes</v-tab>
    <v-tab value="Clientes">Clientes</v-tab>

  </v-tabs>
  <v-window v-model="tab">
    <v-window-item value="CargoRH">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
  <v-window v-model="tab">
    <v-window-item value="Colaboradores">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
  <v-window v-model="tab">
    <v-window-item value="Supervisores">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
  <v-window v-model="tab">
    <v-window-item value="Coordenadores">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
  <v-window v-model="tab">
    <v-window-item value="Gerentes">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
  <v-window v-model="tab">
    <v-window-item value="Clientes">
      <v-card class="mx-auto" variant="flat">
        <v-list lines="two">
          <v-list-item v-for="user in users" :key="user.id" :title="user.name" :subtitle="user.email">
            <template v-slot:prepend>
              <v-avatar color="grey-lighten-1">
                <v-icon color="white">mdi-account</v-icon>
              </v-avatar>
            </template>

            <template v-slot:append>
              <v-btn color="primary" icon="md:edit" variant="text"></v-btn>

            </template>
            <v-divider></v-divider>
          </v-list-item>

        </v-list>
      </v-card>
    </v-window-item>
  </v-window>
</template>


<script>
import layoutDashaboard from '../../Layout/layout-dashboard.vue'

export default {

  layout: layoutDashaboard,
  data(){
    return {
      tab: null
    }
  }
}
</script>
<script setup>
defineProps({
  users: Object,


});



</script>
