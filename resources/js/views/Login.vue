<template>
    <v-container fill-height fluid>
        <v-row>
            <v-col align="center">
                <v-card
                    :disabled="loading"
                    class="overflow-hidden"
                    :max-width="loginWidth"
                >
                    <v-toolbar
                        flat
                        color="primary"
                        dark
                    >
                        <v-toolbar-title class="font-weight-light">
                            Iniciar sesión
                        </v-toolbar-title>
                    </v-toolbar>
                    <v-card-text>
                        <v-text-field
                            label="Nombre de usuario"
                            v-model="username"
                        ></v-text-field>
                        <v-text-field
                            label="Contraseña"
                            :type="showPassword ? 'text' : 'password'"
                            v-model="password"
                        >
                            <v-btn icon
                                slot="append"
                                @click="showPassword = !showPassword"
                            ><v-icon>{{showPassword ? 'mdi-eye' : 'mdi-eye-off'}}</v-icon></v-btn>
                        </v-text-field>
                    </v-card-text>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                            color="primary"
                            @click="login"
                        >
                            Continuar
                            <v-icon
                                right
                            >
                                mdi-arrow-right
                            </v-icon>
                        </v-btn>
                    </v-card-actions>
                    
                    <v-snackbar
                        v-model="alert.show"
                        :timeout="5000"
                        absolute
                        bottom
                        left
                    >
                        {{alert.text}}
                    </v-snackbar>
                    <v-overlay 
                        :value="loading"
                        absolute
                    >
                        <v-progress-circular
                            indeterminate
                            size="64"
                        ></v-progress-circular>
                    </v-overlay>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import RequestHelper from '@/utils/RequestHelper'

export default {
    data() {
        return {
            alert: {
                show: false,
                text: ""
            },
            loading: false,

            showPassword: false,

            username: null,
            password: null,
        }
    },
    methods: {
        login() {
            // try login in;
            this.loading = true;

            var request = {
                url: "/api/login",
                body: {
                    username: this.username,
                    password: this.password
                },
                handler: {
                    // OK
                    "200": (response) => {
                        this.$router.push({name: "home"});
                    },
                    "401": (response) => {
                        this.alert.show = true;
                        this.alert.text = "Usuario y/o contraseña incorrectos";
                    },
                    default: (response) => {
                        console.log("default thing");
                    },
                    error: (error) => {
                        console.log(error);
                    },
                    always: () => {
                        this.loading = false;
                        console.log("finished", this.loading);
                    }
                }
            }

            RequestHelper.post(request);
        }
    },
    computed: {
        loginWidth() {
            let breakpoint = this.$vuetify.breakpoint.name;

            switch (breakpoint) {
                case 'xs':
                    return "100%";
                case 'sm':
                    return "75%";
                case 'md':
                    return "50%";
                default:
                    return "35%"
            }
        }
    }
}
</script>

<style>

</style>