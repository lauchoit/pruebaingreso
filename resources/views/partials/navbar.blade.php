<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link @yield('marcadoInicio')" href="{{ url('/') }}">Inicio</a>
  <a class="nav-link @yield('marcadoUsuario')" href="{{ route('usuario.index') }}">Usuario</a>
  <a class="nav-link @yield('marcadoCarro')"  href="{{ route('carro.index') }}">Carro</a>
  <a class="nav-link @yield('marcadoChoferes')"  href="{{ route('chofer.index') }}" >Choferes</a>
</div>
