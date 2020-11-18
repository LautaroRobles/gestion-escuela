module.exports = {
	"transpileDependencies": [
		"vuetify"
	],
	"publicPath": "/gestion-escuela/",
	devServer: {
		proxy: {
			'^/api': {
                target: 'http://localhost:80/gestion-escuela',
                changeOrigin: true
			}
		}
	}
}