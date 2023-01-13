<template>
    <Head title="Seja simples"></Head>

       <v-main>
          <v-container>
            <v-row wrap>
              <!--LOGO-->
              <v-col cols="12" sm="6" class="hidden-xs">
                <div class="d-flex justify-center">
                  <v-img v-if="$vuetify.theme.name == 'dark'" style="filter: invert(1)" :src="`img/logo.png`"
                    max-width="350"></v-img>
                  <v-img v-else :src="`img/logo.png`" max-width="350"></v-img>
                </div>



              </v-col>
              <v-col cols="12" sm="6">
                <div class="text-primary mb-6 mt-6" style="font-size: 2em">
                  <h1>Simples,</h1>
                  <h3>como um Caderno de</h3><h3> Ponto deve ser.</h3>
                  <p class="font-weight-normal text-body-1">Não é só um sistema. É uma plataforma completa,
                    ajudando você a otimizar processos do seu RH de maneira simples,
                    eficiente e segura.</p>

                </div>
              </v-col>
            </v-row>
          </v-container>

          <div class=" bg-primary text-center pt-6 pb-6" style="font-size: 1.5em">
            <h1 >Adeus planilhas!!!</h1>
            <h1>100% online</h1>
            <h4 >com mais de 5 tipos de registro de ponto</h4>
            <h4>E com um sistema de gestão gradual.</h4>
            <p class="font-weight-thin">Uma plataforma com todas as ferramentas necessárias para calcular de férias a
              salário</p>
            <p class="font-weight-thin">Segura, transparente, atualizável e dentro da lei conforma a portaria <b>671</b>
            </p>
          </div>

          <v-container  style="font-size: 1.2em">
            <v-row>

              <v-col cols="4">
                <div class="d-flex justify-center pa-6">
                  <v-img :src="'img/perfil.png'" max-width="150" v-if="$vuetify.theme.name == 'dark'"
                    style="filter: invert(1)"></v-img>

                  <v-img :src="'img/perfil.png'" max-width="150" v-else></v-img>


                </div>
                <h2 class="text-center ">Ponto por foto</h2>
              </v-col>
              <v-col cols="4">
                <div class="d-flex justify-center pa-6">
                  <v-img :src="'img/qr.png'" max-width="150" v-if="$vuetify.theme.name == 'dark'"
                    style="filter: invert(1)"></v-img>
                  <v-img :src="'img/qr.png'" max-width="150" v-else></v-img>
                </div>
                <h2 class="text-center ">Ponto por qr-code</h2>
              </v-col>
              <v-col cols="4">
                <div class="d-flex justify-center pa-6">
                  <v-img :src="'img/wtz.png'" max-width="150" v-if="$vuetify.theme.name == 'dark'"
                    style="filter: invert(1)"></v-img>
                  <v-img :src="'img/wtz.png'" max-width="150" v-else></v-img>
                </div>
                <h2 class="text-center ">Ponto por Whatsapp</h2>
              </v-col>


            </v-row>
            <v-row>
              <v-col>
                <h5 class="text-center pa-6">*Verifique os planos compativeis</h5>
              </v-col>
            </v-row>
            <v-row wrap>
              <v-col cols="12" xs="12" sm="12" md="6">
                ● Plataforma multi-nível, você decide os cargos que podem aprovar ou corrigir folhas de pontos
              </v-col>
              <v-col sm="12" md="6">
                ● Atualizável, o sistema recebe atualizações periodicamente afim de
                corrigir falhas e implementar novas funções
              </v-col>

            </v-row>
            <v-row wrap>
              <v-col cols="12" xs="12" sm="12" md="6">
                ● Cálculos de passagem diária, ticket refeição ou alimentação, férias, abono salarial.
                tudo em um só lugar.
              </v-col>
              <v-col sm="12" md="6">
                ● Suporte direto da plataforma com sistema de notificações, para abrir chamados e ajudar você a crescer.
              </v-col>

            </v-row>

            <v-row>
              <v-col cols="12">
                <div class="text-center ma-6">
                  <h1 class=" text-primary">Dentro da lei</h1>
                  <h2 class=" text-primary">Plataforma pensada diretamente na portaria 671</h2>
                </div>

              </v-col>

            </v-row>

            <v-row wrap>
              <v-col cols="12" sm="12" md="6">

                Ponto por Login e senha
                O Colaborador entrar com seu login e senha para marcação do ponto de trabalho. o mesmo
                login e senha serve para entrar no sistema e consultar sua folha de pontos
              </v-col>
              <v-col cols="12" sm="12" md="6">

                Ponto por foto
                O Colaborador pode registrar ponto e será solicitado a foto pelo aplicativo, ideal
                para vendedores de rua ou até mesmo Home-Office
              </v-col>
            </v-row>
            <v-row wrap>
              <v-col cols="12" sm="12" md="6">

                Ponto po Qr-code
                O colaborador pode solicitar o registro de ponto por meio do qr-code, impresso ou pelo
                aplicativo em uma maquina única registrada pelo administrador
              </v-col>
              <v-col cols="12" sm="12" md="6">

                Registro pelo Whatsapp
                Você pode solicitar o operador o registro de ponto por meio de Whatsapp com login e senha
                únicos

              </v-col>
            </v-row>
            <v-row wrap>
              <v-col cols="12" sm="12" md="6">

                Gerencie o controle de horas extras e banco de horas
                As informações da jornada dos colaboradores ficam centralizadas na plataforma. É possível acompanhar o
                nível de pontualidade, atrasos, horas extras, banco de horas e horas faltantes em um só lugar.
              </v-col>
              <v-col cols="12" sm="12" md="6">

                Gerencie o controle de horas extras e banco de horas
                As informações da jornada dos colaboradores ficam centralizadas na plataforma. É possível acompanhar o
                nível de pontualidade, atrasos, horas extras, banco de horas e horas faltantes em um só lugar.

              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12">



              </v-col>
            </v-row>


          </v-container>

          <!-- Footer -->

          <v-footer color="primary">
            <v-row justify="center" no-gutters>
              <v-btn color="secundary" variant="text" class="mx-2" rounded="xl">
                Sobre
              </v-btn>
              <v-col class="text-center mt-4" cols="12">
                {{ new Date().getFullYear() }} — <strong>Oclicks</strong>
                <Toggle />
              </v-col>
            </v-row>
          </v-footer>

          <!--fom do footer-->

        </v-main>

  </template>

  <script>
    import LayoutHome from '../Layout/layout-home.vue';

    import Toggle from '../Shared/toggle-theme.vue'


    export default {
        
      layout: LayoutHome,
      components: {

        Toggle
      },

    }
  </script>
  <script setup>
</script>
