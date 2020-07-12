<template>
	<div class="container">
			<h1 class="title">Mensajes Push</h1>
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
                            <!-- <h3>Enviar a empleados</h3> -->
<!--                       
                                    <select  required="" name="id_empresa" class="form-control" v-model="id_empresa">
                                     <option  class="form-control" selected="true" value="todas" >#Todas</option>
                                    <option v-for="thing in empresas" v-bind:value="thing.id">{{thing.codigo_unico}} - {{ thing.nombre }} </option>
                                    </select> -->
                                    <br>
                                    <br>
                                    <button v-on:click="addKeep" class="btn btn-danger-lg">
			Enviar
		</button>
           
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
     	
    },
    data: function(){
     	return {
			mensajetext:'',
     		id_empresas:'todas',
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
            window.location.href = 'enviarpush/'+this.mensajetext;
    		//

    	}
    	
    }
}
</script>