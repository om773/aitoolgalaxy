<div class="container py-5">
  <h1 class="h2 fw-bold mb-4">All Categories</h1>
  <div class="row g-3">
    <?php foreach($cats as $c): ?>
    <div class="col-6 col-md-3 col-lg-2">
      <a href="<?= url('category/'.$c['slug']) ?>" class="cat-tile glass d-block text-center text-decoration-none">
        <i class="fa-solid <?= e($c['icon']) ?> fa-2x mb-2 gradient-text"></i>
        <div class="small text-light"><?= e($c['name']) ?></div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
