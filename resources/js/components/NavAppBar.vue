<template>
    <div>
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <!-- Continuar -->
        </v-navigation-drawer>

        <v-app-bar
            app
            :dark="!!color"
            :color="color + ' darken-3'"
        >
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>{{ title }}</v-toolbar-title>
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
        },
        computed: {
            title() {
                return this.$route.meta.display_name || "";
            },
            color() {
                return this.$route.meta.color || "";
            }
        }
    }
</script>
