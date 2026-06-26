<?php /** @var array $tool */ ?>
<div class="col-sm-6 col-lg-4 col-xl-3">
  <a href="<?= url('tools/'.$tool['slug']) ?>" class="tool-card glass d-block h-100 text-decoration-none" data-aos="fade-up">
    <div class="d-flex align-items-center mb-3">
      <img loading="lazy" src="<?= e($tool['logo'] ?: 'https://via.placeholder.com/64') ?>" alt="<?= e($tool['name']) ?>" class="tool-logo">
      <div class="ms-3">
        <h6 class="mb-0 text-light"><?= e($tool['name']) ?></h6>
        <small class="text-muted"><?= e($tool['pricing']) ?></small>
      </div>
      <span class="ms-auto badge bg-glass"><i class="fa-solid fa-star text-warning"></i> <?= number_format((float)$tool['rating'],1) ?></span>
    </div>
    <p class="small text-muted mb-3 line-clamp-2"><?= e($tool['tagline']) ?></p>
    <div class="d-flex justify-content-between small text-muted">
      <span><i class="fa-regular fa-eye"></i> <?= number_format((int)$tool['views']) ?></span>
      <span><i class="fa-solid fa-arrow-up-right-from-square"></i> <?= number_format((int)$tool['clicks']) ?></span>
    </div>
  </a>
</div>
