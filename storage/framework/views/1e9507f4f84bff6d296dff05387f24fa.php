<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">Manage Projects</h4>
                                <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary btn-sm">Add New Project</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>Image1</th>
                                        <th>Image2</th>
                                        <th>Type</th>
                                        <th>Video Testimonial</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($project->title); ?></td>
                                            <td><?php echo e($project->description1); ?></td>
                                            <td><?php echo e($project->description2); ?></td>
                                            <td>
                                                <?php if($project->image1): ?>
                                                    <img src="<?php echo e(asset( $project->image1)); ?>" alt="<?php echo e($project->title); ?>" class="" style="height: 100px; width: 100px; border-radius: 0;">
                                                <?php else: ?>
                                                    No Image
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($project->image2): ?>
                                                    <img src="<?php echo e(asset( $project->image2)); ?>" alt="<?php echo e($project->title); ?>" class="" style="height: 100px; width: 100px; border-radius: 0;">
                                                <?php else: ?>
                                                    No Image
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php echo e($project->type); ?>

                                            </td>
                                            <td>
                                                <?php if($project->video): ?>
                                                    <a href="<?php echo e(route('projects.video', ['filename' => basename($project->video)])); ?>" class="btn btn-primary btn-sm" target="_blank">View</a>
                                                <?php else: ?>
                                                    No Video
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Project Actions">
                                                    <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST" style="display: inline-block;">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LionProDev\resources\views/back-end/projects/index.blade.php ENDPATH**/ ?>