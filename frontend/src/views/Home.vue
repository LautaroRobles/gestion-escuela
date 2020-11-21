<template>
	<v-container fill-height fluid align-center justify-center>
		<v-img
			class="background-img"
			src="@/assets/escuela/background.jpg"
			:gradient="gradient"
		/>
		<v-card dark>
			<v-card-title>
				Bienvenido al sistema de gestión de la Escuela 23
			</v-card-title>
			<v-card-text>
				Seleccione alguna opción del menú para comenzar
			</v-card-text>
		</v-card>
		<v-footer
				padless
				absolute
			>
				<v-card
					flat
					tile
					width="100%"
					class="text-center teal darken-2"
				>
					<v-card-text class="white--text">
						Imagen por 
						<a 
							class="white--text"
							href='https://www.freepik.es/vectores/escuela'
							target="_blank"
						>freepik</a>
					</v-card-text>
				</v-card>
			</v-footer>
	</v-container>
</template>

<script>
export default {
	computed: {
		gradient() {
			if(this.$vuetify.theme.dark) {
				return "to top right, #0009, #000f";
			} else {
				return "to top right, #0000, #0009";
			}
		}
	}
}
</script>

<style scoped>
.background-img {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}
</style>
