<template>
    <v-container fill-height fluid class="pt-md-12 px-md-12">
        <!--
        <v-img
            :max-width="$vuetify.breakpoint.xsOnly ? 100 : 200"
            src="https://drive.google.com/uc?export=view&id=1ZhX1uyyrYsE508onGFzqZ05m1J1qgK2h"
        ></v-img>
        -->
        <v-row>
            <v-col class="col-12 col-sm-6 col-md-4 col-xl-3">
                <v-hover>
                    <template v-slot:default="{ hover }">
                        <v-card>
                            <div class="d-flex align-center">
                                <v-card-title><v-icon left>mdi-school</v-icon> Alumnos</v-card-title>
                                <v-spacer></v-spacer>
                                <div class="pa-4" style="text-align: center">
                                    <h5 class="font-weight-regular grey--text">Matrícula</h5>
                                    <h1 class="py-0 font-weight-light">{{ alumnos.count.total }}</h1>
                                    <div class="d-flex justify-center" style="font-size: .9em">
                                        <div class="pl-2 pr-1 blue darken-2 rounded-l-pill">{{ alumnos.count.total_varones }}</div>
                                        <div class="pl-1 pr-2 pink darken-2 rounded-r-pill">{{ alumnos.count.total_mujeres }}</div>
                                    </div>
                                </div>
                            </div>
                            <v-divider></v-divider>
                            <v-row>
                                <v-col>
                                    <div class="pa-4" style="text-align: center">
                                        <h5 class="font-weight-regular grey--text">Turno Mañana</h5>
                                        <h3 class="py-0 font-weight-light">{{ alumnos.count.turno_maniana }}</h3>
                                        <div class="d-flex justify-center" style="font-size: .8em">
                                            <div class="pl-2 pr-1 blue darken-2 rounded-l-pill">{{ alumnos.count.turno_maniana_varones }}</div>
                                            <div class="pl-1 pr-2 pink darken-2 rounded-r-pill">{{ alumnos.count.turno_maniana_mujeres }}</div>
                                        </div>
                                    </div>
                                </v-col>
                                <v-col>
                                    <div class="pa-4" style="text-align: center">
                                        <h5 class="font-weight-regular grey--text">Turno Tarde</h5>
                                        <h3 class="py-0 font-weight-light">{{ alumnos.count.turno_tarde }}</h3>
                                        <div class="d-flex justify-center" style="font-size: .8em">
                                            <div class="pl-2 pr-1 blue darken-2 rounded-l-pill">{{ alumnos.count.turno_tarde_varones }}</div>
                                            <div class="pl-1 pr-2 pink darken-2 rounded-r-pill">{{ alumnos.count.turno_tarde_mujeres }}</div>
                                        </div>
                                    </div>
                                </v-col>
                            </v-row>
                            <v-fade-transition>
                                <v-overlay
                                    v-if="hover && !loading.alumnos"
                                    absolute
                                    color="orange darken-3"
                                >
                                    <v-btn color="orange darken-3" dark to="/alumnos">IR A ALUMNOS</v-btn>
                                </v-overlay>
                            </v-fade-transition>
                            <v-fade-transition>
                                <v-overlay
                                    :value="loading.alumnos"
                                    absolute
                                    opacity="1"
                                    color="orange darken-3"
                                >
                                    <v-progress-circular
                                        indeterminate
                                    ></v-progress-circular>
                                </v-overlay>
                            </v-fade-transition>
                        </v-card>
                    </template>
                </v-hover>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import RequestHelper from "@/utils/RequestHelper";

export default {
    data() {
        return {
            loading: {
                alumnos: null
            },
            alumnos: {
                count: {
                    total: 0,
                    total_varones: 0,
                    total_mujeres: 0,
                    turno_maniana: 0,
                    turno_maniana_varones: 0,
                    turno_maniana_mujeres: 0,
                    turno_tarde: 0,
                    turno_tarde_varones: 0,
                    turno_tarde_mujeres: 0,
                }
            }
        }
    },
    methods: {
        getMatriculaAlumnos() {

            this.loading.alumnos = true;

            var request = {
                url: `/api/alumnos/count?establecimiento_id=${this.establecimiento.id}`,
                handler: {
                    "200": (response) => {
                        this.alumnos.count = response.data;
                    },
                    "401": (response) => {
                        this.$store.commit('logout');
                        this.$router.push('/login');
                    },
                    always: () => {
                        this.loading.alumnos = false;
                    }
                }
            };

            RequestHelper.get(request);
        }
    },
    computed: {
        establecimiento() {
            return this.$store.state.establecimiento;
        }
    },
    created() {
        this.getMatriculaAlumnos();
    }
}
</script>

<style>

</style>
