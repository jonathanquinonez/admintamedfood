<template>
	<div class="container">
	<div class="row">
		<div class="col-3">
			<label>Buscar:</label>
      <input class="form-control" v-model="filters.name.value"/>
		</div>
	</div>

 <v-table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100"
     :data="restringir"
     :filters="filters"
     :currentPage.sync="pagination.current_page"
     :pageSize="5"
     @totalPagesChanged="totalPages = $event">
                <thead slot="head" class="table">
                    <v-tr>
                        <v-th>
                                Nombre comercial
                        </v-th>
                        <v-th>
                                Nit
                        </v-th>
                        <v-th>
                                Razon social
                        </v-th>
                        <v-th>
                                Eliminar
                        </v-th>
                    </v-tr>
                </thead>
                    <tbody slot="body" slot-scope="{displayData}">
                        <v-tr v-for="venta in displayData" :key="venta.id"> 
                            <td>
                                {{ venta.nombre }}
                            </td>
                              <td>
                                {{ venta.nit }}
                            </td>
                              <td >
                                {{ venta.razon_social }}
                            </td>
                            <td>
                              <button class="btn-xs btn-danger" v-on:click="eliminar(venta.id)"><i class="fa fas fa-window-close"></i></button></td>
                        </v-tr>
                    </tbody>
                  </v-table>
                  <smart-pagination style="background: white;"
        :currentPage.sync="pagination.current_page"
        :totalPages="totalPages"
      />

<modals-container/>
	</div>
	
</template>
<script>
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import SmartTable from 'vuejs-smart-table';
import VModal from 'vue-js-modal'
Vue.use(VModal,  { dynamic: true, injectModalsContainer: true })
Vue.use(SmartTable);
Vue.use(VueAxios, axios);
export default {
	props:['id','row'],
	
	mounted() {
			Vue.axios.get('listadorestringir/2')
			        .then((response)=>{
			        console.log(this.restringir = response.data);
			        console.log(this.restringir= this.restringir.data); 
			        })
	},
	name: 'TheBasics',
	data: function(){
        return {
        	id_empresa:this.id,
        	restringir : [],
        	 pagination: {
            'total': 0,
            'current_page': 1,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
            },
            totalPages: 0,
             filters: {
		      name: { value: '', keys: ['nombre','nit','razon_social','fecha_creacion'] }
		    }
        
        }
    },
    methods:{
    	eliminar  : function (id_establecimiento){
			   window.location.href = 'eliminarrestriccion/'+id_establecimiento+'/'+this.id_empresa;
        },
        crear(){

        },
        show () {
		    this.$modal.show('hello-world');
		  },
		  hide () {
		    this.$modal.hide('hello-world');
		  }
    }
}
</script>
<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>