<?php

  $pages = selectAll('tb_pagina');

?>

<header>

  <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
    <h1 class="logo-text"><img class="capa" src="<?php echo BASE_URL . '/assets/images/logo_definitiva.gif' ?>"><span> Radar Cultural</span></h1>
  </a>

  <i class="fa fa-bars menu-toggle"></i>
  <ul class="nav">
    <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>

    <!-- início: links das páginas criadas pelos colaboradores -->

    <?php foreach ($pages as $key => $page): ?>
       <li><a href="<?php echo BASE_URL . '/page.php?id_pagina=' . $page['id_pagina']; ?>"><?php echo $page['titulo']; ?></a></li>

       
    <?php endforeach; ?>

    <!-- fim: links das páginas criadas pelos colaboradores -->

    <?php if(isset($_SESSION['id_usuario'])): ?>

      <li>
        <a href="#">
          <i class="fa fa-user"></i>
          
          <?php echo $_SESSION['nome_usuario']; ?>

          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>

          <?php if($_SESSION['tipo_usuario'] == 1) : ?>

             <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>

          <?php endif; ?>
          
          <li><a href="<?php echo BASE_URL . '/user/profile/index.php' ?>">Gerenciar perfil</a></li>
          <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
        </ul>
      </li>

    <?php else: ?>

      <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
      <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>

    <?php endif; ?>
    

  </ul>

</header>

