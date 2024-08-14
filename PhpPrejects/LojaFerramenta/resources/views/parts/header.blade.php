@if (Auth::check())
<div>
    <h3>Olá,Seja Bem-vindo {{Auth::user()->name}}</h3>
    <h4>Pagina do {{Auth::user()->tipo_usuario}}</h4>
</div>
    <form action="/logout" method="post">
        @csrf
    <button type="submit">Logout</button>
    </form>
@else
    <div>
        <ul>
            <li>
                <a href="/login">Login</a>
            </li>
            <li>
                <a href="/registro">Registro</a>
            </li>
        </ul>
    </div>
@endif