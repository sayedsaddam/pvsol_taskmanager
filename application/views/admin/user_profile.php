<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="list-group list-group-flush z-depth-1 rounded">
                <div class="list-group-item active d-flex justify-content-start align-items-center py-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-0" width="50" alt="avatar image">
                    <div class="d-flex flex-column pl-3">
                        <p class="font-weight-normal mb-0"><?= ucfirst($profile->username); ?></p>
                        <p class="small mb-0">Field Officer</p>
                    </div>
                </div>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Projects
                    <span class="badge badge-info badge-pill">26</span>
                </a>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Tasks
                    <span class="badge badge-warning badge-pill"><?= ($total_tasks = $profile->pending + $profile->progress + $profile->completed); ?></span>
                </a>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Completed projects
                    <span class="badge badge-success badge-pill">10</span>
                </a>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Followers
                    <span class="badge badge-danger badge-pill">728</span>
                </a>
            </div>
        </div>
        <div class="col-8">
            <!-- Section: Block Content -->
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card mt-3">
                            <div class="">
                                <i class="far fa-edit fa-lg warning-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                <div class="float-right text-right p-3">
                                <p class="text-uppercase text-muted mb-1"><small>Pending</small></p>
                                <h4 class="font-weight-bold mb-0"><?php if($profile->pending < 10){ echo '0'; } echo $pending = $profile->pending; ?></h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= round($pending/$total_tasks*100, 2); ?>%" aria-valuenow="<?= round($pending/$total_tasks*100, 2); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round($pending/$total_tasks*100, 2).'% Tasks pending.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card mt-3">
                            <div class="">
                                <i class="fas fa-spinner fa-lg info-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                <div class="float-right text-right p-3">
                                <p class="text-uppercase text-muted mb-1"><small>Progress</small></p>
                                <h4 class="font-weight-bold mb-0"><?php if($profile->progress < 10){ echo '0'; } echo $progress = $profile->progress; ?></h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?= round($progress/$total_tasks*100, 2); ?>%" aria-valuenow="<?= round($progress/$total_tasks*100, 2); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round($progress/$total_tasks*100, 2).'% Tasks in progress.'; ?></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card mt-3">
                            <div class="">
                                <i class="fa fa-check fa-lg success-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                <div class="float-right text-right p-3">
                                <p class="text-uppercase text-muted mb-1"><small>completed</small></p>
                                <h4 class="font-weight-bold mb-0"><?php if($profile->completed < 10){ echo '0'; } echo $completed = $profile->completed; ?></h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?= round($completed/$total_tasks*100, 2); ?>%" aria-valuenow="<?= round($completed/$total_tasks*100, 2); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round($completed/$total_tasks*100, 2).'% Tasks completed.' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-8">
                <h5 class="card-title">List of Tasks &raquo; <?= ucfirst($profile->username); ?></h5>
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
                  <th>Task Description</th>
                  <th>Due Date</th>
                  <th>Priority</th>
                  <th>Status</th>
                  <th>Assigned</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($tasks)): $serial = 1; foreach($tasks as $task): if($task->user_id == $this->uri->segment(3)): ?>
                <tr>
                  <th scope="row"><?= $serial++; ?></th>
                  <td><?= ucfirst($task->task_description); ?></td>
                  <td><?= date('M d, Y', strtotime($task->due_date)); ?></td>
                  <td>
                    <?php if($task->priority == 1){ echo '<span class="badge badge-info">Low</span>'; }elseif($task->priority == 2){ echo '<span class="badge badge-primary">Medium</span>'; }elseif($task->priority == 3){ echo '<span class="badge badge-danger">High</span>'; } ?>
                  </td>
                  <td>
                    <?php if($task->status == 0){ echo '<span class="badge badge-warning badge-pill">Pending</span>'; }elseif($task->status == 1){ echo '<span class="badge badge-secondary badge-pill">In Progress</span>'; }else{ echo '<span class="badge badge-success badge-pill">Completed</span>'; } ?>
                  </td>
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