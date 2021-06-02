<template>
    <v-container fluid>
        <v-row>
            <v-col class="col-12 col-md-4">
                <v-card>
                    <v-form
                        class="px-4 pb-4"
                        @submit.prevent="getAlumnos"
                    >
                        <div class="d-flex align-center">
                            <v-card-subtitle class="px-0">
                                Filtrar
                            </v-card-subtitle>
                            <v-spacer></v-spacer>
                            <v-btn
                                text
                                dense
                                type="submit"
                                :color="theme_color"
                                class="mr-n4"
                            >
                                <v-icon left>mdi-reload</v-icon>
                                Actualizar Listado
                            </v-btn>
                        </div>
                        <v-text-field
                            type="search"
                            class="mb-4"
                            outlined
                            dense
                            hide-details
                            label="Buscar"
                            v-model="filtros.buscar"
                        ></v-text-field>
                        <v-select
                            class="mb-4"
                            outlined
                            multiple
                            small-chips
                            deletable-chips
                            hide-details
                            label="Estados"
                            :items="estados_disponibles"
                            v-model="filtros.estados"
                        ></v-select>
                        <v-select
                            outlined
                            multiple
                            small-chips
                            deletable-chips
                            hide-details
                            label="Cursos"
                            :items="cursos_disponibles"
                            v-model="filtros.cursos"
                            :loading="loading.cursos"
                            :disabled="loading.cursos"
                        >
                        </v-select>
                        <v-checkbox
                            label="Tiene hermanos"
                        ></v-checkbox>
                    </v-form>
                </v-card>
                <v-card class="mt-4">
                    <v-card-actions>
                        <v-btn
                            :to="{name: 'matricular-alumno'}"
                            :color="theme_color"
                        >
                            Matricular alumno
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col>
                <v-card>
                    <v-data-table
                        :headers="tabla.headers"
                        :items="alumnos_filtrados"
                        :loading="loading.alumnos"
                        :search="filtros.buscar"
                    >
                        <template v-slot:item.acciones="{ item }">
                            <v-btn
                                :color="theme_color"
                                text
                                :to="`/alumnos/${item.id}`"
                            >
                                más info
                                <v-icon right>mdi-chevron-right</v-icon>
                            </v-btn>
                        </template>
                    </v-data-table>
                    <v-overlay
                        :value="loading.alumnos"
                        absolute
                    >
                        <v-progress-circular
                            indeterminate
                        ></v-progress-circular>
                    </v-overlay>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import RequestHelper from "../../utils/RequestHelper";

export default {
    data () {
        return {
            loading: {
                alumnos: null,
                cursos: null,
            },
            estados_disponibles: [
                "Promovido", "Ingresante", "Preinscripto"
            ],
            cursos_disponibles: [],
            filtros: {
                estados: [],
                cursos: [],
                buscar: "",
            },
            tabla: {
                headers: [
                    {text: "Curso", value: "curso"},
                    {text: "Apellidos y Nombres", value: "ape_nom"},
                    {text: "Dni", value: "dni", align: "center"},
                    {text: "Domicilio", value: "domicilio"},
                    {text: "", value: "acciones", sortable: false}
                ],
                alumnos: [

                ]
            }
        }
    },

    methods: {
        filtrarAlumnos(value, search, item) {
            console.log(search);
            return false;
        },
        getAlumnos() {
            this.loading.alumnos = true;

            var request = {
                url: `/api/alumnos`,
                handler: {
                    "200": (response) => {
                        console.log(response.data);
                        this.tabla.alumnos = this.mapAlumnos(response.data);
                    },
                    "401": (response) => {
                        this.$store.commit('logout');
                        this.$router.push('/login');
                    },
                    always: () => {
                        this.loading.alumnos = false;
                    }
                }
            }

            RequestHelper.get(request);
        },
        mapAlumnos(alumnos) {
            return alumnos.map(alumno => {
                return {
                    id: alumno.id,
                    curso: `${alumno.curso.grado}°${alumno.curso.division}`,
                    ape_nom: `${alumno.apellidos}, ${alumno.nombres}`,
                    dni: `${alumno.dni.nro_documento}`,
                    domicilio: `${alumno.domicilio.calle} ${alumno.domicilio.numero}`
                }
            });
        },
        getEstados() {
            // TODO get estados from DB
        },
        mapEstados(estados) {

        },
        getCursos() {
            this.loading.cursos = true;

            var request = {
                url: `/api/cursos`,
                handler: {
                    "200": (response) => {
                        this.cursos_disponibles = this.mapCursos(response.data);
                    },
                    "401": (response) => {
                        this.$store.commit('logout');
                        this.$router.push('/login');
                    },
                    always: () => {
                        this.loading.cursos = false;
                    }
                }
            }

            RequestHelper.get(request);
        },
        mapCursos(cursos) {
            return cursos.map(curso => {
                return `${curso.grado}°${curso.division}`
            });
        }
    },
    computed: {
        alumnos_filtrados() {
            var alumnos = this.tabla.alumnos.filter(alumno => {
                return !this.filtros.cursos.length || this.filtros.cursos.includes(alumno.curso)
            });

            return alumnos;
        },
        theme_color() {
            return this.$route.meta.color || "primary";
        }
    },
    created() {
        this.getCursos();
        this.getAlumnos();
    }
}
</script>

<style scoped>

</style>
