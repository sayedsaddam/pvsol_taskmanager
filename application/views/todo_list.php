<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="list-group list-group-flush z-depth-1 rounded">
                <div class="list-group-item active d-flex justify-content-start align-items-center py-3">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle z-depth-0" width="50" alt="avatar image">
                    <div class="d-flex flex-column pl-3">
                    <p class="font-weight-normal mb-0">Mark Otto</p>
                    <p class="small mb-0">Field Officer</p>
                    </div>
                </div>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Projects
                    <span class="badge badge-info badge-pill">26</span>
                </a>
                <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Tasks
                    <span class="badge badge-warning badge-pill">17</span>
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
                                <h4 class="font-weight-bold mb-0">08</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= (8/17*100); ?>%" aria-valuenow="<?= (8/17*100); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round(8/17*100, 2).'% Tasks pending.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card mt-3">
                            <div class="">
                                <i class="fas fa-spinner fa-lg info-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                <div class="float-right text-right p-3">
                                <p class="text-uppercase text-muted mb-1"><small>Progress</small></p>
                                <h4 class="font-weight-bold mb-0">05</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?= round(5/17*100, 2); ?>%" aria-valuenow="<?= round(5/17*100, 2); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round(5/17*100, 2).'% Tasks in progress.'; ?></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card mt-3">
                            <div class="">
                                <i class="fa fa-check fa-lg success-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                <div class="float-right text-right p-3">
                                <p class="text-uppercase text-muted mb-1"><small>completed</small></p>
                                <h4 class="font-weight-bold mb-0">04</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="progress md-progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?= round(4/17*100, 2); ?>%" aria-valuenow="<?= round(4/17*100, 2); ?>" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                                <p class="card-text"><?= round(4/17*100, 2).'% Tasks completed.' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>