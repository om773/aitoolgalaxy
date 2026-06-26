<div class="container py-5"><div class="row justify-content-center"><div class="col-md-6">
  <div class="glass p-4 p-md-5">
    <h1 class="h3 fw-bold gradient-text mb-3">Your profile</h1>
    <p><strong>Name:</strong> <?= e($u['name']) ?></p>
    <p><strong>Email:</strong> <?= e($u['email']) ?></p>
    <p><strong>Joined:</strong> <?= e($u['created_at']) ?></p>
  </div>
</div></div></div>
