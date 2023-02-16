<template>

    <Head title="Cadastrar usuários"></Head>
    <v-container>
        <v-form autocomplete=“off” @submit.prevent="submit">
            <span>{{ currentTitle }}</span>
            <v-card elevation="0">

                <v-window v-model="step">
                    <v-window-item :value="1">
                        <v-container>
                            <v-row no-gutters>
                                <v-col>

                                    <v-sheet class="d-flex">
                                        <v-avatar color="surface-variant" size="large" class="mt-2 mr-5"></v-avatar>
                                        <v-file-input variant="outlined" accept="image/png, image/jpeg, image/bmp"
                                             prepend-icon="mdi-camera-outline"
                                            label="Avatar (Opcional)"></v-file-input>
                                    </v-sheet>
                                    <v-text-field variant="outlined" prepend-icon="md:login" type="text"
                                        v-model="form.login" label="login" color="primary"
                                        :messages="[form.errors.login]" :class="[form.errors.login ? 'onerror' : '']"
                                        @click="form.errors.login = null" autocomplete="off"></v-text-field>

                                    <v-row>
                                        <v-col>
                                            <v-text-field prepend-icon="mdi-lock-outline" variant="outlined"
                                                id="password" type="password" v-model="form.password" color="primary"
                                                label="Senha" :messages="[form.errors.password]"
                                                :class="[form.errors.password ? 'onerror' : '']"
                                                @click="form.errors.password = null" autocomplete="off"></v-text-field>
                                        </v-col>
                                        <v-col>
                                            <v-text-field variant="outlined" id="password_confirmation" type="password"
                                                color="primary" v-model="form.password_confirmation"
                                                label="Confirme a senha" :messages="[form.errors.password_confirmation]"
                                                :class="[form.errors.password ? 'onerror' : '']"
                                                @click="form.errors.password_confirmation = null"
                                                autocomplete="off"></v-text-field>
                                        </v-col>
                                    </v-row>

                                </v-col>
                            </v-row>
                            <v-row>
                                <v-divider></v-divider>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-account-outline"
                                        label="Nome Completo" v-model="form.name" :messages="[form.errors.name]"
                                        :class="[form.errors.name ? 'onerror' : '']"
                                        @click="form.errors.name = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-select label="Escolaridade" variant="outlined" prepend-icon="mdi-school-outline"
                                        v-model="form.escolaridade" :messages="[form.errors.escolaridade]"
                                        :class="[form.errors.escolaridade ? 'onerror' : '']"
                                        @click="form.errors.escolaridade = null"
                                        :items="['Fundamental - Incompleto', 'Fundamental - Completo', 'Médio - Incompleto', 'Médio - Completo', 'Superior - Incompleto', 'Superior - Completo', 'Mestrado', 'Doutorado']"></v-select>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col cols="6">
                                    <v-text-field variant="outlined" prepend-icon="mdi-card-account-details-outline"
                                        label="CPF" v-mask="'000.000.000-00'" v-model="form.cpf"
                                        :messages="[form.errors.cpf]" :class="[form.errors.cpf ? 'onerror' : '']"
                                        @click="form.errors.cpf = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="Rg" v-model="form.rg"
                                        :messages="[form.errors.rg]" :class="[form.errors.rg ? 'onerror' : '']"
                                        @click="form.errors.rg = null" v-mask="'00000000-0'"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="Orgão emissor" v-model="form.orgEmissor"
                                        :messages="[form.errors.orgEmissor]"
                                        :class="[form.errors.orgEmissor ? 'onerror' : '']"
                                        @click="form.errors.orgEmissor = null" v-mask="'SSSS'"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-book-open-variant"
                                        label="Carteira de Trabalho e Previdência Social" v-model="form.ctps"
                                        :messages="[form.errors.ctps]" :class="[form.errors.ctps ? 'onerror' : '']"
                                        @click="form.errors.ctps = null" v-mask="'00000000000'"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="PIS/Pasep" v-mask="'00000000000'"
                                        v-model="form.pis" :messages="[form.errors.pis]"
                                        :class="[form.errors.pis ? 'onerror' : '']"
                                        @click="form.errors.pis = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-vote-outline"
                                        label="Titulo Eleitoral" v-model="form.tituloEleitoral"
                                        :messages="[form.errors.tituloEleitoral]"
                                        :class="[form.errors.tituloEleitoral ? 'onerror' : '']"
                                        @click="form.errors.tituloEleitoral = null"
                                        v-mask="'0000 0000 0000 00 000 0000'"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-badge-account-horizontal-outline"
                                        label="Carteira Nacional de Habilitação (Opcional)" v-mask="'000000000-0'"
                                        v-model="form.cnh" :messages="[form.errors.cnh]"
                                        :class="[form.errors.cnh ? 'onerror' : '']"
                                        @click="form.errors.cnh = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="md:military_tech"
                                        label="Certificado de Reservista" v-model="form.cerReserv"
                                        :messages="[form.errors.cerReserv]"
                                        :class="[form.errors.cerReserv ? 'onerror' : '']"
                                        @click="form.errors.cerReserv = null"></v-text-field>
                                </v-col>

                            </v-row>

                        </v-container>

                    </v-window-item>
                </v-window>
                <v-window v-model="step">
                    <v-window-item :value="2">

                        <v-container>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-email-outline" label="E-mail"
                                        v-model="form.email" :messages="[form.errors.email]"
                                        :class="[form.errors.email ? 'onerror' : '']"
                                        @click="form.errors.email = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-map-marker-outline"
                                        label="Endereço" v-model="form.address" :messages="[form.errors.address]"
                                        :class="[form.errors.address ? 'onerror' : '']"
                                        @click="form.errors.address = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-numeric" label="Número"
                                        v-model="form.numero" :messages="[form.errors.numero]"
                                        :class="[form.errors.numero ? 'onerror' : '']"
                                        @click="form.errors.numero = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="Cep" v-mask="'00.000-000'"
                                        v-model="form.cep" :messages="[form.errors.cep]"
                                        :class="[form.errors.cep ? 'onerror' : '']"
                                        @click="form.errors.cep = null"></v-text-field>
                                </v-col>

                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-home-city-outline" label="Bairro"
                                        v-model="form.bairro" :messages="[form.errors.bairro]"
                                        :class="[form.errors.bairro ? 'onerror' : '']"
                                        @click="form.errors.bairro = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="Cidade" v-model="form.city"
                                        :messages="[form.errors.city]" :class="[form.errors.city ? 'onerror' : '']"
                                        @click="form.errors.city = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="UF" v-model="form.uf"
                                        :messages="[form.errors.uf]" :class="[form.errors.uf ? 'onerror' : '']"
                                        @click="form.errors.uf = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-fountain-pen-tip"
                                        label="Complemento (opcional)" v-model="form.complemento"
                                        :messages="[form.errors.complemento]"
                                        :class="[form.errors.complemento ? 'onerror' : '']"
                                        @click="form.errors.complemento = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-divider></v-divider>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-human-greeting-proximity"
                                        label="Pessoa Responsável (Opcional)" v-model="form.personR"
                                        :messages="[form.errors.personR]"
                                        :class="[form.errors.personR ? 'onerror' : '']"
                                        @click="form.errors.personR = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-phone-outline"
                                        label="Telefone de contato" v-mask="'(00)00000-0000'" v-model="form.phone"
                                        :messages="[form.errors.phone]" :class="[form.errors.phone ? 'onerror' : '']"
                                        @click="form.errors.phone = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field variant="outlined" label="Telefone de contato (2)"
                                        v-mask="'(00)00000-0000'" v-model="form.phone2" :messages="[form.errors.phone2]"
                                        :class="[form.errors.phone2 ? 'onerror' : '']"
                                        @click="form.errors.phone2 = null"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-textarea variant="outlined" prepend-icon="mdi-pencil-plus-outline"
                                        label="Dados adicionais (Opcional)" v-model="form.dataAdd"
                                        :messages="[form.errors.dataAdd]"
                                        :class="[form.errors.dataAdd ? 'onerror' : '']"
                                        @click="form.errors.dataAdd = null"></v-textarea>
                                </v-col>
                            </v-row>

                        </v-container>

                    </v-window-item>
                </v-window>


                <v-window v-model="step">
                    <v-window-item :value="3">

                        <v-container>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-calendar-range"
                                        label="Data de Contratação" v-mask="'00/00/0000'" v-model="form.dataContrat"
                                        :messages="[form.errors.dataContrat]"
                                        :class="[form.errors.dataContrat ? 'onerror' : '']"
                                        @click="form.errors.dataContrat = null"></v-text-field>
                                </v-col>
                                <v-col class="d-flex ">
                                    <v-select v-model="form.selected" label="Tipo de contrato" variant="outlined"
                                        :items="items" item-title="title" item-value="abbr"
                                        :messages="[form.errors.selected]"
                                        :class="[form.errors.selected ? 'onerror' : '']"
                                        @click="form.errors.selected = null">


                                    </v-select>

                                    <!-- helpp-->

                                    <div class="ma-4">
                                        <v-dialog v-model="dialog">
                                            <template v-slot:activator="{ props }">
                                                <v-icon icon="mdi-help-circle-outline" v-bind="props">

                                                </v-icon>
                                            </template>

                                            <v-card>
                                                <v-card-text>
                                                    <Help />
                                                </v-card-text>
                                                <v-card-actions>
                                                    <v-btn variant="flat" block @click="dialog = false">
                                                        Fechar</v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </v-dialog>
                                    </div>


                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline" label="Setor"
                                        v-model="form.setor" :messages="[form.errors.setor]"
                                        :class="[form.errors.setor ? 'onerror' : '']"
                                        @click="form.errors.setor = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-select v-model="form.escalas" label="Escala" variant="outlined" :items="escala"
                                        item-title="title" item-value="abbr" :messages="[form.errors.escalas]"
                                        :class="[form.errors.escalas ? 'onerror' : '']"
                                        @click="form.errors.escalas = null">

                                    </v-select>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field variant="outlined" prepend-icon="mdi-account-hard-hat"
                                        label="Profissão" v-model="form.prof" :messages="[form.errors.prof]"
                                        :class="[form.errors.prof ? 'onerror' : '']"
                                        @click="form.errors.prof = null"></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-select v-model="form.level" label="Nivel de sistema" variant="outlined"
                                        :items="level" item-title="title" item-value="title"
                                        :messages="[form.errors.level]" :class="[form.errors.level ? 'onerror' : '']"
                                        @click="form.errors.level = null">

                                    </v-select>
                                    {{ level.abbr }}
                                </v-col>

                            </v-row>



                        </v-container>

                    </v-window-item>
                </v-window>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-btn v-if="step > 1" variant="text" @click="step--" width="150">
                        Voltar
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn v-if="step < 3" color="primary" variant="flat" width="150" @click="step++">Próximo</v-btn>
                    <v-btn v-else variant="flat" width="150" type="submit" :disabled="(form.processing)"
                        :loading="loading">Enviar</v-btn>
                </v-card-actions>
            </v-card>



        </v-form>

        <div>
            
            <v-snackbar as="v-alert" v-model="form.snackbarSuccess" variant="text" :timeout="timeout">

                <v-alert type="success" @click="form.snackbarSuccess = false">Usuário Criado com sucesso! </v-alert>

            </v-snackbar>

            <v-snackbar as="v-alert" v-model="form.snackbarFail" variant="text" :timeout="timeout">

                <v-alert type="error" @click="form.snackbarFail=false"> Erro, volte e verifique os dados do formulário</v-alert>

            </v-snackbar>

        </div>

    </v-container>



</template>


<script setup>

import { useForm } from '@inertiajs/vue3'
import Help from './help.vue';
import layoutDashboard from '../../Layout/layout-dashboard.vue';



defineOptions({
    layout: layoutDashboard
})


let form = useForm({
    name: '',
    dataContrat: '',
    setor: '',
    cpf: '',
    rg: '',
    ctps: '',
    tituloEleitoral: '',
    cnh: '',
    cerReserv: '',
    escolaridade: null,
    address: '',
    numero: '',
    cep: '',
    bairro: '',
    city: '',
    uf: '',
    orgEmissor: '',
    dataAdd: '',
    personR: '',
    phone: '',
    phone2: '',
    complemento: '',
    dataContrat: '',
    selected: null,
    setor: '',
    escalas: null,
    prof: '',
    pis: '',
    email: '',
    login: '',
    plano: 'usuario',
    level: null,
    created_by: '',

    password: '',
    password_confirmation: '',

    snackbarFail: ref(false),
    snackbarSuccess: ref(false),

    errors: { type: Object, default: ({}) }
})

const timeout = 2000


let loading = false;

let submit = () => {
    loading = true,
        
        form.post('create-user', {
            
            onError: () => (form.password = '', form.password_confirmation = '', loading = false, form.snackbarFail = true ),
            onSuccess: () => (form.password = '', form.password_confirmation = '', loading = false, form.snackbarSuccess = true)

        })

}
let selected = ref(null)
const items = ref([
    { title: "Contrato por tempo indeterminado", abbr: 'Contrato por tempo indeterminado' },
    { title: 'Contrato por tempo determinado ', abbr: 'Contrato por tempo determinado' },
    { title: 'Contrato de trabalho temporário', abbr: 'Contrato de trabalho temporário' },
    { title: 'Contrato de trabalho autônomo', abbr: 'Contrato de trabalho autônomo' },
    { title: 'Contrato de prestação de serviços', abbr: 'Contrato de prestação de serviços' },
    { title: 'Contrato de trabalho terceirizado', abbr: 'Contrato de trabalho terceirizado' },
    { title: 'Contrato de trabalho intermitente', abbr: 'Contrato de trabalho intermitente' },
    { title: 'Contrato de trabalho parcial', abbr: 'Contrato de trabalho parcial' },
    { title: 'Contrato de trabalho home office', abbr: 'Contrato de trabalho home office' },
    { title: 'Contrato de trabalho de estágio', abbr: 'Contrato de trabalho de estágio' },
    { title: 'Contrato de trabalho Verde e Amarelo', abbr: 'Contrato de trabalho Verde e Amarelo' }
])
const dialog = ref(false)
const escalas = ref(null)
const escala = ref([
    { title: '5x1', abbr: '5x1' },
    { title: '5x2', abbr: '5x2' },
    { title: '4x2', abbr: '4x2' },
    { title: '13x36', abbr: '12x36' },
    { title: '18x36', abbr: '18x36' },
    { title: '24x48', abbr: '24x48' },
])

const level = ref([
    { title: 'Colaborador', abbr: 'Registro e acesso ao sistema' },
    { title: 'Supervisor', abbr: 'Registro e acesso ao sistema, atende aos chamados de colaboradores' },
    { title: 'Coordenador', abbr: 'Registro e acesso ao sistema, atende aos chamados de Supervisores' },
    { title: 'Gerente', abbr: 'Registro e acesso ao sistema, atende aos chamados de Coordenadores' },
    { title: 'Cargo de RH', abbr: 'Registro e acesso ao sistema, atende a todos os chamados e pode registrar novos usuários' },
])

const currentTitle = computed(() => {
    switch (step) {
        case 1: return 'Dados cadastrais'
        case 2: return 'Contato e endereço'
        default: return 'Configurações'
    }
})
let step = ref()
onMounted(() => {
    step = ref(1)
})

</script>



