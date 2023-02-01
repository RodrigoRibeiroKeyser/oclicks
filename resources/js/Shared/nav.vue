<template>
    <v-navigation-drawer color="primary" permanent class="pa-2">
        <v-list>
            <v-list-item class="pa-md-4 mx-lg-auto text-center">
                <v-avatar image="@/assets/avatar/avatar.jpg" size="large" variant="outlined"></v-avatar>
                <v-list-item-title>{{ name }}</v-list-item-title>

                <v-list-item-subtitle>{{ email }}</v-list-item-subtitle>
                <h5 class="font-weight-light">Matricula: 00{{ id }}</h5>

                <!--v chip-->
                <Link as="v-chip" :href="route('ProfileEdit')" >
                <v-chip prepend-icon="md:person" size="small" variant="plain">
                    Meu perfil
                </v-chip>
                </Link>
                <Link as='v-btn' :href="route('logout')" method="post">
                <v-chip prepend-icon="md:logout" size="small" variant="plain">
                    Sair
                </v-chip>
                </Link>


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
</template>
<script>



export default {

    computed: {
        name() {
            return this.$page.props.auth.user.name
        },
        email() {
            return this.$page.props.auth.user.email
        },
        id() {
            return this.$page.props.auth.user.id
        }
    },

    data: () => ({
        items: [

            { text: 'Controle de Ponto', icon: 'md:schedule', link: 'DashboardHome' },
            { text: "Relatório Financeiro", icon: "mdi-currency-usd", link: 'DashboardHome' },
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


    }),
}


</script>