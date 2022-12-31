<template>

    <Head title="Portal do assinante"></Head>

    <div class="ww-100 bg-cortado">
        <v-app>

            <v-row class=" bg-cortado">
                <v-col class="d-flex justify-center align-center text-center ">
                    <v-col>
                        <v-card width="400" class="mx-auto pa-6" elevation="4" variant="flat">
                            <v-card-title>
                                <h1 class="font-weight-light ma-6 " style="color: #6750A4; ">Login</h1>
                            </v-card-title>

                            <v-form @submit.prevent="form.post('login/login')">

                                <v-card-text>
                                    <v-text-field variant="outlined" color="primary" v-model="form.login"
                                        label="Usuário" prepend-inner-icon="mdi-account-outline" type="text">
                                    </v-text-field>

                                    <v-text-field v-model="form.password" variant="outlined" color="primary"
                                        label="Senha" prepend-inner-icon="mdi-lock-outline" type="password">

                                    </v-text-field>
                                    <p class="text-right text-caption align-center">
                                        <Link herf="#" class="text-decoration-none ">
                                        Esqueci minha senha
                                        </Link>
                                    </p>
                                </v-card-text>
                                <v-card-actions
                                    class="d-flex justify-space-around align-center flex-sm-row ">
                                    <v-btn variant="flat" width="150" type="submit"
                                        :disabled="form.processing">Entrar</v-btn>
                                    <v-btn variant="flat" width="150">Cadastrar</v-btn>
                                </v-card-actions>


                            </v-form>



                        </v-card>
                    </v-col>
                </v-col>

            </v-row>



        </v-app>

    </div>
</template>

<script>
import LayoutHomeVue from '../Layout/layout-home.vue'
import { useForm } from '@inertiajs/inertia-vue3'


export default {
    layout: LayoutHomeVue,

    setup() {
        const form = useForm({
            login: null,
            password: null

        })
        return {form}
    }
}


</script>
<style>
.collogin {
    background-color: #f2f2f2;
}
</style>
