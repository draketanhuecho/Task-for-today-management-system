<?= $this->include('templates/header') ?>

<h2 class="mb-3"><?= esc($page_title) ?></h2>

<div class="table-responsive">
    <table class="table table-bordered table-hover bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Scheduled Date</th>
                <th>Created At</th>
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
                    <td><?= esc($task['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>