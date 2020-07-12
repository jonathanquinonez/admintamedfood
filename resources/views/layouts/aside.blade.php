<aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_960_720.png" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            @if (auth()->check())
                                    <div class="sidebar-userpic-name">
                                        {{Auth()->user()->nombre}}
                                    </div>
                            <div class="profile-usertitle-job ">@if (Auth()->user()->admin === 'admin')
                                            Administrador
                                        @endif
                                        @if (Auth()->user()->admin === 'empresa')
                                            User Empresa
                                        @endif
                                        @if (Auth()->user()->admin === 'sucursal')
                                            User Sucursal
                                        @endif
                                        @if (Auth()->user()->admin === 'establecimiento')
                                            User Establecimiento
                                        @endif</div>
                            @endif
                        </div>
                    </li>
                   
                   @if (auth()->check())
                        @if (Auth()->user()->hasRole('admin'))
                        <li>
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="fa far fa-building">
                                </i>
                                <span class="menu-title">
                                    Empresas Cliente
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('establecimientos')}}">
                                <i class="fa fa-sitemap">
                                </i>
                                <span class="menu-title">
                                    Establecimientos
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('formularios')}}">
                                <i class="fa fa-check-square">
                                </i>
                                <span class="menu-title">
                                    Formulario Web
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('users')}}">
                                <i class="fa fa-users">
                                </i>
                                <span class="menu-title">
                                    Usuarios (Clientes)
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ventas')}}">
                                <i class="fa fa-rocket">
                                </i>
                                <span class="menu-title">
                                    Ventas
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fa far fa-comment-dots">
                                </i>
                                <span class="menu-title">
                                    Mensajes
                                </span>
                            </a>
                            
                                <ul class="ml-menu">
                                    <li class="active">
                                        <a href="#">
                                            Push
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            Email
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            SMS
                                        </a>
                                    </li>
                                </ul>
                           
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fa fa-asterisk">
                                </i>
                                <span>
                                    Configuraciones
                                </span>
                            </a>
                            
                                <ul class="ml-menu">
                                    <li class="active">
                                        <a href="{{ route('categorias') }}">
                                            Categorías
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('tipoempresa') }}">
                                            Tipo Empresa
                                        </a>
                                    </li>
                                    
                                </ul>
                            
                        </li>
                        
                        @endif
                         @if (Auth()->user()->hasRole('empresa'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empleados')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Empleados
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('peticiones')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Peticiones
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Compras Empleados
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Perfil
                                </span>
                            </a>
                        </li>
                        @endif
                         @if (Auth()->user()->hasRole('sucursal'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Transacciones
                                </span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Perfil
                                </span>
                            </a>
                        </li>
                        @endif
                        @if (Auth()->user()->hasRole('establecimiento'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="fa fa-rocket" style="margin-right: 5px;color: #eee;">
                                </i>
                                <span class="menu-title">
                                    Ventas Sucursales
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('empresas')}}">
                                <i class="icon-layout menu-icon">
                                </i>
                                <span class="menu-title">
                                    Perfil
                                </span>
                            </a>
                        </li>
                        @endif
                        @endif
                  
                   
                   
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        