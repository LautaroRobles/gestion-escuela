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
                        <v-expansion-panels flat>
                            <v-expansion-panel>
                                <v-expansion-panel-header>Otros datos de domicilio</v-expansion-panel-header>
                                <v-expansion-panel-content>
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
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
                    </v-card>
                </v-col>
            </v-row>
            <v-row>
                <v-col>
                    <v-card>
                        <v-card-text>
                            <p>Teléfonos</p>
                            <v-row>
                                <v-col>
                                    <!-- Acá van los telefonos -->
                                    <template v-for="(telefono, index) in alumno.telefonos">
                                        <div class="d-flex">
                                            <v-text-field
                                                class="rounded-0 rounded-l-pill col-4"
                                                dense
                                                outlined
                                                label="Teléfono"
                                                v-model="telefono.telefono"
                                            ></v-text-field>
                                            <v-text-field
                                                class="rounded-0"
                                                dense
                                                outlined
                                                label="Descrición"
                                                v-model="telefono.descripcion"
                                            ></v-text-field>
                                            <v-btn
                                                class="rounded-0 rounded-r-pill fill-height"
                                                style="height: 40px"
                                                :color="theme_color"
                                                outlined
                                                @click="alumno.telefonos.splice(index, 1)"
                                            >
                                                <v-icon>mdi-delete</v-icon>
                                            </v-btn>
                                        </div>
                                    </template>
                                    <v-btn
                                        :color="theme_color"
                                        block
                                        text
                                        @click="alumno.telefonos.push({telefono: '', descripcion: ''})"
                                    >
                                        <v-icon left>mdi-plus</v-icon>
                                        Agregar teléfono
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
            <v-row>
                <v-col class="col-12 col-md-3">
                    <v-card>
                        <v-card-text>
                            <p>Responsables</p>
                            <v-btn
                                :color="theme_color"
                                text
                                block
                            >
                                <v-icon left>mdi-plus</v-icon>
                                Agregar responsable
                            </v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col>
                    <v-card>
                        <v-card-text>
                            <v-select
                                single-line
                                flat
                                class="pt-0"
                                prefix="Datos del "
                                label="Responsable"
                                :items="['Madre', 'Padre', 'Tutor']"
                            ></v-select>
                            <v-row>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Apellidos"
                                    ></v-text-field>
                                </v-col>
                                <v-col>
                                    <v-text-field
                                        outlined
                                        dense
                                        label="Nombres"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <p>Educación</p>
                            <v-row align="center" class="mb-4">
                                <v-col>
                                    <v-select
                                        dense
                                        outlined
                                        hide-details
                                        label="Nivel más alto que cursó"
                                        :items="['Ninguno', 'Primario', 'Secundario', 'Terciario', 'Universitario']"
                                    ></v-select>
                                </v-col>
                                <v-col>
                                    <div class="d-flex align-center">
                                        <div class="mr-4">¿Finalizó?</div>
                                        <v-radio-group
                                            dense
                                            row
                                            hide-details
                                            class="ma-0"
                                        >
                                            <v-radio
                                                label="Si"
                                            ></v-radio>
                                            <v-radio
                                                label="No"
                                            ></v-radio>
                                        </v-radio-group>
                                    </div>
                                </v-col>
                            </v-row>
                            <p>Vive</p>
                            <v-radio-group
                                dense
                                row
                            >
                                <v-radio
                                    label="Si"
                                ></v-radio>
                                <v-radio
                                    label="No"
                                ></v-radio>
                            </v-radio-group>
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
                        <v-expansion-panels flat>
                            <v-expansion-panel>
                                <v-expansion-panel-header>Otros datos de domicilio</v-expansion-panel-header>
                                <v-expansion-panel-content>
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
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
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
                domicilio: null,
                telefonos: [
                    {
                        telefono: "",
                        descripcion: ""
                    }
                ],
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
