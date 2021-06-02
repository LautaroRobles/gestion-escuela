<template>
    <v-slide-y-transition>
        <v-row v-if="alumno">
            <v-col class="col-12 col-sm-4">
                <v-card>
                    <v-card-text>
                        <p>Estado actual</p>
                        <v-row dense>
                            <v-col :style="$vuetify.breakpoint.md ? 'max-width: 90px' : ''">
                                <v-select
                                    outlined
                                    dense
                                    value="1°A"
                                    :items="['1°A', '1°B']"
                                    label="Curso"
                                ></v-select>
                            </v-col>
                            <v-col>
                                <v-select
                                    outlined
                                    dense
                                    value="Repitente"
                                    :items="['Promovido', 'Repitente']"
                                    label="Estado"
                                ></v-select>
                            </v-col>
                        </v-row>
                        <v-btn
                            text
                            block
                            :color="theme_color"
                        >
                            Historial
                        </v-btn>
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col>
                <v-card>
                    <v-card-text>
                        <v-row dense>
                            <v-col>
                                <v-text-field
                                    label="Apellidos"
                                    v-model="alumno.apellidos"
                                ></v-text-field>
                            </v-col>
                            <v-col>
                                <v-text-field
                                    label="Nombres"
                                    v-model="alumno.nombres"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row dense>
                            <v-col cols="12">
                                <v-text-field
                                    hide-details
                                    label="DNI"
                                    v-model="alumno.dni.nro_documento"
                                ></v-text-field>
                            </v-col>
                            <v-col style="max-width: 50px">
                                <v-text-field
                                    label="Sexo"
                                    v-model="alumno.sexo"
                                ></v-text-field>
                            </v-col>
                            <v-col style="max-width: 50px">
                                <v-text-field
                                    label="Edad"
                                ></v-text-field>
                            </v-col>
                            <v-col>
                                <v-text-field
                                    label="Fecha de nacimiento"
                                    v-model="alumno.fecha_de_nacimiento"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row dense>
                            <v-col>
                                <v-text-field
                                    prepend-icon="mdi-home"
                                    label="Calle"
                                    v-model="alumno.domicilio.calle"
                                ></v-text-field>
                            </v-col>
                            <v-col style="max-width: 100px">
                                <v-text-field
                                    label="Número"
                                    v-model="alumno.domicilio.numero"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row dense v-for="telefono in alumno.telefonos">
                            <v-col>
                                <v-text-field
                                    prepend-icon="mdi-phone"
                                    label="Telefono"
                                    v-model="telefono.telefono"
                                ></v-text-field>
                            </v-col>
                            <v-col>
                                <v-text-field
                                    label="Descripcion"
                                    v-model="telefono.descripcion"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-slide-y-transition>
</template>

<script>
export default {
    props: {
        alumno: Object
    },
    data() {
        return {

        }
    },
    computed: {
        theme_color() {
            return this.$route.meta.color || "primary";
        }
    },
}
</script>

<style scoped>

</style>
