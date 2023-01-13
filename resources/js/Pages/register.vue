<template>
    <v-main class="bg-cortado d-flex justify-center align-center text-center">

        <v-card width="500" class="mx-auto mt-5 pa-5 mb-5" elevation="5">
            <v-form autocomplete=“off” @submit.prevent="submit">
                <v-card-title>
                    <h1 class="font-weight-light ma-6 text-primary">Cadastrar</h1>
                </v-card-title>


                <v-text-field type="text" label="Nome da empresa" v-model="form.name" variant="outlined"
                    :messages="[form.errors.name]" :class="[form.errors.name ? 'onerror' : '']"
                    @focus="form.errors.name = null"></v-text-field>
                <v-text-field type="text" label="Login" v-model="form.login" variant="outlined"
                    :messages="[form.errors.login]" :class="[form.errors.login ? 'onerror' : '']"
                    @focus="form.errors.login = null"></v-text-field>
                <v-text-field type="email" label="Email" v-model="form.email" variant="outlined"
                    :messages="[form.errors.email]" :class="[form.errors.email ? 'onerror' : '']"
                    @focus="form.errors.email = null"></v-text-field>
                <v-text-field id="password" v-model="form.password" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                    :type="show ? 'text' : 'password'" label="Senha" variant="outlined" @click:append="show = !show"
                    :messages="[form.errors.password]" :class="[form.errors.password ? 'onerror' : '']"
                    @focus="form.errors.password = null"></v-text-field>
                <v-text-field id="password_confirmation" v-model="form.password_confirmation"
                    :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" :type="show ? 'text' : 'password'"
                    label="Confirmação de Senha" variant="outlined" :messages="[form.errors.password_confirmation]"
                    :class="[form.errors.password ? 'onerror' : '']"
                    @focus="form.errors.password_confirmation = null"></v-text-field>

                <v-select label="Plano" variant="outlined" v-model="form.plano"
                    :items="['Básico', 'Essencial', 'Especial', 'Plus', 'Profissional', 'Customizado']"
                    :messages="[form.errors.plano]" :class="[form.errors.plano ? 'onerror' : '']"
                    @focus="form.errors.plano = null">


                </v-select>
                <v-card-actions class="d-flex justify-space-around align-center flex-sm-row ">
                    <v-btn variant="flat" width="150" type="submit" :disabled="(form.processing)"
                        :loading="loading">Enviar</v-btn>
                    <Link as="v-btn" :href="route('login')">
                    <v-btn variant="flat" width="150">
                        Voltar
                    </v-btn>
                    </Link>

                </v-card-actions>
                <div class="d-flex justify-space-around align-center flex-sm-row text-uppercase text-primary">

                </div>
            </v-form>
            <!-- erros-->

        </v-card>

    </v-main>
</template>

<script>
import layoutHomeVue from '../Layout/layout-home.vue';

export default {
    layout: layoutHomeVue,

    data() {
        return {
            show: false,

        }
    }
}

</script>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

let form = useForm({
    name: '',
    email: '',
    login: '',
    password: '',
    tipo: '1',
    created_by: 'web',
    plano: null,
    password_confirmation: '',
    errors: { type: Object, default: ({}) }
})

let loading = false;

let submit = () => {

    loading = true,
        form.post('store', {

            onError: () => (form.password = '', form.password_confirmation = '', loading = false),
            onSuccess: () => (form.password = '', form.password_confirmation = '', loading = false)

        })


}



</script>