<template>
    <v-card>
		<v-toolbar dark color="green">
			<v-app-bar-nav-icon @click="toggleDrawer"></v-app-bar-nav-icon>
			<v-toolbar-title>Datos Utiles</v-toolbar-title>
            <template v-slot:extension>
                <v-tabs color="light">
                    <template v-for="(item, key) in tabItems">
                        <v-tab :key="key" :to="item.to">{{item.text}}</v-tab>
                    </template>
                </v-tabs>
            </template>
		</v-toolbar>
        <v-fade-transition mode="out-in">
            <router-view></router-view>
        </v-fade-transition>
	</v-card>
</template>

<script>
export default {
    props: {
        toggleDrawer: Function
    },
    data() {
        return {
			tabItems: [
				{text: 'Bolson SAE', icon: 'mdi-database', to: '/alumnos/utiles/sae'},
				{text: 'Datos ABC', icon: 'mdi-lightbulb', to: '/alumnos/utiles/abc'},
			],
        }
    }
}
</script>

<style>

</style>