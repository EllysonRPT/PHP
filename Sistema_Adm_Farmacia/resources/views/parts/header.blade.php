<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>

            @if (Auth::check())
            <li class="static-info">
                <span class="info-item">NOME: {{ Auth::user()->name }}</span>
                <span class="info-item">USUARIO: {{ Auth::user()->tipo_usuario }}</span>
            </li>
            
                <li class="dropdown">
                    <a href="#">Menu</a>
                    <ul class="dropdown-content">
                        @if (Auth::user()->isAdmin())
                            <li><a href="/produtos"> Produtos CRUD</a></li>
                            <li><a href="/dashboard"> Visualizar</a></li>

                        @endif
                        <li>
                            <li><a href="/dashboard"> Visualizar</a></li>   
                            <a href="{{ route('user.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="dropdown">
                    <a href="#">Conta</a>
                    <ul class="dropdown-content">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/registro">Registro</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</header>
