<h2 class="h4 mb-4">Edit Task</h2>

<form action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $task['id']?>">

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?= htmlspecialchars($task['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3">
            <?= htmlspecialchars($task['description']) ?>
        </textarea>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" name="due_date" id="due_date" class="form-control" value="<?= $task['due_date'] ?>" required>
        </div>

        <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="pending" <?= $task['status'] == 'pending'? 'selected' : ''?> >Pending</option>
                <option value="in_progress" <?= $task['status'] == 'in_progress'? 'selected' : ''?>>In Progress</option>
                <option value="completed" <?= $task['status'] == 'completed'? 'selected' : ''?>>Completed</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="index.php?action=index" class="btn btn-outlin-secondary">
            <i class="fas fa-arrow-left me-1"></i> Cancel
        </a>
        <button type="submit" class="btn btn-outline-primary">
            <i class="fas fa-save me-1"></i> Update Task
        </button>
    </div>
</form>