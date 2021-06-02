<template>
    <v-container fluid>
        <v-card
            class="rounded-b-0"
            :loading="loading"
            :disabled="loading"
        >
            <v-tabs
                :color="theme_color"
                center-active
                show-arrows
                v-model="tab"
            >
                <v-tab
                    v-for="tab in tabs"
                    :key="tab.key"
                >
                    {{tab.text}}
                </v-tab>
            </v-tabs>
        </v-card>
        <v-tabs-items class="py-4 transparent" v-model="tab">
            <v-tab-item v-for="tab in tabs" :key="tab.key">
                <component :is="tab.component" :alumno="alumno"></component>
            </v-tab-item>
        </v-tabs-items>
    </v-container>
</template>

<script>
import VisualizarSimple from "./VisualizarSimple";
import VisualizarCompleta from "./VisualizarCompleta";
import VisualizarCedula from "./VisualizarCedula";

import RequestHelper from "../../utils/RequestHelper";

export default {
    data() {
        return {
            tab: null,
            tabs: [
                {
                    text: "Simple",
                    key: "simple",
                    component: VisualizarSimple
                },
                {
                    text: "Completa",
                    key: "completa",
                    component: VisualizarCompleta
                },
                {
                    text: "Cédula",
                    key: "cedula",
                    component: VisualizarCedula
                }
            ],

            alumno: null,
            loading: null,
        }
    },
    methods: {
        getAlumno() {
            this.loading = true;

            var id = this.$route.params.id;

            var request = {
                url: `/api/alumnos/${id}`,
                handler: {
                    "200": (response) => {
                        this.alumno = response.data;
                        console.log(response.data);
                    },
                    "401": (response) => {
                        this.$store.commit('logout');
                        this.$router.push('/login');
                    },
                    always: () => {
                        this.loading = false;
                    }
                }
            }
            RequestHelper.get(request);
        }
    },
    created() {
        this.getAlumno();
    },
    computed: {
        theme_color() {
            return this.$route.meta.color || "primary";
        }
    }
}
</script>

<style scoped>

</style>
