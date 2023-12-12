<!-- resources/views/projects/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Project</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('projects.update', $project->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <!-- Add your form fields for editing project details (title, description, image, video, type) -->

                                <div class="form-group">
                                    <label for="title">Project Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($project->title); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="description1">Project Description1</label>
                                    <textarea class="form-control" id="description1" name="description1" rows="4" required><?php echo e($project->description1); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description2">Project Description2</label>
                                    <textarea class="form-control" id="description2" name="description2" rows="4" required><?php echo e($project->description2); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image1">Project Image</label>
                                    <input type="file" class="form-control" id="image1" name="image1">
                                    <?php if($project->image1): ?>
                                        <img src="<?php echo e(asset($project->image1)); ?>" alt="<?php echo e($project->title); ?>" class="img-fluid" style="max-width: 200px; margin-top: 10px;">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="image2">Project Image</label>
                                    <input type="file" class="form-control" id="image2" name="image2">
                                    <?php if($project->image2): ?>
                                        <img src="<?php echo e(asset($project->image2)); ?>" alt="<?php echo e($project->title); ?>" class="img-fluid" style="max-width: 200px; margin-top: 10px;">
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="video">Project Video</label>
                                    <input type="file" class="form-control" id="video" name="video">
                                    <?php if($project->video): ?>
                                        <video width="320" height="240" controls>
                                            <source src="<?php echo e(asset($project->video)); ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="type">Project Type</label>
                                    <select class="form-control" id="type" name="type" required>
                                        <option value="Design" <?php echo e($project->type === 'Design' ? 'selected' : ''); ?>>Design</option>
                                        <option value="Development" <?php echo e($project->type === 'Development' ? 'selected' : ''); ?>>Development</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Project</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LionProDev\resources\views/back-end/projects/edit.blade.php ENDPATH**/ ?>