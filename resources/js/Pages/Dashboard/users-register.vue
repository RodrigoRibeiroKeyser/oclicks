<template>

    <Head title="Cadastrar usuários"></Head>
    <v-container>
        <v-row>
            <v-col>

                <v-form @submit.prevent="submit">
                    <v-text-field id="name" type="text" v-model="form.name" label="Nome" color="primary"  :messages="[form.errors.name]"
                        :class="[form.errors.name ? 'onerror' : '']" @click="form.errors.name = null"></v-text-field>


                    <v-text-field id="email" type="text" v-model="form.email" color="primary" label="E-mail"
                        :messages="[form.errors.email]" :class="[form.errors.email ? 'onerror' : '']"
                        @click="form.errors.email = null"></v-text-field>


                    <v-text-field id="password" type="password" v-model="form.password" color="primary" label="Senha"
                        :messages="[form.errors.password]" :class="[form.errors.password ? 'onerror' : '']"
                        @click="form.errors.password = null"
                        autocomplete
                        ></v-text-field>

                    <v-text-field id="password_confirmation" type="password" color="primary" v-model="form.password_confirmation"
                        label="Confirme sua senha" :messages="[form.errors.password_confirmation]"
                        :class="[form.errors.password ? 'onerror' : '']"
                        @click="form.errors.password_confirmation = null"
                        autocomplete
                        ></v-text-field>
                    <v-btn type="submit" :disabled="(form.processing)" :loading="loading">Enviar</v-btn>


                </v-form>
            </v-col>
        </v-row>
    </v-container>



</template>


<script setup>

import { useForm } from '@inertiajs/inertia-vue3';



let form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',

    errors: { type: Object, default: ({}) }
})

let loading = false;

let submit = () => {

    loading = true,
        form.post('create-user', {

            onError: () => (form.password = '',form.password_confirmation = '', loading = false),
            onSuccess: () => (form.password = '', form.password_confirmation = '', loading = false)

        })


}



</script>
<script>
import layoutDashaboard from '../../Layout/layout-dashboard.vue'

export default {

    layout: layoutDashaboard

}
</script>
<style>
.v-messages__message {
    color: red
}

.onerror {
    color: red !important
}
</style>


