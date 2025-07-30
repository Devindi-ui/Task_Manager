<div class="d-flex justify-content-between align-items-mb-4">
    <h2 class="h4 mb=0">My tasks</h2>
    <div class="btn-group">
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            <i class="fas fa-filter me-1"></i>fa-filter           
        </button>
        <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">All Tasks</a></li>
                <li><a href="#" class="dropdown-item">Pending</a></li>
                <li><a href="#" class="dropdown-item">In Progress</a></li>
                <li><a href="#" class="dropdown-item">Completed</a></li>
        </ul>
    </div>
</div>

<?php if ($tasks->rowCount()>0): ?>
    <div class="table-responsive">
        <div class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($task = $tasks->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td>
                            <strong></strong>
                        </td>
                    </tr>
                    <?php endwhile; ?>
            </tbody>
        </div>
    </div>

    <?php else: ?>
        <div class="text-center py-5">
            <i class="fas fa-tasks fa-4x text-muted mb-3"></i>
            <h3>No Tasks Found</h3>
            <p class="text-muted">Get started by creating a new task</p>
            <a href="index.php?action=create" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>
            Create Task</a>
        </div>

    <?php endif; ?>