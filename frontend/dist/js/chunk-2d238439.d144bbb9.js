(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d238439"],{ff47:function(t,e,n){"use strict";n.r(e);var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-container",{staticClass:"grey lighten-3",attrs:{"grid-list-xs":"","fill-height":"",fluid:""}},[n("v-container",{attrs:{"grid-list-xs":""}},[n("v-row",[n("v-col",{style:t.navigationColStyle,attrs:{cols:"3"}},[n("v-card",{staticClass:"overflow-hidden"},[n("v-navigation-drawer",{attrs:{permanent:!t.$vuetify.breakpoint.mobile,fixed:t.$vuetify.breakpoint.mobile,width:"100hw"},model:{value:t.drawer,callback:function(e){t.drawer=e},expression:"drawer"}},[n("v-subheader",[t._v("Acciones de Alumnos")]),n("v-divider"),n("v-list",{attrs:{dense:""}},[n("v-list-item-group",[t._l(t.menuItems,(function(e,a){return[n("v-list-item",{key:a,attrs:{to:e.to}},[n("v-list-item-icon",[n("v-icon",{domProps:{textContent:t._s(e.icon)}})],1),n("v-list-item-content",[n("v-list-item-title",{domProps:{textContent:t._s(e.text)}})],1)],1)]}))],2)],1)],1)],1)],1),n("v-col",[n("v-card",{staticClass:"overflow-hidden",attrs:{"min-height":"70vh"}},[n("v-fade-transition",{attrs:{mode:"out-in"}},[n("router-view",{attrs:{toggleDrawer:t.toggleDrawer}})],1)],1)],1)],1)],1)],1)},r=[],i={data:function(){return{menuItems:[{text:"Ver Listado",icon:"mdi-database",to:"/alumnos/listado"},{text:"Entrados y Salidos",icon:"mdi-list-status",to:"/alumnos/entradossalidos"},{text:"Ingresar Alumno",icon:"mdi-plus",to:"/alumnos/ingresar"},{text:"Sacar Alumno",icon:"mdi-minus",to:"/alumnos/eliminar"}],drawer:null}},methods:{toggleDrawer:function(){this.drawer=!this.drawer}},computed:{navigationColStyle:function(){return this.$vuetify.breakpoint.mobile?"position: absolute":"position: relative"}}},o=i,l=n("2877"),c=n("6544"),s=n.n(c),u=n("b0af"),d=(n("4160"),n("caad"),n("13d5"),n("45fc"),n("4ec9"),n("a9e3"),n("b64b"),n("d3b7"),n("ac1f"),n("3ca3"),n("5319"),n("2ca0"),n("159b"),n("ddb0"),n("ade3")),f=n("5530"),g=(n("4b85"),n("2b0e")),v=n("d9f7"),b=n("80d2"),p=["sm","md","lg","xl"],m=function(){return p.reduce((function(t,e){return t[e]={type:[Boolean,String,Number],default:!1},t}),{})}(),y=function(){return p.reduce((function(t,e){return t["offset"+Object(b["D"])(e)]={type:[String,Number],default:null},t}),{})}(),j=function(){return p.reduce((function(t,e){return t["order"+Object(b["D"])(e)]={type:[String,Number],default:null},t}),{})}(),w={col:Object.keys(m),offset:Object.keys(y),order:Object.keys(j)};function h(t,e,n){var a=t;if(null!=n&&!1!==n){if(e){var r=e.replace(t,"");a+="-".concat(r)}return"col"!==t||""!==n&&!0!==n?(a+="-".concat(n),a.toLowerCase()):a.toLowerCase()}}var O=new Map,S=g["a"].extend({name:"v-col",functional:!0,props:Object(f["a"])(Object(f["a"])(Object(f["a"])(Object(f["a"])({cols:{type:[Boolean,String,Number],default:!1}},m),{},{offset:{type:[String,Number],default:null}},y),{},{order:{type:[String,Number],default:null}},j),{},{alignSelf:{type:String,default:null,validator:function(t){return["auto","start","end","center","baseline","stretch"].includes(t)}},tag:{type:String,default:"div"}}),render:function(t,e){var n=e.props,a=e.data,r=e.children,i=(e.parent,"");for(var o in n)i+=String(n[o]);var l=O.get(i);return l||function(){var t,e;for(e in l=[],w)w[e].forEach((function(t){var a=n[t],r=h(e,t,a);r&&l.push(r)}));var a=l.some((function(t){return t.startsWith("col-")}));l.push((t={col:!a||!n.cols},Object(d["a"])(t,"col-".concat(n.cols),n.cols),Object(d["a"])(t,"offset-".concat(n.offset),n.offset),Object(d["a"])(t,"order-".concat(n.order),n.order),Object(d["a"])(t,"align-self-".concat(n.alignSelf),n.alignSelf),t)),O.set(i,l)}(),t(n.tag,Object(v["a"])(a,{class:l}),r)}}),C=n("a523"),x=n("ce7e"),V=n("0789"),k=n("132d"),I=n("8860"),L=n("da13"),D=n("5d23"),N=n("1baa"),_=n("34c3"),A=n("f774"),B=(n("99af"),n("2532"),["sm","md","lg","xl"]),E=["start","end","center"];function $(t,e){return B.reduce((function(n,a){return n[t+Object(b["D"])(a)]=e(),n}),{})}var G=function(t){return[].concat(E,["baseline","stretch"]).includes(t)},J=$("align",(function(){return{type:String,default:null,validator:G}})),M=function(t){return[].concat(E,["space-between","space-around"]).includes(t)},P=$("justify",(function(){return{type:String,default:null,validator:M}})),T=function(t){return[].concat(E,["space-between","space-around","stretch"]).includes(t)},F=$("alignContent",(function(){return{type:String,default:null,validator:T}})),R={align:Object.keys(J),justify:Object.keys(P),alignContent:Object.keys(F)},W={align:"align",justify:"justify",alignContent:"align-content"};function q(t,e,n){var a=W[t];if(null!=n){if(e){var r=e.replace(t,"");a+="-".concat(r)}return a+="-".concat(n),a.toLowerCase()}}var z=new Map,H=g["a"].extend({name:"v-row",functional:!0,props:Object(f["a"])(Object(f["a"])(Object(f["a"])({tag:{type:String,default:"div"},dense:Boolean,noGutters:Boolean,align:{type:String,default:null,validator:G}},J),{},{justify:{type:String,default:null,validator:M}},P),{},{alignContent:{type:String,default:null,validator:T}},F),render:function(t,e){var n=e.props,a=e.data,r=e.children,i="";for(var o in n)i+=String(n[o]);var l=z.get(i);return l||function(){var t,e;for(e in l=[],R)R[e].forEach((function(t){var a=n[t],r=q(e,t,a);r&&l.push(r)}));l.push((t={"no-gutters":n.noGutters,"row--dense":n.dense},Object(d["a"])(t,"align-".concat(n.align),n.align),Object(d["a"])(t,"justify-".concat(n.justify),n.justify),Object(d["a"])(t,"align-content-".concat(n.alignContent),n.alignContent),t)),z.set(i,l)}(),t(n.tag,Object(v["a"])(a,{staticClass:"row",class:l}),r)}}),K=n("e0c7"),Q=Object(l["a"])(o,a,r,!1,null,null,null);e["default"]=Q.exports;s()(Q,{VCard:u["a"],VCol:S,VContainer:C["a"],VDivider:x["a"],VFadeTransition:V["c"],VIcon:k["a"],VList:I["a"],VListItem:L["a"],VListItemContent:D["a"],VListItemGroup:N["a"],VListItemIcon:_["a"],VListItemTitle:D["c"],VNavigationDrawer:A["a"],VRow:H,VSubheader:K["a"]})}}]);
//# sourceMappingURL=chunk-2d238439.d144bbb9.js.map