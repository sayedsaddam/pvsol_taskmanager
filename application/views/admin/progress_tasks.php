<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-8">
                <h5 class="card-title">List of Tasks &raquo; In Progress &raquo; <small><a href="javascript:history.go(-1)">Back</a></small></h5>
              </div>
              <div class="col-4 text-right">
                <a data-toggle="modal" data-target="#add_task" class="text-info font-weight-bold"><i class="fa fa-plus"></i> Add New</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered table-sm table-responsive-md btn-table">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Assignee</th>
                  <th>Task Description</th>
                  <th>Due Date</th>
                  <th>Priority</th>
                  <th>Status</th>
                  <th>Assigned</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($tasks)): $serial = 1; foreach($tasks as $task): if($task->status == 'progress'): ?>
                <tr>
                  <th scope="row"><?= $serial++; ?></th>
                  <td>
                    <a href="<?= base_url('admin/user_profile/'.$task->user_id); ?>" class="text-info" title="Click to view all user activity..."><?php if($task->user_id == $this->session->userdata('id')){ echo 'Own'; }else{ echo ucfirst($task->username); } ?></a>
                  </td>
                  <td><?= ucfirst($task->task_description); ?></td>
                  <td><?= date('M d, Y', strtotime($task->due_date)); ?></td>
                  <td>
                    <?php if($task->priority == 'low'){ echo '<span class="badge badge-info">Low</span>'; }elseif($task->priority == 'medium'){ echo '<span class="badge badge-primary">Medium</span>'; }elseif($task->priority == 'high'){ echo '<span class="badge badge-danger">High</span>'; } ?>
                  </td>
                  <td><span class="badge badge-secondary badge-pill">In Progress</span></td>
                  <td><?= date('M d, Y', strtotime($task->created_at)); ?></td>
                </tr>
                <?php endif; endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
        </div>
    </div>
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
              <option value="" disabled selected>--Assignee--</option>
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
              <option value="" disabled selected>--Priority--</option>
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