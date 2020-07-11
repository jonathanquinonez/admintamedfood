<template>
    <div class="container">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Filtro
                    </h4>
                    <p class="card-description">
                    </p>
                    <form v-on:submit.prevent="getKeeps">
                        <div class="form-group row">
                            <div class="col-6">
                                <label>
                                    Fecha desde
                                </label>
                                <div id="fecha_desdediv">
                                    <input class="typeahead border-primary" name="fecha_desde" type="date" v-model="fecha_desde">
                                    </input>
                                </div>
                            </div>
                            <div class="col-6">
                                <label>
                                    Fecha hasta
                                </label>
                                <div id="fecha_hastadiv">
                                    <input class="typeahead border-primary" name="fecha_hasta" type="date" v-model="fecha_hasta">
                                    </input>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>
                                    Establecimientos
                                </label>
                                <select2 :options="establecimientos" @input="getStates" class="typeahead border-primary" name="id_establecimiento" v-model="id_establecimiento">
                                </select2>
                            </div>
                            <div class="col-4">
                                <label>
                                    Sucursales
                                </label>
                                <select2 :options="sucursales" class="typeahead border-primary" name="id_sucursal" v-model="id_sucursal">
                                </select2>
                            </div>
                            <div class="col-4">
                                <label>
                                    Cedula
                                </label>
                                <div id="bloodhound">
                                    <input class="typeahead border-primary" name="cedula" placeholder="cedula" type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: flex-end;margin-bottom: 10px; margin-right: 20px;">
                            <button class=" btn btn-success"  type="submit">
                                Filtrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
        <div>
             <div id="crud">
               
                <table class="table table-hover table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                CC empleado
                            </th>
                            <th>
                                N. Factura
                            </th>
                            <th>
                                Establecimiento
                            </th>
                            <th>
                                Sucursal
                            </th>
                            <th>
                                Tipo Compra
                            </th>
                            <th>
                                Cuotas
                            </th>
                            <th>
                                Costo Cuota
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="venta in ventas">
                            <td>
                                {{ venta.created_at }}
                            </td>
                            <td>
                               {{venta.cedula}}
                            </td>
                            <td>
                                {{venta.id}}
                            </td>
                            <td>
                               {{venta.nombre_establecimiento}}
                            </td>
                            <td>
                                {{venta.nombre_sucursal}}
                            </td>
                            <td v-if="venta.venta_web == 1">
                                
                                   Venta web
                              
                            </td>
                            <td v-else="venta.venta_web != 1">
                                 Venta fisica
                                
                            </td>
                            <td>
                                {{venta.cantidad_cuota}}
                            </td>
                            <td>
                                  {{venta.valor_cuota}}   
                            </td>
                            <td>
                                 {{ venta.total }}
                            </td>
                        </tr>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                CC empleado
                            </th>
                            <th>
                                N. Factura
                            </th>
                            <th>
                                Establecimiento
                            </th>
                            <th>
                                Sucursal
                            </th>
                            <th>
                                Tipo Compra
                            </th>
                            <th>
                                Cuotas
                            </th>
                            <th>
                                Costo Cuota
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                    </tfoot>
                </table>
             <nav>
            <ul class="pagination">
                <li v-if="pagination.current_page > 1">
                    <a href="#" @click.prevent="changePage(pagination.current_page - 1)">
                        <span>Atras</span>
                    </a>
                </li>

                <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                    <a href="#" @click.prevent="changePage(page)">
                        {{ page }}
                    </a>
                </li>

                <li v-if="pagination.current_page < pagination.last_page">
                    <a href="#" @click.prevent="changePage(pagination.current_page + 1)">
                        <span>Siguiente</span>
                    </a>
                </li>
            </ul>
        </nav>
            </div>
        </div>
    </div>
    </div>
    
</template>
<script>
    import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);
export default {
    mounted() {
        
        Vue.axios.get('infoestablecimientos')
        .then((response)=>{
            console.log(this.establecimientos = response.data);
            console.log(this.establecimientos = this.establecimientos.data);    
        })
 this.getKeeps();
        // Vue.axios.get('facturasventas')
        // .then((response)=>{
        //     console.log(this.ventas = response.data);
        //     console.log(this.ventas = this.ventas.ventas.data);    
        // })
        // this.getProducts();
    },
    data: function(){
        return {
            id_establecimiento: '0',
            id_sucursal: '0',
            establecimientos:[],
             sucursales : [],
             ventas : [],
            cedula: null,
            fecha_hasta:null,
            fecha_desde: null,
            pagination: {
            'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
            },
            newKeep: '',
            fillKeep: {'id': '', 'keep': ''},
            errors: '',
            offset: 3,
            
        }
    },
     computed: {
        isActived: function() {
            return this.pagination.current_page;
        },
        pagesNumber: function() {
            if(!this.pagination.to){
                return [];
            }

            var from = this.pagination.current_page - this.offset; 
            if(from < 1){
                from = 1;
            }

            var to = from + (this.offset * 2); 
            if(to >= this.pagination.last_page){
                to = this.pagination.last_page;
            }

            var pagesArray = [];
            while(from <= to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods:
    {
        getKeeps: function(page) {
            var urlKeeps = 'facturasventas?page='+page;
            axios.get(urlKeeps).then(response => {
                this.ventas = response.data.ventas.data;
                this.pagination = response.data.pagination;
            });
        },
        getStates()
        {
            
                Vue.axios.get('infosucursales/'+this.id_establecimiento)
                .then((response)=>{
                    this.sucursales = response.data;  
                    this.sucursales = this.sucursales.data; 
                })   
            
            
        } ,
        changePage: function(page) {
            this.pagination.current_page = page;
            this.getKeeps(page);
        }
    }

    
}

</script>



