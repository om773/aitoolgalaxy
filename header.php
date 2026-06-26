<nav class="navbar navbar-expand-lg sticky-top glass-nav">
  <div class="container">
    <a class="navbar-brand fw-bold gradient-text" href="<?= url('') ?>"><i class="fa-solid fa-robot me-2"></i>AIHub</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="<?= url('tools') ?>">Tools</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= url('categories') ?>">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= url('blog') ?>">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= url('about') ?>">About</a></li>
      </ul>
      <form class="d-flex me-3 position-relative" action="<?= url('search') ?>" role="search">
        <input id="globalSearch" class="form-control form-control-sm" name="q" type="search" placeholder="Search 1000+ AI tools…" autocomplete="off">
        <div id="searchDropdown" class="search-dropdown"></div>
      </form>
      <button class="btn btn-sm btn-ghost me-2" id="themeToggle" aria-label="Toggle theme"><i class="fa-solid fa-moon"></i></button>
      <?php if (auth()): ?>
        <a class="btn btn-sm btn-gradient" href="<?= url('dashboard') ?>"><?= e(auth()['name']) ?></a>
        <a class="btn btn-sm btn-ghost ms-1" href="<?= url('logout') ?>"><i class="fa-solid fa-right-from-bracket"></i></a>
      <?php else: ?>
        <a class="btn btn-sm btn-ghost" href="<?= url('login') ?>">Login</a>
        <a class="btn btn-sm btn-gradient ms-1" href="<?= url('register') ?>">Sign up</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
