<template>
    <v-container fluid>
        <v-form>
            <v-row>
                <v-col class="col-12 col-lg-2">
                    <v-card class="fill-height">
                        <v-card-text>
                            <v-select
                                outlined
                                hide-details
                                label="Curso"
                                :items="select.cursos_disponibles"
                                v-model="alumno.curso"
                                :loading="loading.cursos"
                                :disabled="loading.cursos"
                            ></v-select>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col>
                    <v-card class="fill-height">
                        <v-card-text>
                            <p>Nombre completo</p>
                            <v-row>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Apellidos"
                                        :rules="rules.obligatorio"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Nombres"
                                        :rules="rules.obligatorio"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <p>Documento</p>
                            <v-row>
                                <v-col class="col-6 col-sm-3 col-md-2">
                                    <v-select
                                        outlined
                                        dense
                                        label="Tipo"
                                        :items="select.tipos_documento"
                                        :value="select.tipos_documento[0]"
                                    ></v-select>
                                </v-col>
                                <v-col class="col-6 col-sm-5 col-md-6">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Número"
                                        :rules="[...rules.obligatorio, ...rules.numerico, ...rules.longitud8]"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-select
                                        outlined
                                        dense
                                        label="Posee"
                                        :items="select.posesion_documento"
                                        :value="select.posesion_documento[0]"
                                    ></v-select>
                                </v-col>
                                <v-col>
                                    <v-select
                                        outlined
                                        dense
                                        label="Estado"
                                        :items="select.estado_documento"
                                        :value="select.estado_documento[0]"
                                    ></v-select>
                                </v-col>
                            </v-row>
                            <p>Nacimiento</p>
                            <v-row>
                                <v-col class="col-6 col-sm-3">
                                    <v-select
                                        outlined
                                        dense
                                        label="Sexo"
                                        :items="select.sexos"
                                    >
                                    </v-select>
                                </v-col>
                                <v-col class="col-6 col-sm-3">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Fecha de nacimiento"
                                        placeholder="DD/MM/AAAA"
                                        :rules="rules.fecha"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Lugar de nacimiento"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Nacionalidad"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
            <v-row>
                <v-col>
                    <v-card>
                        <v-card-text>
                            <p>Domicilio</p>
                            <v-row>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Calle"
                                        :rules="rules.obligatorio"
                                    ></v-text-field>
                                </v-col>
                                <v-col class="col-4">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Numero"
                                        :rules="rules.numerico"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col class="col-6 col-sm-3">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Provincia"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Distrito"
                                    ></v-text-field>
                                </v-col>
                                <v-col class="col-6 col-sm-3">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Localidad"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Código Postal"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col class="col-12 col-sm-6">
                    <v-card>
                        <v-card-text>
                            <p>Otros datos de domicilio</p>
                            <v-row>
                                <v-col class="col-4">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Piso"
                                    ></v-text-field>
                                </v-col>
                                <v-col class="col-4">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Torre"
                                    ></v-text-field>
                                </v-col>
                                <v-col class="col-4">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Departamento"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col class="col-12 col-sm-6">
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Entre calles"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Otro dato referido a domicilio"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-form>
    </v-container>
</template>

<script>
import RequestHelper from "../../utils/RequestHelper";

export default {
    data() {
        return {
            rules: {
                obligatorio: [value => value !== '' || "Campo obligatorio"],
                numerico: [value => /^[0-9]+$/.test(value) || "Solo debe contener números"],
                longitud8: [value => value && value.length <= 8 || "Debe contener 8 caracteres"],
                telefono: [value => /^([0-9.]+) [0-9.]+[-][0-9.]+$/.test(value) || "Debe ser un teléfono"],
                fecha: [value => /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/.test(value) || "El formato es DD/MM/AAAA"]
            },
            loading: {
                cursos: false
            },
            alumno: {
                curso: null,
                apellidos: null,
                lectivo: null,
                nombres: null,
                sexo: null,
                dni: null,
                fecha_de_nacimiento: null,
                lugar_de_nacimiento: null,
                nacionalidad: null,
                domicilio: null
            },
            select: {
                sexos: ['M', 'F'],
                cursos_disponibles: [],
                tipos_documento: ['DNI', 'LC', 'LE'],
                posesion_documento: ['Posee', 'En Trámite', 'No Posee'],
                estado_documento: ['Bueno', 'Malo']
            }
        }
    },
    methods: {
        getCursos() {
            this.loading.cursos = true;

            var request = {
                url: `/api/cursos?establecimiento_id=${this.establecimiento.id}`,
                handler: {
                    "200": (response) => {
                        this.select.cursos_disponibles = this.mapCursos(response.data);
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
        establecimiento() {
            return this.$store.state.establecimiento
        },
        theme_color() {
            return this.$route.meta.color || "primary";
        }
    },
    created() {
        this.getCursos();
    }
}
</script>

<style scoped>

</style>
