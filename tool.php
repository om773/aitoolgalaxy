<div class="container py-5">
  <nav class="small text-muted mb-3"><a href="<?= url('') ?>">Home</a> / <a href="<?= url('tools') ?>">Tools</a> / <span><?= e($tool['name']) ?></span></nav>
  <div class="glass p-4 p-md-5">
    <div class="d-flex flex-column flex-md-row align-items-md-center gap-3">
      <img src="<?= e($tool['logo']) ?>" class="tool-logo-lg" alt="<?= e($tool['name']) ?>">
      <div class="flex-grow-1">
        <h1 class="h2 fw-bold mb-1"><?= e($tool['name']) ?></h1>
        <p class="text-muted mb-2"><?= e($tool['tagline']) ?></p>
        <div class="d-flex flex-wrap gap-2 small">
          <span class="badge bg-glass"><i class="fa-solid fa-star text-warning"></i> <?= number_format((float)$tool['rating'],1) ?> (<?= (int)$tool['rating_count'] ?>)</span>
          <span class="badge bg-glass"><?= e($tool['pricing']) ?></span>
          <?php if($cat): ?><a class="badge bg-glass" href="<?= url('category/'.$cat['slug']) ?>"><?= e($cat['name']) ?></a><?php endif; ?>
          <?php if($tool['api_available']): ?><span class="badge bg-glass">API</span><?php endif; ?>
          <?php if($tool['open_source']): ?><span class="badge bg-glass">Open Source</span><?php endif; ?>
        </div>
      </div>
      <div class="d-flex flex-column gap-2">
        <a href="<?= e($tool['website']) ?>" target="_blank" rel="noopener" class="btn btn-gradient" onclick="trackClick(<?= (int)$tool['id'] ?>)"><i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Visit Website</a>
        <button class="btn btn-ghost" onclick="toggleBookmark(<?= (int)$tool['id'] ?>, this)"><i class="fa-regular fa-bookmark"></i> Bookmark</button>
      </div>
    </div>

    <hr class="border-secondary opacity-25 my-4">
    <h2 class="h5">About</h2>
    <p class="text-muted"><?= nl2br(e($tool['description'])) ?></p>

    <?php if($tool['features']): ?>
      <h2 class="h5 mt-4">Features</h2>
      <ul class="list-unstyled">
        <?php foreach(explode(',', $tool['features']) as $f): ?>
          <li><i class="fa-solid fa-check text-success me-2"></i><?= e(trim($f)) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="row mt-4">
      <?php if($pros): ?>
      <div class="col-md-6"><h2 class="h5 text-success"><i class="fa-solid fa-thumbs-up"></i> Pros</h2>
        <ul><?php foreach($pros as $p): ?><li><?= e($p) ?></li><?php endforeach; ?></ul>
      </div><?php endif; ?>
      <?php if($cons): ?>
      <div class="col-md-6"><h2 class="h5 text-danger"><i class="fa-solid fa-thumbs-down"></i> Cons</h2>
        <ul><?php foreach($cons as $p): ?><li><?= e($p) ?></li><?php endforeach; ?></ul>
      </div><?php endif; ?>
    </div>

    <?php if($screenshots): ?>
      <h2 class="h5 mt-4">Screenshots</h2>
      <div class="row g-3">
        <?php foreach($screenshots as $s): ?><div class="col-md-6"><img loading="lazy" src="<?= e($s) ?>" class="img-fluid rounded glass-img" alt="screenshot"></div><?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="d-flex gap-3 mt-4 small">
      Share:
      <a target="_blank" href="https://twitter.com/intent/tweet?url=<?= urlencode(url('tools/'.$tool['slug'])) ?>"><i class="fa-brands fa-x-twitter"></i></a>
      <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(url('tools/'.$tool['slug'])) ?>"><i class="fa-brands fa-linkedin"></i></a>
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(url('tools/'.$tool['slug'])) ?>"><i class="fa-brands fa-facebook"></i></a>
    </div>
  </div>

  <?php if($alternatives): ?>
    <h2 class="h4 mt-5 mb-3">Alternatives</h2>
    <div class="row g-4"><?php foreach($alternatives as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
  <?php endif; ?>
</div>
<script type="application/ld+json">
<?= json_encode([
  '@context'=>'https://schema.org','@type'=>'SoftwareApplication',
  'name'=>$tool['name'],'description'=>$tool['tagline'],'image'=>$tool['logo'],
  'applicationCategory'=>'AI Tool','url'=>$tool['website'],
  'aggregateRating'=>['@type'=>'AggregateRating','ratingValue'=>(float)$tool['rating'],'reviewCount'=>(int)$tool['rating_count']],
]) ?>
</script>
