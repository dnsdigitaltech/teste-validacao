
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="os-padding">
    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
      <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
        <h5>Meu Perfil</h5>
        <hr class="mb-2">
        <div class="mb-1 nav-link">
          <!-- The user image in the menu -->
          <div class="user-header">
              <img src="https://www.gravatar.com/avatar/a0377f12a3f90a6394fff2505a21b3f7?d=mm" class="img img-circle img-thumbnail" alt="Davi Bernardo" title="Davi Bernardo">
              <p>
                  <b>Nome:</b> <br/>{{ Auth::user()->name }} 
              </p>
              <p>
                <b>Id Funcional:</b> {{ Auth::user()->id_functional }} 
              </p>
              <p>
                  <b>Cargo:</b> 
              </p>
              <p>
                  <b>Setor:</b> <b>Ramal:</b> {{ Auth::user()->email }}
              </p>
              <p>
                  <b>Email:</b> <br/> {{ Auth::user()->email }}
              </p>
          </div> 
        </div>
        <hr class="mb-2">
          <div class="row">
                <div class="col-6">
                  <a href="{{asset("corporativo/perfil/editar/")}}/{{Auth()->user()->slug}}" class="btn btn-primary btn-block btn-flat">
                      <i class="fas fa-user-edit"></i>
                      <span>Editar</span>
                  </a>
                </div>
              <!-- /.col -->
              <div class="col-6">
                <button class="btn btn-warning btn-block btn-flat" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                              Sair <i class="fas fa-sign-out-alt"></i></button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>                
              </div>
              <!-- /.col -->
          </div>
      </div>
    </div>
  </div>
</aside>
<!-- /.control-sidebar -->