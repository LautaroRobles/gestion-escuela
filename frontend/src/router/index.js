import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
	{
		path: '/',
		name: 'Inicio',
		component: Home
	},
	{
		path: '/alumnos',
		name: 'Alumnos',
		component: () => import('@/views/Alumnos.vue'),
		children: [
			{
				path: 'listado',
				name: 'Listado',
				component: () => import('@/views/Alumnos/Listado') 
			},
			{
				path: 'entradossalidos',
				name: 'Entrados y Salidos',
				component: () => import('@/views/Alumnos/EntradosSalidos') 
			}
		]
	}
]

const router = new VueRouter({
	mode: 'history',
	base: process.env.BASE_URL,
	routes
})

export default router
