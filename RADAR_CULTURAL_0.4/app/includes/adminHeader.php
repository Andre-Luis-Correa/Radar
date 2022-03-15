<header>
    <!--<a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1 class="logo-text"><span>Radar</span>Cultural</h1>
    </a>-->

    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"><img class="capa" src="<?php echo BASE_URL . '/assets/images/logo_definitiva.gif' ?>"><span> Radar Cultural</span></h1>
    </a>

    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['id_usuario'])): ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['nome_usuario']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/user/profile/index.php' ?>">Gerenciar perfil</a></li>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>