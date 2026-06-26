<div class="container py-5">
  <h1 class="h3 fw-bold mb-3">Search results <?= $q?'for "'.e($q).'"':'' ?></h1>
  <form class="row g-2 mb-4">
    <div class="col-md-4"><input class="form-control" name="q" placeholder="Search…" value="<?= e($q) ?>"></div>
    <div class="col-md-3">
      <select class="form-select" name="cat"><option value="">All categories</option>
        <?php foreach($cats as $c): ?><option value="<?= $c['id'] ?>" <?= ($_GET['cat']??'')==$c['id']?'selected':'' ?>><?= e($c['name']) ?></option><?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-2">
      <select class="form-select" name="pricing"><option value="">Pricing</option>
        <?php foreach(['Free','Freemium','Paid'] as $p): ?><option <?= ($_GET['pricing']??'')===$p?'selected':'' ?>><?= $p ?></option><?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-2">
      <select class="form-select" name="sort">
        <?php foreach(['popular'=>'Popular','rating'=>'Top Rated','newest'=>'Newest'] as $k=>$v): ?>
          <option value="<?= $k ?>" <?= $sort==$k?'selected':'' ?>><?= $v ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-1"><button class="btn btn-gradient w-100">Go</button></div>
  </form>
  <div class="row g-4">
    <?php if(!$tools): ?><p class="text-muted">No tools matched.</p><?php endif; ?>
    <?php foreach($tools as $tool) include __DIR__.'/../partials/tool_card.php'; ?>
  </div>
</div>
