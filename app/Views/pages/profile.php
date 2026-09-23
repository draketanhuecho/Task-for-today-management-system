<?= $this->include('templates/header') ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">User Profile</h4>
            </div>
            <div class="card-body">
                <?php if ($user): ?>
                    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                    <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
                    <p><strong>Email Address:</strong> <?= esc($user['email']) ?></p>
                    <p><strong>Member Since:</strong> <?= esc($user['created_at']) ?></p>
                <?php else: ?>
                    <p class="text-danger">No user record found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>