<div class="container py-5">
  <h1 class="h2 fw-bold mb-4">All AI Tools</h1>
  <form class="row g-2 mb-4">
    <div class="col-md-4"><input class="form-control" name="q" placeholder="Search…" value="<?= e($_GET['q']??'') ?>"></div>
    <div class="col-md-3">
      <select class="form-select" name="cat"><option value="">All categories</option>
        <?php foreach($cats as $c): ?><option value="<?= $c['id'] ?>" <?= ($_GET['cat']??'')==$c['id']?'selected':'' ?>><?= e($c['name']) ?></option><?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <select class="form-select" name="sort">
        <?php foreach(['popular'=>'Most Popular','rating'=>'Highest Rated','newest'=>'Newest'] as $k=>$v): ?>
          <option value="<?= $k ?>" <?= $sort==$k?'selected':'' ?>><?= $v ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-2"><button class="btn btn-gradient w-100">Apply</button></div>
  </form>
  <div class="row g-4"><?php foreach($tools as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
  <nav class="mt-4">
    <ul class="pagination justify-content-center">
      <?php for($i=1;$i<=$page['pages'];$i++): if($i>10 && $i<$page['pages']-1 && abs($i-$page['page'])>2) continue; ?>
        <li class="page-item <?= $i==$page['page']?'active':'' ?>"><a class="page-link" href="?page=<?= $i ?>&sort=<?= e($sort) ?>"><?= $i ?></a></li>
      <?php endfor; ?>
    </ul>
  </nav>
</div>
