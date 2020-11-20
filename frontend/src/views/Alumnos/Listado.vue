<template>
	<v-card>
		<v-toolbar dark color="purple">
			<v-app-bar-nav-icon @click="toggleDrawer"></v-app-bar-nav-icon>
			<v-toolbar-title>Listado de alumnos</v-toolbar-title>
			<v-spacer></v-spacer>
			<v-checkbox
				v-model="toggleHermanos"
				label="Hermanos"
				hide-details
            ></v-checkbox>
		</v-toolbar>
		<v-card-title primary-title>
			<v-text-field
				v-model="search"
				append-icon="mdi-magnify"
				label="Buscar"
				single-line
				hide-details
			></v-text-field>
		</v-card-title>
		<v-data-table
			dense
			:sortBy="'id'"
			:headers="headers"
			:items="alumnosTable"
			:items-per-page="10"
			:search="search"
			:loading="loading"
			:footer-props="{
				itemsPerPageOptions: [10,25,50,100,-1]
			}"
		></v-data-table>
	</v-card>
</template>

<script>
import axios from 'axios'

export default {
	props: {
		toggleDrawer: Function
	},
	data() {
		return {
			sheet: "1J0cev_falXxmrzSXdBlhYLYMAFhdYgr4QYZTC2eCZiA",
			api: "AIzaSyA_trodNny9ZU19MyL4MBf99PJJhWWAbOA",
			rango: "A24:Z832",
			loading: false,
			headers: [
				{ text: "N°", value: "id"},
				{ text: "Curso", value: "curso"},
				{ text: "Alumno", value: "nombreCompleto" },
				{ text: "Direccion", value: "calle" },
				{ text: "Adulto", value: "adulto" },
			],
			search: "",
			toggleHermanos: false,
			alumnos: [],
			alumnosTable: [],
			alumnosHermanos: []
		}
	},
	methods: {
		getHermanos() {
			this.loading = true;

			axios.get(`https://content-sheets.googleapis.com/v4/spreadsheets/${this.sheet}/values/${this.rango}?access_token=${this.api}&key=${this.api}`)
            .then((response) => {
				this.alumnos = response.data.values.map(alumno => {
					return {
						id: alumno[0],
						curso: alumno[3],
						nombreCompleto: `${alumno[4]}, ${alumno[5]} ${alumno[6]}`,
						calle: `${alumno[22]} ${alumno[23]}`,
						adulto: `${alumno[12]} ${alumno[13]} ${alumno[14]}` 
					}
				});
				this.alumnosTable = this.alumnos;
				this.buscarHermanos();
            })
            .catch((error) => console.log(error))
            .then(() => {
                this.loading = false;
            })
		},
		buscarHermanos() {
			var alumnosOrdenados = this.alumnos.sort((alumnoA, alumnoB) => {
				if(alumnoA.calle < alumnoB.calle) { return -1; }
				if(alumnoA.calle > alumnoB.calle) { return 1; }
				return 0;
			});
			var alumnosFiltrados = [];
			var found = false;

			for (let i = 0; i < alumnosOrdenados.length - 1; i++) {
				if (alumnosOrdenados[i].calle == alumnosOrdenados[i + 1].calle) {
					alumnosFiltrados.push(alumnosOrdenados[i]);
					found = true;
				} else if (found) {
					alumnosFiltrados.push(alumnosOrdenados[i]);
					found = false;
				}
			}
			this.alumnosHermanos = alumnosFiltrados;
		}
	},
	mounted() {
		this.getHermanos();
	},
	watch: {
		toggleHermanos(toggle) {
			toggle ? this.alumnosTable = this.alumnosHermanos : this.alumnosTable = this.alumnos
		}
	}
}
</script>

<style>
.v-data-table-header th {
	white-space: nowrap;
}
</style>