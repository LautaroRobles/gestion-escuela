(function(t){function e(e){for(var r,a,u=e[0],c=e[1],s=e[2],l=0,d=[];l<u.length;l++)a=u[l],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&d.push(o[a][0]),o[a]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(t[r]=c[r]);p&&p(e);while(d.length)d.shift()();return i.push.apply(i,s||[]),n()}function n(){for(var t,e=0;e<i.length;e++){for(var n=i[e],r=!0,a=1;a<n.length;a++){var u=n[a];0!==o[u]&&(r=!1)}r&&(i.splice(e--,1),t=c(c.s=n[0]))}return t}var r={},a={app:0},o={app:0},i=[];function u(t){return c.p+"js/"+({}[t]||t)+"."+{"chunk-2d0a3ac5":"bdb75d2c","chunk-2d212c20":"374d596e","chunk-a377e92a":"4b5f0297"}[t]+".js"}function c(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,c),n.l=!0,n.exports}c.e=function(t){var e=[],n={"chunk-a377e92a":1};a[t]?e.push(a[t]):0!==a[t]&&n[t]&&e.push(a[t]=new Promise((function(e,n){for(var r="css/"+({}[t]||t)+"."+{"chunk-2d0a3ac5":"31d6cfe0","chunk-2d212c20":"31d6cfe0","chunk-a377e92a":"93882bf1"}[t]+".css",o=c.p+r,i=document.getElementsByTagName("link"),u=0;u<i.length;u++){var s=i[u],l=s.getAttribute("data-href")||s.getAttribute("href");if("stylesheet"===s.rel&&(l===r||l===o))return e()}var d=document.getElementsByTagName("style");for(u=0;u<d.length;u++){s=d[u],l=s.getAttribute("data-href");if(l===r||l===o)return e()}var p=document.createElement("link");p.rel="stylesheet",p.type="text/css",p.onload=e,p.onerror=function(e){var r=e&&e.target&&e.target.src||o,i=new Error("Loading CSS chunk "+t+" failed.\n("+r+")");i.code="CSS_CHUNK_LOAD_FAILED",i.request=r,delete a[t],p.parentNode.removeChild(p),n(i)},p.href=o;var f=document.getElementsByTagName("head")[0];f.appendChild(p)})).then((function(){a[t]=0})));var r=o[t];if(0!==r)if(r)e.push(r[2]);else{var i=new Promise((function(e,n){r=o[t]=[e,n]}));e.push(r[2]=i);var s,l=document.createElement("script");l.charset="utf-8",l.timeout=120,c.nc&&l.setAttribute("nonce",c.nc),l.src=u(t);var d=new Error;s=function(e){l.onerror=l.onload=null,clearTimeout(p);var n=o[t];if(0!==n){if(n){var r=e&&("load"===e.type?"missing":e.type),a=e&&e.target&&e.target.src;d.message="Loading chunk "+t+" failed.\n("+r+": "+a+")",d.name="ChunkLoadError",d.type=r,d.request=a,n[1](d)}o[t]=void 0}};var p=setTimeout((function(){s({type:"timeout",target:l})}),12e4);l.onerror=l.onload=s,document.head.appendChild(l)}return Promise.all(e)},c.m=t,c.c=r,c.d=function(t,e,n){c.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},c.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},c.t=function(t,e){if(1&e&&(t=c(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(c.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)c.d(n,r,function(e){return t[e]}.bind(null,r));return n},c.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return c.d(e,"a",e),e},c.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},c.p="/",c.oe=function(t){throw console.error(t),t};var s=window["webpackJsonp"]=window["webpackJsonp"]||[],l=s.push.bind(s);s.push=e,s=s.slice();for(var d=0;d<s.length;d++)e(s[d]);var p=l;i.push([0,"chunk-vendors"]),n()})({0:function(t,e,n){t.exports=n("56d7")},"56d7":function(t,e,n){"use strict";n.r(e);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("2b0e"),a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-app",[n("Navigation"),n("v-main",[n("v-fade-transition",{attrs:{mode:"out-in"}},[n("router-view")],1)],1)],1)},o=[],i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("v-navigation-drawer",{attrs:{app:""},model:{value:t.drawer,callback:function(e){t.drawer=e},expression:"drawer"}},[n("v-list-item",[n("v-list-item-content",[n("v-list-item-title",{staticClass:"title"},[t._v(" Escuela 23 ")]),n("v-list-item-subtitle",[t._v(" Sistema de gestión ")])],1)],1),n("v-divider"),n("v-list",{attrs:{dense:"",nav:""}},[n("v-list-item-group",[t._l(t.items,(function(e,r){return[n("v-list-item",{key:r,attrs:{to:e.to}},[n("v-list-item-icon",[n("v-icon",{domProps:{textContent:t._s(e.icon)}})],1),n("v-list-item-content",[n("v-list-item-title",{domProps:{textContent:t._s(e.text)}})],1)],1)]}))],2)],1)],1),n("v-app-bar",{attrs:{app:"",color:"deep-purple",dark:""}},[n("v-app-bar-nav-icon",{on:{click:function(e){t.drawer=!t.drawer}}}),n("v-toolbar-title",[t._v(t._s(t.appbarName))])],1)],1)},u=[],c=(n("b0c0"),{data:function(){return{items:[{text:"Inicio",icon:"mdi-home",to:"/"},{text:"Alumnos",icon:"mdi-school",to:"/alumnos/listado"},{text:"Maestros",icon:"mdi-teach",to:"/maestros"}],drawer:null}},computed:{appbarName:function(){return this.$route.matched[0]?this.$route.matched[0].name:this.$route.name}}}),s=c,l=n("2877"),d=n("6544"),p=n.n(d),f=n("40dc"),m=n("5bc1"),v=n("ce7e"),h=n("132d"),b=n("8860"),g=n("da13"),y=n("5d23"),w=n("1baa"),k=n("34c3"),_=n("f774"),x=n("2a7f"),V=Object(l["a"])(s,i,u,!1,null,null,null),O=V.exports;p()(V,{VAppBar:f["a"],VAppBarNavIcon:m["a"],VDivider:v["a"],VIcon:h["a"],VList:b["a"],VListItem:g["a"],VListItemContent:y["a"],VListItemGroup:w["a"],VListItemIcon:k["a"],VListItemSubtitle:y["b"],VListItemTitle:y["c"],VNavigationDrawer:_["a"],VToolbarTitle:x["a"]});var j={name:"App",components:{Navigation:O}},E=j,L=n("7496"),A=n("0789"),C=n("f6c4"),I=Object(l["a"])(E,a,o,!1,null,null,null),P=I.exports;p()(I,{VApp:L["a"],VFadeTransition:A["b"],VMain:C["a"]});var S=n("f309");r["a"].use(S["a"]);var T=new S["a"]({}),N=(n("d3b7"),n("8c4f")),$=n("bb51");r["a"].use(N["a"]);var M=[{path:"/",name:"Inicio",component:$["default"]},{path:"/alumnos",name:"Alumnos",component:function(){return n.e("chunk-a377e92a").then(n.bind(null,"ff47"))},children:[{path:"listado",name:"Listado",component:function(){return n.e("chunk-2d212c20").then(n.bind(null,"aa7a"))}},{path:"entradossalidos",name:"Entrados y Salidos",component:function(){return n.e("chunk-2d0a3ac5").then(n.bind(null,"02d1"))}}]}],B=new N["a"]({mode:"history",base:"/",routes:M}),D=B;r["a"].config.productionTip=!1,new r["a"]({vuetify:T,router:D,render:function(t){return t(P)}}).$mount("#app")},"7ad4":function(t,e,n){"use strict";var r=n("9cae"),a=n.n(r);e["default"]=a.a},"7b00":function(t,e,n){"use strict";n.d(e,"a",(function(){return r})),n.d(e,"b",(function(){return a}));var r=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("v-container",{attrs:{"grid-list-xs":""}},[r("img",{attrs:{alt:"Vue logo",src:n("cf05")}})])},a=[]},"9cae":function(t,e){},bb51:function(t,e,n){"use strict";var r=n("7b00"),a=n("7ad4"),o=n("2877"),i=n("6544"),u=n.n(i),c=n("a523"),s=Object(o["a"])(a["default"],r["a"],r["b"],!1,null,null,null);e["default"]=s.exports,u()(s,{VContainer:c["a"]})},cf05:function(t,e,n){t.exports=n.p+"img/logo.82b9c7a5.png"}});
//# sourceMappingURL=app.d4ff1d5f.js.map