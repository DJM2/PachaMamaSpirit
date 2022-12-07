<div class="row">
    <div class="dashboard justify-content-center">
        <div class="col-3">
            <a href="{{ route('inicio') }}">
                <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Logo Pacha Mama Blanco" width="280px"  style="padding-left: 2em">
            </a>
        </div>
        <div class="col-6">
            <nav class="text-center">
                <ul>
                    <li><a href="{{ route('inicio') }}"><i class="icon-home"></i> Volver a inicio </a> </li>
                    <li><a href="{{ url('tours') }}"><i class="icon-language"></i> Tours español</a></li>
                    <li><a href=""><i class="icon-language"></i> Tours ingles</a></li>
                    <li><a href="{{ url('users') }}"><i class="icon-user"></i> Usuarios</a> </li>
                </ul>
            </nav>
        </div>
        <div class="col-3">
            <a class="btn btn-danger float-end mr-5" style="font-size: 12px" href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
