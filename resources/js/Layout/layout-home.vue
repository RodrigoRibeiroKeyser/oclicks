<template>
  <main>
    <v-layout>
      <v-main>
        
      <v-app>
        <header>
          <v-app-bar app flat class="px-12" elevation="1">
            <v-app-bar-title class="hidden-sm-and-up">


              <v-img v-if="$vuetify.theme.name == 'dark'" src="img/logo.png" width="60" class="mt-2 mb-2"
                style="filter: invert(1)" />
              <v-img v-else src="img/logo.png" width="60" class="mt-2 mb-2" />


            </v-app-bar-title>
            <template v-slot:append>
              <div class="d-none d-sm-flex d-md-flex lg-flex">
                <Link :href="route('index')" class="text-decoration-none mx-2 me-6 ">Home</Link>
                <Link :href="route('planos')" class="text-decoration-none mx-2 me-6 ">Planos </Link>
                

                <!--TERMO DE USO -->
                <div>
                  <div class="text-center">
                    <v-dialog v-model="termo" transition="dialog-bottom-transition" scrollable>
                      <template v-slot:activator="{ props }">
                        <a color="primary" v-bind="props" class="text-decoration-none mx-2 me-6 text-primary"
                          style="cursor: pointer">
                          Termos de uso e contrato
                        </a>
                      </template>

                      <v-card>
                        <v-card-text style="height: auto">
                          <Termo />

                        </v-card-text>
                        <v-divider></v-divider>
                        <v-card-actions>
                          <v-btn width="300" color="primary" @click="termo = false" variant="tonal" location=bottom
                            center>
                            Fechar
                          </v-btn>


                        </v-card-actions>



                      </v-card>

                    </v-dialog>
                  </div>
                </div>


                <!--Fim dos termos-->
                <Link :href="route('login')" class="text-decoration-none mx-2">Portal </Link>
              </div>
              <div class="hidden-sm-and-up">
                <v-app-bar-nav-icon variant="text" @click="drawer = !drawer" color="primary">
                </v-app-bar-nav-icon>

              </div>
            </template>

          </v-app-bar>
        </header>


        <article>

          <slot />

        </article>

      </v-app>

      <!--nav mobile-->
      <v-navigation-drawer v-if="$vuetify.theme.name == 'light'" app v-model="drawer" location="end" color="primary"
        class="hiddem-xl hidden-md hidden-lg">

        <v-list density="compact" nav>
          <v-list-item class="text-h5 font-weight-thin">Menu</v-list-item>
          <Link :href="route('index')" class="text-decoration-none text-white">
          <v-list-item prepend-icon="mdi-home-outline" title="Home" Value="Home" @click="drawer = false"></v-list-item>
          </Link>
          <Link :href="route('planos')" class="text-decoration-none text-white">
          <v-list-item prepend-icon="mdi-currency-usd" title="Planos" Value="Planos" @click="drawer = false"></v-list-item>
          </Link>
          

          <v-list-item prepend-icon="mdi-file-document-edit-outline" title="Termos de uso e contrato"
            Value="Termos de uso e contrato" @click="termo = true, drawer = false"></v-list-item>





        </v-list>
        <template v-slot:append>
          <div class="pa-2">
            <Link :href="route('login')" class="text-decoration-none">
            <v-btn block color="white" @click="drawer = false">
              Portal
            </v-btn>
            </Link>
          </div>
        </template>

        <!-- nav mobile dark-->
      </v-navigation-drawer>

      <v-navigation-drawer v-else app v-model="drawer" location="end" class="hiddem-xl hidden-md hidden-lg">

        <v-list density="compact" nav>
          <v-list-item class="text-h5 font-weight-thin">Menu</v-list-item>
          <Link :href="route('index')" class="text-decoration-none text-white">
          <v-list-item prepend-icon="mdi-home-outline" title="Home" Value="Home" @click="drawer = false"></v-list-item>
          </Link>
          <Link :href="route('planos')" class="text-decoration-none text-white">
          <v-list-item prepend-icon="mdi-home-outline" title="Planos" Value="planos" @click="drawer = false"></v-list-item>
          </Link>



          <v-list-item prepend-icon="mdi-file-document-edit-outline" title="Termos de uso e contrato"
            Value="Termos de uso e contrato" @click="termo = true, drawer = false"></v-list-item>





        </v-list>
        <template v-slot:append>
          <div class="pa-2">
            <Link :href="route('login')" class="text-decoration-none">
            <v-btn block color="white" @click="drawer = false">
              Portal
            </v-btn>
            </Link>
          </div>
        </template>






      </v-navigation-drawer>
      <!--Fim NAV MOBILE-->
  
      
    
    
    </v-main>

      
    </v-layout>
    
  
  </main>
</template>
  
<script setup>
import Termo from '../Pages/termos-de-uso.vue'
import Toggle from '../Shared/toggle-theme.vue'

const drawer = ref(false)
const cookies = ref(false)
const termo = ref(false)
</script>
<script>

</script>