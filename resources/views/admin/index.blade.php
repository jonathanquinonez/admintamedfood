@extends('layouts.menu')

@section('contenido')
<div class="row">
          <div class="col-lg-3 col-md-6">
                    <div class="card bg-green total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                NÚMERO DE USUARIOS ACTIVOS
                                <h1><p class="m-0">{{$clientes}}</p></h1>
                            </div>
                        </div>
                        <div class="text-center p-t-20">
                            Al día de hoy
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                NÚMERO DE ENTIDADES ACTIVAS
                                <h1><p class="m-0">{{$empresas}}</p></h1>
                            </div>
                        </div>
                        <div class="text-center p-t-20">
                            Al día de hoy
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                NÚMERO DE MARCAS ALIADAS
                                <h1><p class="m-0">{{$establecimientos}}</p></h1>
                            </div>
                        </div>
                        <div class="text-center p-t-20">
                            Al día de hoy
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-purple total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                NÚMERO DE TRANSACCIONES
                                <h1><p class="m-0">{{$facturas}}</p></h1>
                            </div>
                        </div>
                        <div class="text-center p-t-20">
                            Al día de hoy
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>TRANSACCIONES POR MES</h2>
                        </div>
                        <div class="chart">
                          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>TRANSACCIONES POR DÍA</h2>
                        </div>
                        <div class="chart">
                          <canvas id="barChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>VALOR TRANSACCIONES POR MES</h2>
                        </div>
                        <div class="chart">
                          <canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="header">
                    <h2>TOP 5 ENTIDADES CON MÁS TRANSACCIONES</h2>
                    @for($i=0; $i < count($topEmpresas);$i++)
                    {{$i+1}}. {{$topEmpresas[$i]->empresa}}
                    <br>
                    @endfor
                </div>
                <canvas id="pieChart" style="height:250px">
                </canvas>
            </div>
        </div>
    </div>
</div>

<!-- Striped Rows -->
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>CONVENIOS MÁS USADOS</strong></h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">

                    <tbody>
                        @for($i=0;$i < count($conveniosMasUsados);$i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$conveniosMasUsados[$i]->establecimiento}}</td>
                            <td>${{number_format($conveniosMasUsados[$i]->total)}}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>CATEGORÍAS MÁS USADAS</strong></h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <tbody>
                        @for($i=0;$i < count($categoriasMasUsadas);$i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$categoriasMasUsadas[$i]->categoria}}</td>
                            <td>${{number_format($categoriasMasUsadas[$i]->total,0)}}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #END# Striped Rows -->
@endsection
@section('script')
 <!--<script src="{{URL::asset('assets/js/pages/apps/support.js')}}"></script>-->
 <script src="{{URL::asset('assets/js/pages/widgets/widget.js')}}"></script>
 <script src="{{URL::asset('assets/js/chart.min.js')}}"></script> 
 <!-- Echart Js -->
<script src="{{URL::asset('assets/js/bundles/echart/echarts.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/charts/echarts.js')}}"></script>
 <script src="{{URL::asset('assets/js/pages/charts/chartjs.js')}}"></script>
<script type="text/javascript">

    $(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: [
      "ENE", "FEB", "MAR", "ABR" , "MAY", "JUN", "JUL", "AGO","SEP", "OCT", "NOV", "DIC"
      ],
    datasets: [{
      label: 'Transacciones mensuales',
      data: [
          {{$transaccionesMensuales}}
          ],
      backgroundColor: [
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)'
          ],
      borderColor: [
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)'
          ],
      borderWidth: 1,
      fill: true
    }]
  };
  var data1 = {
    labels: [{{$cantidadDias}}],
    datasets: [{
      label: 'Transacciones diarias',
      data: [
          {{$transaccionesDiarias}},
      ],
      backgroundColor: [
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)'
      ],
      borderColor: [
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)'
          ],
      borderWidth: 1,
      fill: false
    }]
  };
  var data2 = {
    labels: [
      "ENE", "FEB", "MAR", "ABR" , "MAY", "JUN", "JUL", "AGO","SEP", "OCT", "NOV", "DIC"
      ],
    datasets: [{
      label: 'Valor transacciones mensuales',
      data: [
          {{$valorTransaccionesMensuales}},
      ],
      backgroundColor: [
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)',
          'rgba(60,141,188,0.9)'
      ],
      borderColor: [
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)',
          'rgba(60,141,188,0.8)'
          ],
      borderWidth: 1,
      fill: false
    }]
  };
  
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  var doughnutPieData = {
    datasets: [{
      data: [{{$cTopEmpresas}}],
      backgroundColor: [
        'rgba(0,188,212,1)',
        'rgba(255, 152, 0, 1)',
        'rgba(76, 177, 80, 1)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
       'rgba(0,188,212,1)',
        'rgba(255, 152, 0, 1)',
         'rgba(76, 177, 80, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [1,2,3,4,5],
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
  
  if ($("#barChart1").length) {
    var barChartCanvas = $("#barChart1").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data1,
      options: options
    });
  }
  
  if ($("#barChart2").length) {
    var barChartCanvas = $("#barChart2").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data2,
      options: options
    });
  }
  
  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }
});
</script>
@endsection
