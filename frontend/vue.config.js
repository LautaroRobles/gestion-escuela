module.exports = {
	"transpileDependencies": [
		"vuetify"
	],
	"publicPath": "/gestion-escuela/",
	devServer: {
		proxy: {
			'^/gestion-escuela/api': {
                target: 'http://localhost:80',
                changeOrigin: true
			}
		}
	}
}