<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
    >
      <v-btn text to="/">
        <span>Inicio</span>
      </v-btn>
      <v-btn text to="/about">
        <span>About</span>
      </v-btn>
    </v-app-bar>

    <v-main>
      <v-expand-transition>
        <router-view/>
      </v-expand-transition>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
};
</script>
