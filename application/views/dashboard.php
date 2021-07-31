<div class="container-fluid my-5">
  <!-- Section -->
  <section>
    <?php if($success = $this->session->flashdata('success')): ?>
    <div class="row">
      <div class="col-12">
        <div class="alert alert-success">
          <?= $success; ?>
        </div>
      </div>
    </div>
    <?php elseif($faiiled = $this->session->flashdata('failed')): ?>
      <div class="row">
      <div class="col-12">
        <div class="alert alert-success">
          <?= $failed; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-8">
                <h5 class="card-title">Task List - Staff</h5>
              </div>
              <div class="col-4 text-right">
                <a data-toggle="modal" data-target="#add_task" class="text-info font-weight-bold"><i class="fa fa-plus"></i> Add New</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-hover table-bordered table-sm table-responsive-md btn-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <th>Task Description</th>
                  <th>Due Date</th>
                  <th>Priority</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($tasks)): $serial = 1; foreach($tasks as $task): ?>
                <tr>
                  <th scope="row"><?= $serial++; ?></th>
                  <td><?= ucfirst($task->username); ?></td>
                  <td><a href="<?= base_url('admin/todo_list/'.$task->user_id); ?>"><?= ucfirst($task->task_description); ?></a></td>
                  <td><?= date('M d, Y', strtotime($task->due_date)); ?></td>
                  <td><span class="badge badge-secondary"><?php if($task->priority == 1){ echo 'Low'; }elseif($task->priority == 2){ echo 'Medium'; }elseif($task->priority == 3){ echo 'High'; } ?></span></td>
                  <td><span class="badge badge-warning badge-pill"><?php if($task->status == 0){ echo 'Pending'; }else{ echo 'Completed'; } ?></span></td>
                </tr>
                <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-8">
                <h5 class="card-title">Todos - My Tasks</h5>
              </div>
              <div class="col-4 text-right">
                <a data-toggle="modal" data-target="#add_todo" class="text-info font-weight-bold"><i class="fa fa-plus"></i> Add New</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="">Pending</a>
                <span class="badge badge-warning badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="">Progress</a>
                <span class="badge badge-secondary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="">Completed</a>
                <span class="badge badge-success badge-pill">1</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section -->
</div>
<!-- Side Modal Top Left -->
<div class="modal fade left" id="add_task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-side modal-top-left" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add / Assign Task</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/assign_task'); ?>" method="post">
          <div class="md-form mb-4">
            <select name="emp_id" class="browser-default custom-select">
              <option value="" disabled selected>--select employee--</option>
              <?php if(!empty($users)): foreach($users as $user): ?>
                <option value="<?= $user->id; ?>"><?= ucfirst($user->username); ?></option>
              <?php endforeach; endif; ?>
            </select>
          </div>
          <div class="md-form mb-4">
            <input type="date" name="due_date" class="form-control">
          </div>
          <div class="md-form mb-4">
            <select name="priority" class="browser-default custom-select">
              <option value="" disabled selected>Priority</option>
              <option value="1">Low</option>
              <option value="2">Medium</option>
              <option value="3">High</option>
            </select>
          </div>
          <div class="md-form mb-4">
            <textarea name="task_description" id="form8" class="md-textarea form-control" rows="3"></textarea>
          </div>
          <div class="md-form mb-5">
            <button type="submit" class="btn btn-primary btn-block">Save changes</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Side Modal Top Left -->
<!-- Side Modal Top Right -->
<div class="modal fade right" id="add_todo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-side modal-top-right" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add Todo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Side Modal Top Right -->