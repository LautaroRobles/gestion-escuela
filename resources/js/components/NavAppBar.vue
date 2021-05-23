<template>
    <div>
        <v-navigation-drawer 
            v-model="drawer"
            app
        >
            <!-- Continuar -->
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
            <!-- Continuar -->
        </v-app-bar>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                drawer: null
            }
        }
    }
</script>
