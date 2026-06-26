<div class="container py-5">
  <h1 class="h2 fw-bold mb-3 gradient-text"><?= ucfirst('contact') ?></h1>
  <div class="glass p-4">
    <p class="text-muted">Edit this section to add your contact content.</p>
    <?php if ('contact'==='contact'): ?>
      <?php if($msg=flash('success')): ?><div class="alert alert-success"><?= e($msg) ?></div><?php endif; ?>
      <form method="post" class="row g-3">
        <?= csrf_field() ?>
        <div class="col-md-6"><input class="form-control" name="name" placeholder="Name" required></div>
        <div class="col-md-6"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
        <div class="col-12"><input class="form-control" name="subject" placeholder="Subject" required></div>
        <div class="col-12"><textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea></div>
        <div class="col-12"><button class="btn btn-gradient">Send message</button></div>
      </form>
    <?php endif; ?>
  </div>
</div>
