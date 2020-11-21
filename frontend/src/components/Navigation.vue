<template>
	<div>
		<v-navigation-drawer
			app
			v-model="drawer"
		>
			<v-list-item>
				<v-list-item-content>
					<v-list-item-title class="title">
						Escuela 23
					</v-list-item-title>
					<v-list-item-subtitle>
						Sistema de gestión
					</v-list-item-subtitle>
				</v-list-item-content>
			</v-list-item>
			<v-divider></v-divider>
			<v-list dense nav>
				<v-list-item-group>
					<template v-for="(item, key) in items">
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
	
		<v-app-bar
			app
			dark
			:color="color"
			shrink-on-scroll
			fade-img-on-scroll
			src="@/assets/escuela/appbar.png"
		>
			<template v-slot:img="{ props }">
				<v-img
					v-bind="props"
					:gradient="gradient"
				></v-img>
			</template>
			<v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
			<v-toolbar-title>{{appbarName}}</v-toolbar-title>

			<v-spacer></v-spacer>

			<v-menu bottom left :close-on-content-click="false">
				<template v-slot:activator="{ on, attrs }">
					<v-btn
						icon
						v-bind="attrs"
						v-on="on"
					>
						<v-icon>mdi-dots-vertical</v-icon>
					</v-btn>
				</template>

				<v-card>
					<v-card-title primary-title>
						Opciones
					</v-card-title>
					<v-card-text>
						<v-switch
							inset
							v-model="$vuetify.theme.dark"
							label="Modo Oscuro"
						></v-switch>
					</v-card-text>
				</v-card>
			</v-menu>
		</v-app-bar>
	</div>
</template>

<script>
export default {
	data() {
		return {
			items: [
				{text: 'Inicio', icon: 'mdi-home', to: '/'},
				{text: 'Alumnos', icon: 'mdi-school', to: '/alumnos/listado'},
				{text: 'Maestros', icon: 'mdi-teach', to: '/maestros'}
			],
			drawer: null
		}
	},
	computed: {
		appbarName() {
			if(this.$route.matched[0]) {
				return this.$route.matched[0].name;
			}
			return this.$route.name;
		},
		gradient() {
			if(this.$vuetify.theme.dark) {
				return "to top right, #004D40, #004D4099";
			} else {
				return "to top right, #009688, #004D4099";
			}
		},
		color() {
			if(this.$vuetify.theme.dark) {
				return "teal darken-2";
			} else {
				return "teal";
			}
		}
	}
}
</script>