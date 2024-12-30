

<?php $__env->startSection('title', 'Thêm mới lịch tập luyện'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thêm mới lịch tập luyện</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('customer_schedules.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="customer_id" class="form-label">Chọn khách hàng <span
                                        class="field-required"> *</span></label>
                            <select name="customer_id" id="customer_id" class="form-select" required>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="user_id" class="form-label">Chọn huấn luyện viên <span
                                        class="field-required"> *</span></label>
                            <select name="user_id" id="user_id" class="form-select" required>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_time" class="form-label">Thời gian bắt đầu</label>
                            <input type="datetime-local" name="start_time" id="start_time"
                                   class="form-control"
                                   value="<?php echo e(old('start_time')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_time" class="form-label">Thời gian kết thúc</label>
                            <input type="datetime-local" name="end_time" id="end_time"
                                   class="form-control"
                                   value="<?php echo e(old('end_time')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="note" class="form-label">Ghi chú</label>
                            <textarea name="note" id="note"
                                      class="form-control"
                                      placeholder="Ghi chú"><?php echo e(old('note')); ?></textarea>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2">Lưu</button>
                        <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/customers/schedules/create.blade.php ENDPATH**/ ?>