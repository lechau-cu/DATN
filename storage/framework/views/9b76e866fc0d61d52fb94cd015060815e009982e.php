
<?php $__env->startSection('title', 'Thêm mới trang'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thêm mới trang</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('pages.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="slug" class="form-label">Nhập slug <span
                                        class="field-required"> *</span></label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                   placeholder="Nhập slug" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Trạng thái <span class="field-required"> *</span></label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="1">Kích hoạt</option>
                                <option value="0">Không kích hoạt</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="content" class="form-label">Nội dung trang <span
                                        class="field-required"> *</span></label>
                            <textarea name="content" id="content" class="form-control"
                                      placeholder="Nhập nội dung trang" required> </textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2">Lưu</button>
                        <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    .field-required {
        color: red;
    }
</style>
<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/pages/create.blade.php ENDPATH**/ ?>