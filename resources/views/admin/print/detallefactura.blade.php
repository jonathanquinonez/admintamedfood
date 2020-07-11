<!DOCTYPE html>
<html lang="es">
        
        <title>Document</title>
        <style>
            .col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col,.col-auto,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm,.col-sm-auto,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md,.col-md-auto,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg,.col-lg-auto,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}
            .col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;-webkit-box-flex:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;-webkit-box-flex:0;flex:0 0 auto;width:auto;max-width:none}.col-1{-ms-flex:0 0 8.333333%;-webkit-box-flex:0;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;-webkit-box-flex:0;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;-webkit-box-flex:0;flex:0 0 25%;max-width:25%}
            .col-4{-ms-flex:0 0 33.333333%;-webkit-box-flex:0;flex:0 0 33.333333%;max-width:33.333333%}
            .col-5{-ms-flex:0 0 41.666667%;-webkit-box-flex:0;flex:0 0 41.666667%;max-width:41.666667%}
            .col-6{-ms-flex:0 0 50%;-webkit-box-flex:0;flex:0 0 50%;max-width:50%}
            .col-7{-ms-flex:0 0 58.333333%;-webkit-box-flex:0;flex:0 0 58.333333%;max-width:58.333333%}
            .col-8{-ms-flex:0 0 66.666667%;-webkit-box-flex:0;flex:0 0 66.666667%;max-width:66.666667%}
            .col-9{-ms-flex:0 0 75%;-webkit-box-flex:0;flex:0 0 75%;max-width:75%}
            .col-10{-ms-flex:0 0 83.333333%;-webkit-box-flex:0;flex:0 0 83.333333%;max-width:83.333333%}
            .col-11{-ms-flex:0 0 91.666667%;-webkit-box-flex:0;flex:0 0 91.666667%;max-width:91.666667%}
            .col-12{-ms-flex:0 0 100%;-webkit-box-flex:0;flex:0 0 100%;max-width:100%}
/*! CSS Used from: https://127.0.0.1:8000/assets/css/app.min.css */
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
strong{font-weight:inherit;}
strong{font-weight:bolder;}
input,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
input{overflow:visible;}
textarea{overflow:auto;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
input,textarea{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
a{color:#039be5;text-decoration:none;-webkit-tap-highlight-color:transparent;}
.clearfix{clear:both;}
.card,.btn{-webkit-box-shadow:0 2px 2px 0 rgba(0,0,0,0.14),0 3px 1px -2px rgba(0,0,0,0.12),0 1px 5px 0 rgba(0,0,0,0.2);box-shadow:0 2px 2px 0 rgba(0,0,0,0.14),0 3px 1px -2px rgba(0,0,0,0.12),0 1px 5px 0 rgba(0,0,0,0.2);}
.btn:hover{-webkit-box-shadow:0 3px 3px 0 rgba(0,0,0,0.14),0 1px 7px 0 rgba(0,0,0,0.12),0 3px 1px -1px rgba(0,0,0,0.2);box-shadow:0 3px 3px 0 rgba(0,0,0,0.14),0 1px 7px 0 rgba(0,0,0,0.12),0 3px 1px -1px rgba(0,0,0,0.2);}
table,th,td{border:0;}
table{width:100%;display:table;border-collapse:collapse;border-spacing:0;}
tr{border-bottom:1px solid rgba(0,0,0,0.12);}
td,th{padding:15px 5px;display:table-cell;text-align:left;vertical-align:middle;border-radius:2px;}
.center{text-align:center;}
.row{margin-left:auto;margin-right:auto;margin-bottom:20px;}
.row:after{content:"";display:table;clear:both;}
a{text-decoration:none;}
h4,h6{font-weight:400;line-height:1.3;}
h4{font-size:2.28rem;line-height:110%;margin:1.52rem 0 .912rem 0;}
h6{font-size:1.15rem;line-height:110%;margin:.7666666667rem 0 .46rem 0;}
strong{font-weight:500;}
.card{position:relative;margin:.5rem 0 1rem 0;background-color:#fff;-webkit-transition:-webkit-box-shadow .25s;transition:-webkit-box-shadow .25s;transition:box-shadow .25s;transition:box-shadow .25s,-webkit-box-shadow .25s;border-radius:2px;}
.card .card-title{font-size:24px;font-weight:300;}
.btn{border:0;border-radius:2px;display:inline-block;height:36px;line-height:36px;padding:0 16px;text-transform:uppercase;vertical-align:middle;-webkit-tap-highlight-color:transparent;}
.btn:disabled{pointer-events:none;background-color:#dfdfdf!important;-webkit-box-shadow:none;box-shadow:none;color:#9f9f9f!important;cursor:default;}
.btn:disabled:hover{background-color:#dfdfdf!important;color:#9f9f9f!important;}
.btn{font-size:14px;outline:0;}
.btn:focus{background-color:#1d7d74;}
.btn{text-decoration:none;color:#fff;background-color:#26a69a;text-align:center;letter-spacing:.5px;-webkit-transition:background-color .2s ease-out;transition:background-color .2s ease-out;cursor:pointer;}
.btn:hover{background-color:#2bbbad;}
label{font-size:.8rem;color:#9e9e9e;}
::-webkit-input-placeholder{color:#d1d1d1;}
:-ms-input-placeholder{color:#d1d1d1;}
::-ms-input-placeholder{color:#d1d1d1;}
::placeholder{color:#d1d1d1;}
input[type=text]:not(.browser-default){background-color:transparent;border:0;border-bottom:1px solid #9e9e9e;border-radius:0;outline:0;height:3rem;width:100%;font-size:16px;margin:0 0 8px 0;padding:0;-webkit-box-shadow:none;box-shadow:none;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-transition:border .3s,-webkit-box-shadow .3s;transition:border .3s,-webkit-box-shadow .3s;transition:box-shadow .3s,border .3s;transition:box-shadow .3s,border .3s,-webkit-box-shadow .3s;}
input[type=text]:not(.browser-default):disabled{color:rgba(0,0,0,0.42);border-bottom:1px dotted rgba(0,0,0,0.42);}
textarea{width:100%;height:3rem;background-color:transparent;}
*,*::before,*::after{-webkit-box-sizing:border-box;box-sizing:border-box;}
h4,h6{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
table{border-collapse:collapse;}
th{text-align:inherit;}
label{display:inline-block;margin-bottom:.5rem;}
input,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
input{overflow:visible;}
textarea{overflow:auto;resize:vertical;}
h4,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h4{font-size:1.5rem;}
h6{font-size:1rem;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.row{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-1,.col-2,.col-3,.col-4,.col-6,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-1{-ms-flex:0 0 8.333333%;-webkit-box-flex:0;flex:0 0 8.333333%;max-width:8.333333%;}
.col-2{-ms-flex:0 0 16.666667%;-webkit-box-flex:0;flex:0 0 16.666667%;max-width:16.666667%;}
.col-3{-ms-flex:0 0 25%;-webkit-box-flex:0;flex:0 0 25%;max-width:25%;}
.col-4{-ms-flex:0 0 33.333333%;-webkit-box-flex:0;flex:0 0 33.333333%;max-width:33.333333%;}
.col-6{-ms-flex:0 0 50%;-webkit-box-flex:0;flex:0 0 50%;max-width:50%;}
.col-12{-ms-flex:0 0 100%;-webkit-box-flex:0;flex:0 0 100%;max-width:100%;}

.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;-webkit-box-shadow:0 0 0 .2rem rgba(0,123,255,0.25);box-shadow:0 0 0 .2rem rgba(0,123,255,0.25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1;}
textarea.form-control{height:auto;}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;}
.btn:hover,.btn:focus{text-decoration:none;}
.btn:focus{outline:0;-webkit-box-shadow:0 0 0 .2rem rgba(0,123,255,0.25);box-shadow:0 0 0 .2rem rgba(0,123,255,0.25);}
.btn:disabled{opacity:.65;}
.btn:not(:disabled):not(.disabled){cursor:pointer;}
.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8;}
.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b;}
.btn-info:focus{-webkit-box-shadow:0 0 0 .2rem rgba(23,162,184,0.5);box-shadow:0 0 0 .2rem rgba(23,162,184,0.5);}
.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8;}
.btn-outline-warning{color:#ffc107;background-color:transparent;background-image:none;border-color:#ffc107;}
.btn-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107;}
.btn-outline-warning:focus{-webkit-box-shadow:0 0 0 .2rem rgba(255,193,7,0.5);box-shadow:0 0 0 .2rem rgba(255,193,7,0.5);}
.btn-outline-warning:disabled{color:#ffc107;background-color:transparent;}
.card{position:relative;display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-direction:column;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,0.125);border-radius:.25rem;}
.card-body{-ms-flex:1 1 auto;-webkit-box-flex:1;flex:1 1 auto;padding:1.25rem;}
.card-title{margin-bottom:.75rem;}
.clearfix::after{display:block;clear:both;content:"";}
.mr-2{margin-right:.5rem!important;}
.ml-4{margin-left:1.5rem!important;}
.mt-5{margin-top:3rem!important;}
.pt-2{padding-top:.5rem!important;}
.pr-3{padding-right:1rem!important;}
.pl-3{padding-left:1rem!important;}

/*! CSS Used from: https://127.0.0.1:8000/assets/css/style.css */
.no-resize{resize:none;}
h4,h6{font-weight:bold;}
input,a{outline:none!important;}
input:hover,a:hover{text-decoration:none;}
.row{margin-bottom:0px!important;}
label{font-size:14px;line-height:1.42857;color:#414244;font-weight:400;}
.form-group{width:100%;margin-bottom:25px;}
.form-group .form-control{width:100%;border:none;box-shadow:none;border-bottom:1px solid #9e9e9e;-webkit-border-radius:0;-moz-border-radius:0;-ms-border-radius:0;border-radius:0;padding-left:0;}
.form-control[readonly]{background-color:transparent;}
.clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0;}

.card{background:#fff;min-height:50px;box-shadow:none;border:0;position:relative;margin-bottom:24px;-webkit-border-radius:10px;-moz-border-radius:10px;-ms-border-radius:10px;border-radius:10px;}
</style>
    </head>
    <body>
            <div>  

                    <h4>
                        Detalle compra
                    </h4>
                <h6>{{$today}}</h6>
                  
<h6>Informacion de usuario</h6>
                    <form>
                        <div class="row form-group">
                                @foreach ($datas as $data)
                            <div class="col-2">
                                <label>
                                   N° Transacción
                                </label>
                                 <input  type="text" value="{{$data->id}}">
                            </div>
                            <div class="col-4">
                                    <label>
                                       Usuario
                                    </label>
                                     <input     readonly type="text" value="{{$data->nombre}}">
                                </div>
                            <div class="col-3">
                                <label>
                                    Cedula
                                </label>
                                <input type="text" value="{{$data->cedula}}">

                            </div>
                            <div class="col-1">
                                <label>
                                   Cuotas
                                </label>
                                <input    type="text" value="{{$data->cantidad_cuota}}">

                            </div>
                            <div class="col-3">
                                <label>
                                    Establecimiento
                                </label>
                                <div id="bloodhound">
                                    <input type="text" value="{{$data->nombre_establecimiento}}">

                                </div>
                            </div>
                            <div class="col-3">
                                <label>
                                    Sucursal
                                </label>
                                <input  type="text" value="{{$data->nombre_sucursal}}">

                            </div>
                            
                              <div class="col-3">
                                <label>
                                    Modalidad
                                </label>
                                @if($data->venta_web == 1)
                                <input  type="text" value="Venta web">
                                @endif
                                @if($data->venta_web == 0)
                                <input type="text" value="Venta fisica">
                                @endif
                                

                            </div>
                              <div class="col-6">
                                <label style="margin-top: 10px;">
                                    Dirección  usuario
                                </label>
                                <input  type="text" value="{{$data->direccion}}">

                            </div>
                            
                        </div>
                  
                    </form>
           
       

        
                    @endforeach
            </div>
        
    </body>
</html>