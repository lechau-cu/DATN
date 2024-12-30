
<?php $__env->startSection('title', 'Thêm mới dịch vụ'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thêm mới dịch vụ</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('services.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Tên dịch vụ <span
                                        class="field-required"> *</span></label>
                            <input type="text" name="name" id="name"
                                   class="form-control"
                                   placeholder="Nhập tên dịch vụ" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="duration" class="form-label">Thời gian</label>
                            <input type="text" name="duration" id="duration" class="form-control"
                                   placeholder="Nhập thời gian dịch vụ">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Giá dịch vụ</label>
                            <input type="text" name="price" id="price" class="form-control"
                                   placeholder="Nhập giá dịch vụ">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Trạng thái <span
                                        class="field-required"> *</span></label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="agency_id" class="form-label">Chi nhánh <span
                                        class="field-required"> *</span></label>
                            <select name="agency_id" id="agency_id" class="form-select" required>
                                <?php $__currentLoopData = $agencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($agency->id); ?>"><?php echo e($agency->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Loại dịch vụ <span
                                        class="field-required"> *</span></label>
                            <select name="type" id="type" class="form-select" required>
                                <option value="1">Dịch vụ tập luyện</option>
                                <option value="2">Dịch vụ cá nhân</option>
                                <option value="3">Dịch vụ khác</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Mô tả </label>
                            <textarea name="description" id="description" class="form-control" rows="3"
                                      placeholder="Nhập mô tả dịch vụ"></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2">Lưu</button>
                        <a href="<?php echo e(route('services.index')); ?>" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/services/create.blade.php ENDPATH**/ ?>