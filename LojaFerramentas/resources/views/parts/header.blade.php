@if (Auth::check())
    <div class="container">
        
        <p>Bem-vindo, {{ Auth::user()->name }}! Você está autenticado.</p>
        <h4>Tipo usuario: {{ Auth::user()->tipo_usuario }}</h4>

        <div class="mt-4">
            <a href="{{ route('user.logout') }}" class="btn btn-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @if (Auth::user()->isAdmin())
                <div>
                    <a href="/produtos"><h3>Dashboard Produtos-Adm</h3></a>
                </div>
            @endif
        </div>
    </div>
    <hr>
@else
<div>
<a href="/login"><h2>Login</h2></a>
<br>
<a href="/registro"><h2>Registro</h2></a>
</div>
<hr>
@endif
