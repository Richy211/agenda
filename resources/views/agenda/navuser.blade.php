<nav class="navbar navbar-light">
  <a href="{{ route('agenda.index')}}" class="navbar-brand"><img id="icono" 
  class="img-responsive" 
    src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

  <ul class="nav flex-column text-center">
  <li class="nav-item">
    <span class="nav-link active">Bienvenido  {{ Auth::user()->name }}</span>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="{{ route('logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
  Cerrar sesión
</a>

 <form id="logout-form" action="{{ route('logout') }}"
  method="POST" style="display: none;">
@csrf
</form>
  </li>
</ul>

</nav>



