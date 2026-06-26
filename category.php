<div class="container py-5">
  <h1 class="h2 fw-bold"><i class="fa-solid <?= e($cat['icon']) ?> me-2 gradient-text"></i><?= e($cat['name']) ?></h1>
  <p class="text-muted"><?= e($cat['description']) ?></p>
  <div class="row g-4 mt-3"><?php foreach($tools as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
</div>
