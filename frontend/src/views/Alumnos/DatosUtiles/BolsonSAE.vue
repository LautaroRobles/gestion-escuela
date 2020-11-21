<template>
    <div>
		<v-card-title primary-title>
			<v-text-field
                class="mr-5"
				v-model="search"
				append-icon="mdi-magnify"
				label="Buscar"
				single-line
				hide-details
			></v-text-field>
			<v-checkbox
				v-model="toggleHermanos"
				label="Hermanos"
				hide-details
            ></v-checkbox>
		</v-card-title>
		<v-data-table
			:loading="loading"
			:sortBy="'id'"
			:headers="headers"
			:items="alumnosTable"
			:items-per-page="25"
			:search="search"
			:footer-props="{
				itemsPerPageOptions: [10,25,50,100,-1]
			}"
		></v-data-table>
    </div>
</template>

<script>
import requester from '@/utils/requester'

export default {
    data() {
		return {
			sheet: "1J0cev_falXxmrzSXdBlhYLYMAFhdYgr4QYZTC2eCZiA",
			api: "AIzaSyA_trodNny9ZU19MyL4MBf99PJJhWWAbOA",
			rango: "A24:Z832",
			loading: true,
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

			requester.get({
				url: `https://content-sheets.googleapis.com/v4/spreadsheets/${this.sheet}/values/${this.rango}?access_token=${this.api}&key=${this.api}`,
				handler: {
					success: (response) => {
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
					},
					error: (response) => {
						console.log(response);
					},
					always: () => {
						this.loading = false;
					} 
				}
			})
			/*
			axios.get(`https://content-sheets.googleapis.com/v4/spreadsheets/${this.sheet}/values/${this.rango}?access_token=${this.api}&key=${this.api}`)
            .then((response) => {
				console.log(response)
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
			*/
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

</style>