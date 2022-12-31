<template>
	
    <v-btn width="300" class="d-inline pa-2 accent-4" @click="toggleTheme">toggle theme</v-btn>
    
  
</template>

<script>
import { useTheme } from 'vuetify'

export default {
  setup () {
    const theme = useTheme()

    return {
      theme,
      toggleTheme: () => theme.global.name.value = theme.global.current.value.dark ? 'light' : 'dark'
    }
  }
}
</script>