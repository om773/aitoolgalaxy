<div class="container py-5">
  <h1 class="h3 fw-bold mb-4"><?= e($title) ?></h1>
  <div class="row g-4">
    <?php if(!$tools): ?><p class="text-muted">Nothing here yet.</p><?php endif; ?>
    <?php foreach($tools as $tool) include __DIR__.'/../partials/tool_card.php'; ?>
  </div>
</div>
