<template>

    <Head title="Cadastrar planos"></Head>
    <v-container>
        <v-row>
            <v-col>

                <v-form @submit.prevent="submit">
                    <v-text-field id="name" type="text" v-model="form.name" label="Nome do plano"
                        :messages="[form.errors.name]" :class="[form.errors.name ? 'onerror' : '']"
                        @click="form.errors.name = null"></v-text-field>
                    <v-row>
                        <v-col cols="12"><v-sheet>
                                <h3>Formas de registro</h3>
                            </v-sheet></v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="6" >
                            <v-checkbox label="Login e Senha" value="LoginSenha" v-model="form.beneficios"></v-checkbox>
                            <v-checkbox label="QR-Code" value="QRCode" v-model="form.beneficios"></v-checkbox>

                        </v-col>
                        <v-col>
                            <v-checkbox label="Localização com aplicativo" value="GPS" v-model="form.beneficios"></v-checkbox>
                            <v-checkbox label="Registro por foto" value="PhotoReg" v-model="form.beneficios"></v-checkbox>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col>
                            <v-checkbox label="Digital pelo aplicativo" value="Bio" v-model="form.beneficios"></v-checkbox>
                            <v-checkbox label="Reconhecimento facial" value="Facial" v-model="form.beneficios"></v-checkbox>
                        </v-col>
                        <v-col>
                            <v-checkbox label="Pin do google" value="PinGoogle" v-model="form.beneficios"></v-checkbox>
                            <v-checkbox label="Integração com maquina" value="Integration" v-model="form.beneficios"></v-checkbox>
                        </v-col>


                    </v-row>

                    <v-text-field id="NumeroDeIdentificação" label="Número de identificação"
                        type="number" v-model="form.pdv">
                    </v-text-field>

                    <v-radio-group  inline v-model="form.num">
                        <v-radio label="10" value="10" ></v-radio>
                        <v-radio label="15" value="15" ></v-radio>
                        <v-radio label="20" value="20" ></v-radio>
                        <v-radio label="30" value="30" ></v-radio>
                        <v-radio label="50" value="50" ></v-radio>
                        <v-radio label="100" value="100" ></v-radio>
                        <v-radio label="100+" value="100+"></v-radio>
                    </v-radio-group>
                    <Transition>
                    <div v-if="form.num == '100+'" >
                        <v-text-field id="numeroDeColaboradores" label="Número de Colaboradores" v-model="form.m100"
                            type="text" ></v-text-field>
                    </div>
                     </Transition>
                    <v-btn type="submit" :disabled="(form.processing)" :loading="loading">Enviar</v-btn>

                    
                </v-form>
            </v-col>
        </v-row>
    </v-container>

</template>

<script setup>

import { useForm } from '@inertiajs/vue3'
import layoutDashboard from '../../Layout/layout-dashboard.vue';

defineOptions({
    layout: layoutDashboard
})

console.log()

let form = useForm({
    name: '',
    num: '',
    beneficios: [],
    m100: '',
    pdv: '',
   
    
});

let loading = false;

let submit = () => {

    loading = true,
        form.post('create-planos', {

            onError: () => ( loading = false),
            onSuccess: () => ( loading = false)

        })


}



</script>

<style>
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}</style>
