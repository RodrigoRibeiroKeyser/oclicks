<template>
    <v-layout>
        <v-app>

            <!-- importando Navbar-->
            <Nav />

            <!-- inicio do topbar-->
            <v-app-bar elevation="3" location="top">

                <v-app-bar-title>
                    <h3 class="font-weight-light">{{ titulo }}</h3>





                </v-app-bar-title>

                <!--notificações-->
                
                <v-menu >
                    <template v-slot:activator="{ props }">
                        <v-btn variant="plain" icon class="text-none" stacked v-bind="props">
                            <v-badge content="2" color="error">
                                <v-icon>mdi-bell-outline</v-icon>
                            </v-badge>
                        </v-btn>
                    </template>
                    <v-list>
                        <Link as='v-btn' :href="route('DashboardHome')">
                        <v-list-item v-for="(notify, index) in notifys" :key="index" :href="route('DashboardHome')">
                            <v-list-item-title >{{ notify.title }}</v-list-item-title>
                            
                        </v-list-item>
                        </Link>
                        
                    </v-list>
                </v-menu>



            </v-app-bar>





            <v-main>
                <slot />
            </v-main>
        </v-app>

    </v-layout>


</template>
<script setup>

import  Nav  from '../Shared/nav.vue'

defineProps({
    titulo: String
})
const profile = ref(null)
const notifys = [{ title: 'XXX, te mandou uma menssagem', icon: 'mdi-clock-outline' },
        { title: 'Sua Solicitação n XXX foi aprovada', icon: 'mdi-profile-outline' },]

</script>


