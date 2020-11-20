<template>
	<v-container grid-list-xs class="grey lighten-3" fill-height fluid>
		<v-container grid-list-xs>
			<v-row>
				<v-col cols="3" :style="navigationColStyle">
					<v-card
						class="overflow-hidden"
					>
						<v-navigation-drawer
							:permanent="!$vuetify.breakpoint.mobile"
							:fixed="$vuetify.breakpoint.mobile"
							width="100hw"
							v-model="drawer"
						>
							<v-subheader>Acciones de Alumnos</v-subheader>
							<v-divider></v-divider>
							<v-list dense>
								<v-list-item-group>
									<template v-for="(item, key) in menuItems">
										<v-list-item 
											:key="key"
											:to="item.to"
										>
											<v-list-item-icon>
												<v-icon v-text="item.icon"></v-icon>
											</v-list-item-icon>
											<v-list-item-content>
												<v-list-item-title v-text="item.text"></v-list-item-title>
											</v-list-item-content>
										</v-list-item>
									</template>
								</v-list-item-group>
							</v-list>
						</v-navigation-drawer>
					</v-card>
				</v-col>
				<v-col>
					<v-card 
						class="overflow-hidden"
						min-height="70vh"
					>
						<v-fade-transition mode="out-in">
							<router-view :toggleDrawer="toggleDrawer"></router-view>
						</v-fade-transition>
					</v-card>
				</v-col>
			</v-row>
		</v-container>
	</v-container>
</template>

<script>
export default {
	data() {
		return {
			menuItems: [
				{text: 'Ver Listado', icon: 'mdi-database', to: '/alumnos/listado'},
				{text: 'Entrados y Salidos', icon: 'mdi-list-status', to: '/alumnos/entradossalidos'},
				{text: 'Ingresar Alumno', icon: 'mdi-plus', to: '/alumnos/ingresar'},
				{text: 'Sacar Alumno', icon: 'mdi-minus', to: '/alumnos/eliminar'}
			],
			drawer: null
		}
	},
	methods: {
		toggleDrawer() {
			this.drawer = !this.drawer;
		}
	},
	computed: {
		navigationColStyle() {
			if(this.$vuetify.breakpoint.mobile) {
				return "position: absolute";
			}
			return "position: relative";
		}
	},
}
</script>
