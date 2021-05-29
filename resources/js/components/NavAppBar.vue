<template>
    <div>
        <!--
        <v-navigation-drawer
            v-model="drawer"
            app
        >

        </v-navigation-drawer>
        -->

        <v-app-bar
            app
            :dark="!!color"
            :color="color"
            class="colored-app-bar"
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

<style>
    .colored-app-bar {
        filter: saturate(75%);
    }
</style>
