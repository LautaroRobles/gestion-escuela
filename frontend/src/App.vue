<template>
    <v-app>
		<Navigation/>
        <v-main>
            <v-fade-transition mode="out-in">
                <router-view/>
            </v-fade-transition>
        </v-main>
    </v-app>
</template>

<script>
import Navigation from './components/Navigation.vue'
export default {
	name: 'App',
	components: {
		Navigation: Navigation
	}
};
</script>
