<div class="container py-5">
  <h1 class="h2 fw-bold gradient-text">Hi <?= e(auth()['name']) ?> 👋</h1>
  <div class="row g-3 my-2">
    <div class="col-md-3"><a class="glass d-block p-3 text-decoration-none" href="<?= url('bookmarks') ?>"><i class="fa-solid fa-bookmark"></i> Bookmarks</a></div>
    <div class="col-md-3"><a class="glass d-block p-3 text-decoration-none" href="<?= url('favorites') ?>"><i class="fa-solid fa-heart"></i> Favorites</a></div>
    <div class="col-md-3"><a class="glass d-block p-3 text-decoration-none" href="<?= url('profile') ?>"><i class="fa-solid fa-user"></i> Profile</a></div>
    <div class="col-md-3"><a class="glass d-block p-3 text-decoration-none" href="<?= url('logout') ?>"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></div>
  </div>
  <h2 class="h5 mt-4">Recently Viewed</h2>
  <div class="row g-4"><?php foreach($recent as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
  <h2 class="h5 mt-5">Your Bookmarks</h2>
  <div class="row g-4"><?php foreach($bookmarks as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
</div>
