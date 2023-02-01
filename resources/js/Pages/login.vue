<template>

    <Head title="Portal do assinante"></Head>

    <div class="ww-100 bg-cortado">
        <v-main>

            <v-row class=" bg-cortado">
                <v-col class="d-flex justify-center align-center text-center ">
                    <v-col>
                        <v-card width="400" class="mx-auto pa-6" elevation="4" variant="flat">
                            <v-card-title>
                                <h1 class="font-weight-light ma-6 text-primary">Login</h1>
                            </v-card-title>

                            <v-form @submit.prevent="submit">

                                <v-card-text>
                                    <v-text-field variant="outlined" color="primary" v-model="form.login"
                                        label="Usuário" prepend-inner-icon="mdi-account-outline" type="text">
                                    </v-text-field>

                                    <v-text-field v-model="form.password" variant="outlined" color="primary"
                                        label="Senha" prepend-inner-icon="mdi-lock-outline" type="password">

                                    </v-text-field>
                                    <p class="text-right text-caption align-center">
                                        <Link :href="route('register')" class="text-decoration-none ">
                                        Esqueci minha senha
                                        </Link>
                                    </p>
                                </v-card-text>
                                <v-card-actions
                                    class="d-flex justify-space-around align-center flex-sm-row text-uppercase">
                                    <Link as="v-btn" :href="route('register')" type="submit">
                                    <v-btn variant="flat" width="150">
                                        Cadastrar
                                    </v-btn>
                                    </Link>
                                    <v-btn variant="flat" width="150" type="submit" :disabled="(form.processing)"
                                        :loading="loading">Entrar</v-btn>
                                    

                                    <!-- erros-->
                                    <div class="text-center">
                                        <v-snackbar v-model="form.snackbar" variant="elevated" color="error">
                                            <div v-for="(error, i) in form.errors" :key="i">
                                                {{ error }}
                                            </div>


                                            <template v-slot:actions>
                                                <v-btn color="white" variant="text" @click="form.snackbar = false">
                                                    Fechar
                                                </v-btn>
                                            </template>
                                        </v-snackbar>

                                    </div>
                                </v-card-actions>


                            </v-form>



                        </v-card>
                    </v-col>
                </v-col>

            </v-row>



        </v-main>

    </div>
</template>


<script setup>

import { useForm } from '@inertiajs/vue3'

import LayoutHome from '../Layout/layout-home.vue';



defineOptions({
  layout: LayoutHome,
})

let form = useForm({
    login: '',
    password: '',
    snackbar: false,
    errors: { type: Object, default: ({}) },

});

let loading = false;


let submit = () => {
    loading = true,
        form.post('logindo', {
            onError: () => (form.password = '', form.password_confirmation = '', loading = false, form.snackbar = true),
            onSuccess: () => (form.password = '', form.password_confirmation = '', loading = false)
        })
}


</script>
<style>
.collogin {
    background-color: #f2f2f2;
}
</style>
