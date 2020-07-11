<template>
	<div class="container">
			<h1 class="title">Mensajes SMS</h1>
	<br>
<div class="row">
	<div class="col-12">
		<textarea  class="form-control no-resize" rows="4" cols="50" v-model="mensajetext"></textarea>		
	</div>
		
</div>
<br>
<br>
<br>
<div class="row">
        <div class="col-4">
                    <h5>Filtro empresas</h5>
                        <select  required="" name="id_empresa" class="form-control" v-model="id_empresa">
                            <option  class="form-control" selected="true" value="todas" >#Todas</option>
                            <option class="form-control" v-for="thing in empresas" v-bind:value="thing.id">{{thing.codigo_unico}} - {{ thing.nombre }} </option>
                            </select>
                            <br>
                            <br>
                            <button v-on:click="addKeep" class="btn btn-danger-lg">
                Enviar
            </button>
            
    </div>
    <div class="col-4">
                            <h5>Filtro ciudad</h5>
                                   <select  required="" name="id_empresa" class="form-control" v-model="id_ciudades">
                                    <option  class="form-control" selected="true" value="todas" >#Todas</option>
                                    <option class="form-control" v-for="thing in ciudades" v-bind:value="thing.id">{{thing.descripcion}}</option>
                                    </select>
                                    <br>
                                    <br>
                                   
           
</div>
  <div class="col-4">
                            <h5>Filtro género</h5>
                                   <select  required="" name="id_empresa" class="form-control" v-model="genero">
                                    <option  class="form-control" selected="true" value="todas" >#Todas</option>
                                    <option  class="form-control"  value="masculino" >Masculino</option>
                                    <option  class="form-control"  value="femenino" >Femenino</option>
                                    
                                    </select>
                                    <br>
                                    <br>
                                   
           
</div>
</div>


	</div>
</template>
<script>
	 import Vue from 'vue';
    import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
Vue.use(VueAxios, axios);
export default
{
    mounted(){
    	Vue.axios.get('empresassms')
        .then((response)=>{
        this.empresas = response.data;
        this.empresas= this.empresas.data; 
        })
     	Vue.axios.get('ciudadessms')
        .then((response)=>{
        this.ciudades = response.data;
        this.ciudades= this.ciudades.data; 
        })
    },
    data: function(){
		 return {
		 	genero:'todas',
            ciudades:'todas',
            id_ciudades:'todas',
            asunto:'',
            mensajetext:'',
     		id_empresa:'todas',
     		empresas: [
     		],
     		enviar: [
     		{
     			codigo_unico:'' 
               
     		}
     		
     		],
     		errors:''
                
     	}
 	},
 	methods:
    {
    	addKeep: function() {
 			if (this.id_empresa == "todas") {
                console.log(this.id_empresa);
            }else{
                console.log(this.id_empresa);

			}
			console.log("mensajetext",this.mensajetext)
			if(this.mensajetext){

            window.location.href = 'enviarsms/'+this.id_empresa+'/'+this.id_ciudades+'/'+this.genero+'/'+this.mensajetext;

			}else{
				this.mensajetext = ''; 
			}
    		//

    	}
    	
    }
}
</script>