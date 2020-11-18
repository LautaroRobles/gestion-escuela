<template>
	<v-container grid-list-xs>
		<p>{{info}}</p>
	</v-container>
</template>

<script>
export default {
	data() {
		return {
			info: ""
		}
	},
	mounted() {
		this.$http.get('/api/alumnos').then((response) => {
			this.info = response.data;
		})
	}
}
</script>

<style>

</style>