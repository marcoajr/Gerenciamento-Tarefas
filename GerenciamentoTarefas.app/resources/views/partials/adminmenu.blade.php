       
        <div class="sidebar">
            <p>Painel de Controle do Administrador</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"> Dashboard </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/useradmin"> Usuários </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Configurações </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Relátorios </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}</a>
                </li>
            </ul>
        </div>
        