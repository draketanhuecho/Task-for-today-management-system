<?= $this->include('templates/header') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2><?= esc($page_title) ?> (<?= date('Y-m-d') ?>)</h2>
</div>

<?php if (empty($tasks)): ?>
    <div class="alert alert-info">No tasks scheduled for today.</div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-bordered table-striped bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <span class="badge bg-<?= $task['status'] === 'completed' ? 'success' : 'warning' ?>">
                                <?= esc(ucfirst($task['status'])) ?>
                            </span>
                        </td>
                        <td><?= esc($task['task_date']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?= $this->include('templates/footer') ?>