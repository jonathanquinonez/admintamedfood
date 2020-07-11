<template>
    <div class="container">


                    <h4 class="card-title">
                        Filtro
                    </h4>
                    <p class="card-description">
                    </p>
     <form v-on:submit.prevent="getKeeps">
         <div class="form-group row">
                <div class="col-md-4">
                    <b>Fecha desde</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input
                                    v-model="filters2.venta.value.min"
                                    :format="formatDate" type="date" class="form-control date" placeholder="Ej: 30/07/2016">
                                </div>
                            </div>
                </div>
                <div class="col-md-4">
                             <b>Fecha hasta</b>
                    <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                    </span>
                        <div class="form-line">
                                        <input
                                        v-model="filters2.venta.value.max"
                                        :format="formatDate" type="date" class="form-control date" placeholder="Ej: 30/07/2016">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                                <b>D.I.</b>
                    <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                        <div class="form-line">
                                    <input type="text" name="cedula" v-model="filters2.venta.value.cedula" class="form-control" placeholder="ej:1093765742">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                                <b>Establecimiento</b>
                    <div class="input-group">
                            <select name="id_establecimiento" @change="onChange($event)" class="form-control" v-model="filters2.venta.value.establecimiento">
                                <option  selected="true" value="todas" >#Todas</option>
                               <option v-for="thing in establecimientos" v-bind:value="thing.id">{{ thing.text }}</option>
                            </select>
                    </div>
                </div>
                <div class="col-6">
                            <b>Sucursales</b>
                        <div class="input-group">
                                    <select name="id_sucursal"  class="form-control" v-model="filters2.venta.value.sucursal">
                                    <option  selected="true" value="todas" >#Todas</option>
                                    <option v-for="thing in sucursales" v-bind:value="thing.id">{{ thing.text }}</option>
                                    </select>
                        </div>
                </div>
            </div>
    </form>
        <br>
        <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
                <p   v-on:click="pdf" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </p>
        <p  v-on:click="excel" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </p>
        </div>
     <v-table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100"
     :data="ventas"
     :filters="filters2"
     :currentPage.sync="pagination.current_page"
     :pageSize="10"
     @totalPagesChanged="totalPages = $event">
                    <thead slot="head">
                        <v-tr>
                         <v-th :customSort="dateSort" defaultSort="desc">
                                Fecha
                            </v-th>
                            <v-th :sortKey="nameLength">
                                Usuario
                            </v-th>
                            <v-th sortKey="cedula">
                                D.I.
                            </v-th>
                            <v-th sortKey="id">
                                N. Transacción
                            </v-th>
                            <v-th sortKey="nombre_establecimiento">
                                Establecimiento
                            </v-th>
                            <v-th sortKey="nombre_sucursal">
                                Sucursal
                            </v-th>
                            <v-th sortKey="venta_web">
                                Tipo Compra
                            </v-th>

                            <v-th sortKey="bitucash">
                                Bitucash
                            </v-th>

                            <v-th sortKey="credito">
                                Crédito
                            </v-th>

                            <v-th sortKey="total">
                                Total
                            </v-th>

                            <v-th>
                                Detalle
                            </v-th>
                        </v-tr>
                    </thead>
                    <tbody slot="body" slot-scope="{displayData}">
                        <v-tr v-for="venta in displayData" :key="venta.id">
                            <td>
                                {{ venta.created_at }}
                            </td>
                            <td>
                               {{venta.nombre_usuario}}
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

                            <td >
                                 {{ parseInt(venta.bitucash) }}
                            </td>

                            <td >
                                 {{ parseInt(venta.total-venta.bitucash) }}
                            </td>

                            <td >
                                 {{ parseInt(venta.total) }}
                            </td>

                            <td >
                                <button class="btn-xs badge bg-teal
      " v-on:click="detallefactura(venta.id)"><i class="fa fa-eye"></i></button>
                            </td>
                        </v-tr>
                    </tbody>
                  </v-table>
                  <smart-pagination style="background: white;"
                    :currentPage.sync="pagination.current_page"
                    :totalPages="totalPages"
                  />

    </div>
</template>
<script>
    import Vue from 'vue';
    import axios from 'axios';
import VueAxios from 'vue-axios';
import SmartTable from 'vuejs-smart-table';
import Datepicker from 'vuejs-datepicker';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
Vue.use(SmartTable);
Vue.use(Datepicker);
Vue.use(VueAxios, axios);
export default {
    components: {
        Datepicker
    },
    mounted() {
        Vue.axios.get('infoestablecimientos')
        .then((response)=>{
        this.establecimientos = response.data;
        this.establecimientos= this.establecimientos.data;
        })
         Vue.axios.get('facturasventas')
        .then((response)=>{
            this.ventas = response.data;
            this.ventas= this.ventas.data;
        })
 this.getKeeps();
    },
    name: 'TheBasics',
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
            'current_page': 1,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
            },
            totalPages: 0,
            newKeep: '',
            fillKeep: {'id': '', 'keep': ''},
            errors: '',
            offset: 3,
            filters: {
                // age: { value: { min: 2019, max: 2050 }, custom: this.ageFilter },

            },
            filters2: {
                venta: { value: { min: new Date(2018, 9, 16), max: new Date(2020, 9, 16), establecimiento:'todas', sucursal:'todas', cedula:'',}, custom: this.ageFilter },


            },



        }
    },
     computed: {
        isActived: function() {

        },
        pagesNumber: function() {

        }
    },
    methods:
    {
         onChange(event) {
            console.log(event.target.value)
            if(event.target.value == 'todas'){
                this.filters2.venta.value.sucursal = 'todas';
            }
             Vue.axios.get('infosucursales/'+event.target.value)
                .then((response)=>{
                    this.sucursales = response.data;
                    this.sucursales = this.sucursales.data;
                })
        },
        ageFilter (filterValue, venta) {
             filterValue.min = this.formatDate(filterValue.min);
            filterValue.max = this.formatDate(filterValue.max);// console.log("created_At",formatDate(venta.created_at));


            if(filterValue.establecimiento == 'todas' && filterValue.cedula == ''){
                return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max;
            }else{
                if(filterValue.establecimiento == 'todas' && filterValue.cedula != ''){
                        return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max && filterValue.cedula == venta.cedula;

                }
            }
           if(filterValue.establecimiento != '' && filterValue.cedula != ''){



                    if(filterValue.sucursal != ''){
                        return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max  && venta.id_establecimiento == filterValue.establecimiento && venta.id_sucursal == filterValue.sucursal && filterValue.cedula == venta.cedula ;
                    }else{

                        if(filterValue.sucursal == 'todas'){
                             return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max  && venta.id_establecimiento == filterValue.establecimiento && filterValue.cedula == venta.cedula ;
                         }

                    }

           }else{

                    if(filterValue.establecimiento == 'todas' && filterValue.cedula != ''){
                        return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max && filterValue.cedula == venta.cedula;
                    }else{

                       if(filterValue.establecimiento != '' && filterValue.cedula == '' && filterValue.sucursal == 'todas' ){
                            return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max && venta.id_establecimiento == filterValue.establecimiento ;
                       }else{
                         if (filterValue.establecimiento != '' && filterValue.cedula == '' && filterValue.sucursal != '' ) {
                                return venta.created_at >= filterValue.min && venta.created_at <= filterValue.max  && venta.id_establecimiento == filterValue.establecimiento && venta.id_sucursal == filterValue.sucursal;
                         }
                       }
                    }
           }

        },
        formatDate (date) {
        return moment(date).format('YYYY-MM-DD')
        },
        getKeeps: function(page) {

        },
        pdf(){
            console.log("establecimiento",this.filters2.venta.value.establecimiento);
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.cedula != '' && this.filters2.venta.value.sucursal != '')
            {       console.log('1');
                   window.location.href = 'imprimirtodo/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.sucursal+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento == 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula == '')
            {console.log('2');
                    window.location.href = 'imprimirfechas/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max;
            }
            if(this.filters2.venta.value.establecimiento == 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula != '')
            { console.log('3');
                window.location.href = 'imprimircedula/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula != '')
            { console.log('4');
                window.location.href = 'imprimirestablecimientocedula/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula == '')
            { console.log('5');
                window.location.href = 'imprimirestablecimiento/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento;
            }
             if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal != 'todas' && this.filters2.venta.value.cedula == '')
            { console.log('6');
                window.location.href = 'imprimirestablecimientosucursal/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.sucursal;
            }
        },
         excel(){
            console.log("establecimiento",this.filters2.venta.value.establecimiento);
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.cedula != '' && this.filters2.venta.value.sucursal != '')
            {       console.log('1');
                   window.location.href = 'imprimirtodoexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.sucursal+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento == 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula == '')
            {console.log('2');
                    window.location.href = 'imprimirfechasexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max;
            }
            if(this.filters2.venta.value.establecimiento == 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula != '')
            { console.log('3');
                window.location.href = 'imprimircedulaexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula != '')
            { console.log('4');
                window.location.href = 'imprimirestablecimientocedulaexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.cedula;
            }
            if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal == 'todas' && this.filters2.venta.value.cedula == '')
            { console.log('5');
                window.location.href = 'imprimirestablecimientoexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento;
            }
             if(this.filters2.venta.value.establecimiento != 'todas' && this.filters2.venta.value.sucursal != 'todas' && this.filters2.venta.value.cedula == '')
            { console.log('6');
                window.location.href = 'imprimirestablecimientosucursalexcel/'+this.filters2.venta.value.min+'/'+this.filters2.venta.value.max+'/'+this.filters2.venta.value.establecimiento+'/'+this.filters2.venta.value.sucursal;
            }
        },
        detallefactura  : function (id){

            window.location.href = 'detallefactura/'+id+'/'+'3';
        },
        getStates()
        {

                Vue.axios.get('infosucursales/'+this.filters2.venta.value.establecimiento)
                .then((response)=>{
                    this.sucursales = response.data;
                    this.sucursales = this.sucursales.data;
                })


        } ,
        changePage: function(page) {
            // this.pagination.current_page = page;
            // this.getKeeps(page);
        },
        nameLength (venta) {
            return venta.nombre_usuario.length
            },
        dateSort(a, b) {
            let date1 = new Date(a.created_at).getTime();
            let date2 = new Date(b.created_at).getTime();

            return date1 - date2;
            }
    }


}


</script>





