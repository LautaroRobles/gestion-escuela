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
                    <v-form ref="login_form">
                        <v-card-text>
                            <v-text-field
                                label="Nombre de usuario"
                                v-model="username"
                                :rules="rules_username"
                            ></v-text-field>
                            <v-text-field
                                label="Contraseña"
                                :type="showPassword ? 'text' : 'password'"
                                :rules="rules_password"
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
                                type="submit"
                                color="primary"
                                @click.prevent="login"
                            >
                                Continuar
                                <v-icon
                                    right
                                >
                                    mdi-arrow-right
                                </v-icon>
                            </v-btn>
                        </v-card-actions>
                    </v-form>

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
            wrong_credentials: false,

            rules_username: [
                input => input !== "" || "Escriba su nombre de usuario",
                () => !this.wrong_credentials
            ],
            rules_password: [
                input => input !== "" || "Escriba su contraseña",
                () => !this.wrong_credentials || "Usuario y/o contraseña incorrecta"
            ]
        }
    },
    methods: {
        login() {
            // try login in;
            this.loading = true;

            // reset rules
            this.wrong_credentials = false;

            var request = {
                url: "/api/login",
                body: {
                    username: this.username,
                    password: this.password
                },
                handler: {
                    // OK
                    "200": (response) => {
                        var data = response.data;

                        var user = response.data.user;
                        var establecimiento = user.establecimiento;

                        user.token = data.token;
                        delete user.establecimiento;

                        console.log("User", user);
                        console.log("Establecimiento", establecimiento);

                        this.$store.commit('user', user);
                        this.$store.commit('establecimiento', establecimiento);

                        this.$router.push({name: "home"});
                    },
                    "401": (response) => {
                        this.wrong_credentials = true;
                    },
                    default: (response) => {
                        console.log("default thing");
                    },
                    error: (error) => {
                        console.log(error);
                    },
                    always: () => {
                        this.loading = false;
                    }
                }
            }

            RequestHelper.post(request);
        },
        validateForm() {
            this.$refs.login_form.validate()
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
                    return "35%";
            }
        }
    },
    watch: {
        wrong_credentials: 'validateForm'
    }
}
</script>

<style>

</style>
