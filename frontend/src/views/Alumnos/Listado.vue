<template>
	<v-card>
		<v-toolbar dark color="orange">
			<v-app-bar-nav-icon @click="toggleDrawer"></v-app-bar-nav-icon>
			<v-toolbar-title>Listado de alumnos</v-toolbar-title>
		</v-toolbar>
	</v-card>
</template>

<script>
export default {
	props: {
		toggleDrawer: Function
	},
}
</script>

<style>
.v-data-table-header th {
	white-space: nowrap;
}
</style>