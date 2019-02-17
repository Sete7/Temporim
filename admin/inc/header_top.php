<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Usuário</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=user">Cadastrar</a></li>
                <li><a href="?pagina=editarUser">Listar</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Projétos</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=portifolio">Projétos</a></li>
                <li><a href="?pagina=listarPortifolio">Listar Projétos</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Blog</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=artigo">artigo</a></li>
                <li><a href="?pagina=listarArtigo">Listar Artigos</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Slider</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=slider">Cadastrar</a></li>
                <li><a href="?pagina=listSlider">Listar</a></li>
            </ul>
        </li>
		<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>Agendamento</p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="?pagina=agendamento">Cadastrar</a></li>
                <li><a href="?pagina=listarAgendamento">Listar</a></li>
            </ul>
        </li>		
		
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p><?php echo $_SESSION['nome']; ?></p>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="ti-settings"></i>
                <p>Settings</p>
            </a>
        </li>
    </ul>

</div>