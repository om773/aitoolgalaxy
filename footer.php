<footer class="footer mt-5 pt-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <h5 class="gradient-text fw-bold">AIHub</h5>
        <p class="text-muted small">The ultimate directory of AI tools. Curated, ranked, and updated daily.</p>
      </div>
      <div class="col-md-2">
        <h6>Explore</h6>
        <ul class="list-unstyled small">
          <li><a href="<?= url('tools') ?>">All Tools</a></li>
          <li><a href="<?= url('categories') ?>">Categories</a></li>
          <li><a href="<?= url('blog') ?>">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <h6>Company</h6>
        <ul class="list-unstyled small">
          <li><a href="<?= url('about') ?>">About</a></li>
          <li><a href="<?= url('contact') ?>">Contact</a></li>
          <li><a href="<?= url('faq') ?>">FAQ</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6>Newsletter</h6>
        <form id="newsletterForm" class="d-flex gap-2">
          <input class="form-control" type="email" name="email" placeholder="you@email.com" required>
          <button class="btn btn-gradient">Subscribe</button>
        </form>
        <div id="newsletterMsg" class="small mt-2 text-success"></div>
      </div>
    </div>
    <hr class="border-secondary opacity-25">
    <div class="d-flex justify-content-between small text-muted py-3 flex-wrap gap-2">
      <span>© <?= date('Y') ?> AIHub. All rights reserved.</span>
      <div>
        <a href="<?= url('privacy') ?>" class="me-3">Privacy</a>
        <a href="<?= url('terms') ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>
