<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('site.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>PRINCIPAL</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-id-card"></i>
                <p>CANDIDATO<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">  
                <li class="nav-item">
                        <a href="{{ route('site.cadastrar') }}" class="nav-link ">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-plus-circle"></i>
                            <p> Novo</p>
                        </a>
                    </li>              
                    <li class="nav-item">
                        <a href="{{ route('site.cadastrar.buscar') }}" class="nav-link">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-search"></i>
                            <p> Buscar</p>
                        </a>
                    </li>                
                </li>
            </ul>        
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-users-cog"></i>
                <p>ADMINISTRADOR<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">               
                    <li class="nav-item">
                        <a href="{{ route('site.cadastros') }}" class="nav-link">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-clipboard-list"></i>
                            <p> cadastrados</p>
                        </a>
                    </li>                
                </li>
            </ul>        
        </li>
    </ul>
</nav>
