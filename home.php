<section class="hero">
  <div class="container py-5 text-center position-relative">
    <span class="badge bg-glass mb-3" data-aos="fade-down">🚀 <?= number_format($totalTools) ?>+ AI tools indexed</span>
    <h1 class="display-3 fw-bold gradient-text" data-aos="fade-up">Discover 1000+ Powerful AI Tools</h1>
    <p class="lead text-muted mx-auto" style="max-width:680px" data-aos="fade-up" data-aos-delay="100">
      The curated directory of the best AI tools for writing, coding, design, video, marketing and more.
    </p>
    <form action="<?= url('search') ?>" class="hero-search mx-auto mt-4" data-aos="zoom-in">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input name="q" placeholder="Search for ChatGPT, Midjourney, Copilot…">
      <button class="btn btn-gradient">Search</button>
    </form>
    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
      <?php foreach (array_slice($cats,0,10) as $c): ?>
        <a class="chip" href="<?= url('category/'.$c['slug']) ?>"><i class="fa-solid <?= e($c['icon']) ?>"></i> <?= e($c['name']) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="container my-5">
  <div class="d-flex align-items-end justify-content-between mb-4">
    <div><h2 class="h3 fw-bold mb-1">🔥 Trending Tools</h2><small class="text-muted">What everyone is using this week</small></div>
    <a href="<?= url('tools?sort=popular') ?>" class="btn btn-sm btn-ghost">View all <i class="fa-solid fa-arrow-right"></i></a>
  </div>
  <div class="row g-4"><?php foreach($trending as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
</section>

<section class="container my-5">
  <div class="d-flex align-items-end justify-content-between mb-4">
    <div><h2 class="h3 fw-bold mb-1">⭐ Featured</h2><small class="text-muted">Editor's picks</small></div>
    <a href="<?= url('tools') ?>" class="btn btn-sm btn-ghost">All tools</a>
  </div>
  <div class="row g-4"><?php foreach($featured as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
</section>

<section class="container my-5">
  <h2 class="h3 fw-bold mb-4">🗂 Top Categories</h2>
  <div class="row g-3">
    <?php foreach($cats as $c): ?>
    <div class="col-6 col-md-3 col-lg-2">
      <a href="<?= url('category/'.$c['slug']) ?>" class="cat-tile glass d-block text-center text-decoration-none" data-aos="fade-up">
        <i class="fa-solid <?= e($c['icon']) ?> fa-2x mb-2 gradient-text"></i>
        <div class="small text-light"><?= e($c['name']) ?></div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="container my-5">
  <h2 class="h3 fw-bold mb-4">🆕 Recently Added</h2>
  <div class="row g-4"><?php foreach($recent as $tool) include __DIR__.'/../partials/tool_card.php'; ?></div>
</section>

<section class="container my-5">
  <h2 class="h3 fw-bold mb-4 text-center">💬 What people say</h2>
  <div class="swiper testimonialSwiper">
    <div class="swiper-wrapper">
      <?php foreach($testimonials as $t): ?>
        <div class="swiper-slide">
          <div class="glass p-4 text-center h-100">
            <img src="<?= e($t['avatar']) ?>" class="rounded-circle mb-3" width="64" height="64" alt="">
            <p class="text-light">"<?= e($t['body']) ?>"</p>
            <strong><?= e($t['name']) ?></strong><br>
            <small class="text-muted"><?= e($t['role']) ?></small>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
