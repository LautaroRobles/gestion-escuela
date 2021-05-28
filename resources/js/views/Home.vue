<template>
    <v-container fill-height fluid class="pt-md-12 px-md-12">
        <v-row justify="center">
            <v-col>
                <v-hover>
                    <template v-slot:default="{ hover }">
                        <v-card>
                            <div class="d-flex">
                                <v-img :max-width="$vuetify.breakpoint.xsOnly ? 100 : 200" src="https://drive.google.com/uc?export=view&id=1ZhX1uyyrYsE508onGFzqZ05m1J1qgK2h"></v-img>
                                <div class="w-100">
                                    <v-card-title>Establecimiento</v-card-title>
                                    <v-card-text>
                                        <p>Escuela: {{establecimiento.nombre}}</p>
                                        <p>Dirección: {{establecimiento.direccion}}</p>
                                        <p>Teléfono: {{establecimiento.telefono}}</p>
                                    </v-card-text>
                                    <v-fade-transition>
                                        <v-overlay
                                            v-if="hover"
                                            absolute
                                            color="primary lighten-3"
                                        >
                                            <v-btn color="primary" dark to="/establecimiento">VER ESTABLECIMIENTO</v-btn>
                                        </v-overlay>
                                    </v-fade-transition>
                                </div>
                            </div>

                        </v-card>
                    </template>
                </v-hover>
            </v-col>
        </v-row>
        <v-row>
            <v-col class="col-12 col-sm-6 col-md-4 col-xl-3">
                <v-hover>
                    <template v-slot:default="{ hover }">
                        <v-card>
                            <!--
                            <v-img src="https://image.freepik.com/free-vector/teacher-students-wearing-face-mask-class_52683-46993.jpg"></v-img>
                            -->
                            <v-img src="https://image.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg"></v-img>
                            <v-card-title color="orange">
                                Alumnos
                            </v-card-title>
                            <v-data-table
                                class="pb-2"
                                :headers="alumnos.headers"
                                :items="alumnos.items"
                                hide-default-footer
                                disable-sort
                            ></v-data-table>
                            <v-fade-transition>
                                <v-overlay
                                    v-if="hover"
                                    absolute
                                    color="orange lighten-3"
                                >
                                    <v-btn color="orange" dark to="/alumnos">IR A ALUMNOS</v-btn>
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
export default {
    data() {
        return {
            alumnos: {
                headers: [
                    {text: 'Matrícula', value: 'matricula', width: '50%'},
                    {text: 'Total', value: 'total', align: 'center', width: '50%'},
                    {text: 'Varones', value: 'varones', align: 'center'},
                    {text: 'Mujeres', value: 'mujeres', align: 'center'}
                ],
                items: [
                    {
                        matricula: 'Ambos turnos',
                        total: '800',
                        varones: '400',
                        mujeres: '400'
                    },
                    {
                        matricula: 'Turno Mañana',
                        total: '400',
                        varones: '200',
                        mujeres: '200'
                    },
                    {
                        matricula: 'Turno Tarde',
                        total: '400',
                        varones: '200',
                        mujeres: '200'
                    }
                ],
            }
        }
    },
    computed: {
        establecimiento() {
            return this.$store.state.establecimiento;
        }
    }
}
</script>

<style>

</style>
