<template>
    <v-layout>
        <v-app>
            <v-navigation-drawer color="primary" permanent class="pa-2">
                <v-list>
                    <v-list-item class="pa-md-4 mx-lg-auto text-center" >
                        <v-avatar image="../../img/avatar/avatar.jpg" size="large" variant="outlined"></v-avatar>
                        <v-list-item-title>Rodrigo Ribeiro</v-list-item-title>

                        <v-list-item-subtitle>keyser_br@hotmail.com</v-list-item-subtitle>
                        <h5 class="font-weight-light">Matricula: 000001-01</h5>

                        <!--v chip-->

                        <v-chip prepend-icon="md:person" size="small" variant="plain">
                            Meu perfil
                        </v-chip>


                    </v-list-item>
                    <v-divider></v-divider>



                    <Link as="v-btn" v-for="(item, i) in items" :key="i" :value="item" :href="route(item.link)">
                    <v-list-item :prepend-icon="item.icon" rounded="xl" :href="route(item.link)" class="ma">
                        <v-list-item-title v-text="item.text"></v-list-item-title>

                    </v-list-item>
                    </Link>


                    <v-list-group value="users">
                        <template v-slot:activator="{ props }">
                            <v-list-item rounded="xl" v-bind="props" prepend-icon="mdi-account-multiple-outline"
                                title="Usuários"></v-list-item>
                        </template>

                        <Link as="v-btn" v-for="(user, i) in users" :key="i" :value="user" :href="route(user.link)">
                        <v-list-item rounded="xl" :title="user.text" :value="user.text" :href="route(user.link)"
                            class="ma-1"></v-list-item>
                        </Link>

                    </v-list-group>
                    <v-list-group value="plans">
                        <template v-slot:activator="{ props }">
                            <v-list-item rounded="xl" v-bind="props" prepend-icon="mdi-file-document-edit-outline"
                                title="Planos"></v-list-item>
                        </template>

                        <Link as="v-btn" v-for="(plan, i) in plans" :key="i" :value="plan" :href="route(plan.link)">
                        <v-list-item rounded="xl" class="ma-1" :title="plan.text" :value="plan.text"
                            :href="route(plan.link)"></v-list-item>
                        </Link>
                    </v-list-group>



                </v-list>


            </v-navigation-drawer>

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
import { Head } from '@inertiajs/inertia-vue3';
import toggleThemeVue from '../Shared/toggle-theme.vue';


</script>
<script>

export default {
    props: {
        titulo: Array
    },

    data() {
        return {

            profile: null
        }
    },
    data: () => ({
        items: [
            { text: 'Controle de Ponto', icon: 'md:schedule', link: 'DashboardHome' },
            { text: "Relatório Financeiro", icon: "mdi-currency-usd", link:'DashboardHome' },
            { text: 'Equipes', icon: 'md:groups', link: 'DashboardHome' },
        ],
        users: [
            { text: 'Cadastrar', link: 'UserRegisterShow' },
            { text: 'Gerenciar', link: 'ListUsers' },
        ],
        plans: [
            { text: 'Cadastrar', link: 'planosRegisterShow' },
            { text: 'Gerenciar', link: 'DashboardHome' },
        ],
        notifys: [
        { title: 'XXX, te mandou uma menssagem', icon: 'mdi-clock-outline' },
        { title: 'Sua Solicitação n XXX foi aprovada', icon: 'mdi-profile-outline' },
        
      ],
      
    }),

}


</script>
