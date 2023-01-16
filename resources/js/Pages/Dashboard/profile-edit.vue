<template>

    <Head title="Editar Perfil"></Head>

    <!-- caso empresa -->
    <div v-if="empresa == 1">
    <v-tabs v-model="tab" align-tabs="end" >
        <v-tab value="tab-1" class="text-subtitle-2">Dados Cadastrais</v-tab>
        <v-tab value="tab-2" class="text-subtitle-2">Contato e Endereço</v-tab>
        <v-tab value="tab-3" class="text-subtitle-2">Plano Contratado</v-tab>
        <v-tab value="tab-4" class="text-subtitle-2">Configurações</v-tab>

    </v-tabs>
    <v-window v-model="tab">
        <v-window-item value="tab-1">
            <v-container>
                <v-row no-gutters>
                    <v-col>
                        <v-sheet class="d-flex">
                            <v-avatar color="surface-variant" size="large" class="mt-2 mr-5"></v-avatar>
                            <v-file-input variant="outlined" :rules="rules" accept="image/png, image/jpeg, image/bmp"
                                placeholder="Pick an avatar" prepend-icon="mdi-camera-outline"
                                label="Avatar"></v-file-input>
                        </v-sheet>

                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Razão Social"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Nome Fantasia"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="CNPJ ou MEI"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Inscrição Estadual"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-radio-group label="Ramo de atividade">
                            <v-row>
                                <v-col>
                                    <v-radio label="Agente de Carga" value="1"></v-radio>
                                    <v-radio label="Orgão Anuente" value="2"></v-radio>
                                    <v-radio label="Sindicato" value="3"></v-radio>
                                    <v-radio label="Armador" value="3"></v-radio>
                                </v-col>
                                <v-col>
                                    <v-radio label="MAPA" value="3"></v-radio>
                                    <v-radio label="Trade" value="3"></v-radio>
                                    <v-radio label="Transportadora" value="3"></v-radio>
                                    <v-radio label="Fornecedor ou Prestador de Serviço" value="3"></v-radio>
                                </v-col>
                            </v-row>
                        </v-radio-group>
                    </v-col>

                </v-row>
            </v-container>

        </v-window-item>
    </v-window>
    <v-window v-model="tab">
        <v-window-item value="tab-2">

            <v-container>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Site"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="E-mail"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Endereço"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Número"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Cep"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline" label="UF"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Bairro"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Cidade"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Complemento"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-divider></v-divider>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Pessoa Responsável"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Telefone de contato"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Telefone de contato (2)"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-textarea variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Dados adicionais"></v-textarea>
                    </v-col>
                </v-row>

            </v-container>

        </v-window-item>
    </v-window>

    <v-window v-model="tab">
        <v-window-item value="tab-3">

            <v-container>
                <v-row>
                    <v-col>
                        Aqui vai Configurações de plano resgatadas da tabela de planos do BD
                    </v-col>
                </v-row>

            </v-container>

        </v-window-item>
    </v-window>
    <v-window v-model="tab">
        <v-window-item value="tab-4">

            <v-container>
                <v-row>
                    <v-col>
                        aqui as configurações do usuário, como tema dark privacidade etc.
                    </v-col>
                </v-row>

            </v-container>

        </v-window-item>
    </v-window>
    </div>
    <!-- caso user -->
    <div v-else>
    <v-tabs v-model="tab" align-tabs="end">
        <v-tab value="tab-1" ><span class="text-subtitle-2">Dados Cadastrais</span></v-tab>
        <v-tab value="tab-2"><span class="text-subtitle-2">Contato e Endereço</span></v-tab>        
        <v-tab value="tab-3"><span class="text-subtitle-2">Configurações</span></v-tab>

    </v-tabs>
    <v-window v-model="tab">
        <v-window-item value="tab-1">
            <v-container>
                <v-row no-gutters>
                    <v-col>
                        <v-sheet class="d-flex">
                            <v-avatar color="surface-variant" size="large" class="mt-2 mr-5"></v-avatar>
                            <v-file-input variant="outlined" :rules="rules" accept="image/png, image/jpeg, image/bmp"
                                placeholder="Pick an avatar" prepend-icon="mdi-camera-outline"
                                label="Avatar"></v-file-input>
                        </v-sheet>

                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-account-outline" 
                            label="Nome Completo"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col cols="6">
                        <v-text-field variant="outlined" prepend-icon="mdi-card-account-details-outline"
                            label="CPF"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" 
                            label="Rg"></v-text-field>
                        </v-col>
                        <v-col>
                            <v-text-field variant="outlined"
                            label="Orgão emissor"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-book-open-variant"
                            label="Carteira de Trabalho e Previdência Social"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" 
                            label="PIS/Pasep"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-vote-outline"
                            label="Titulo Eleitoral"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-badge-account-horizontal-outline"
                            label="Carteira Nacional de Habilitação"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="md:military_tech"
                            label="Certificado de Reservista"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-select label="Escolaridade" variant="outlined" prepend-icon="mdi-school-outline" 
                    :items="['Fundamental - Incompleto', 'Fundamental - Completo', 'Médio - Incompleto', 'Médio - Completo', 'Superior - Incompleto', 'Superior - Completo', 'Mestrado', 'Doutorado']"
                    ></v-select>
                    </v-col>
                </v-row>
                
            </v-container>

        </v-window-item>
    </v-window>
    <v-window v-model="tab">
        <v-window-item value="tab-2">

            <v-container>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="E-mail"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Endereço"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Número"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Cep"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline" label="UF"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Bairro"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Cidade"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Complemento"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-divider></v-divider>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Pessoa Responsável"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Telefone de contato"></v-text-field>
                    </v-col>
                    <v-col>
                        <v-text-field variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Telefone de contato (2)"></v-text-field>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-textarea variant="outlined" prepend-icon="mdi-briefcase-outline"
                            label="Dados adicionais"></v-textarea>
                    </v-col>
                </v-row>

            </v-container>

        </v-window-item>
    </v-window>

   
    <v-window v-model="tab">
        <v-window-item value="tab-3">

            <v-container>
                <v-row>
                    <v-col>
                        aqui as configurações do usuário, como tema dark privacidade etc.
                    </v-col>
                </v-row>

            </v-container>

        </v-window-item>
    </v-window>
    </div>


</template>
<script>
import LayoutDashboard from '../../Layout/layout-dashboard.vue';


export default {
    layout: LayoutDashboard,
    data: () => ({
       
      tab: null,
    }),
   
   async mounted(){
    this.tab = 'tab-1'
   }
}

</script>
<script setup>
    let empresa = 2
</script>
