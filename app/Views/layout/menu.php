<nav class="navbar">

 <a href="<?= site_url('pagina_inicial') ?>" 
       class="nav-link <?= url_is('pagina_inicial') ? 'active' : '' ?>">
        Página Inicial
    </a>

    <a href="<?= site_url('contato') ?>" 
       class="nav-link <?= url_is('contato') ? 'active' : '' ?>">
        Contato
    </a>


    <a href="<?= site_url('produtos') ?>" 
       class="nav-link <?= url_is('produtos') ? 'active' : '' ?>">
        Produtos
    </a>

    <a href="<?= site_url('quem_sou') ?>" 
       class="nav-link <?= url_is('quem_sou') ? 'active' : '' ?>">
        Quem Sou
    </a>

    <a href="<?= site_url('sobre') ?>" 
       class="nav-link <?= url_is('sobre') ? 'active' : '' ?>">
        Sobre
    </a>

</nav>