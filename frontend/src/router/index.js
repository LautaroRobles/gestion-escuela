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
				name: 'Listado Alumnos',
				component: () => import('@/views/Alumnos/Listado') 
			},
			{
				path: 'utiles',
				name: 'Datos Utiles',
				component: () => import('@/views/Alumnos/DatosUtiles'),
				children: [
					{
						path: '',
						redirect: 'sae'	
					},
					{
						path: 'sae',
						name: 'Bolson SAE',
						component: () => import('@/views/Alumnos/DatosUtiles/BolsonSAE')
					},
					{
						path: 'abc',
						name: 'Datos ABC',
						component: () => import('@/views/Alumnos/DatosUtiles/ABC')
					}
				]
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
