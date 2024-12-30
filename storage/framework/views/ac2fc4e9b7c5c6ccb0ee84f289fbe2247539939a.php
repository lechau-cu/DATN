

<?php $__env->startSection('title', 'Danh sách dich vụ khách hàng'); ?>

<?php $__env->startSection('content'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-6">
                    <h4>Danh sách dịch vụ khách hàng</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="<?php echo e(route('customer_services.create')); ?>" class="btn bg-gradient-success"><i
                                class="bi bi-plus-circle me-2"></i> Thêm mới</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <form action="#" method="GET" class="d-inline">
                                <div class="input-group w-30">
                                    <input type="text"
                                           name="search"
                                           class="form-control custom-input"
                                           placeholder="Nhập tên dịch vụ hoặc khách hàng"
                                           value="<?php echo e(old('search', request('search'))); ?>">
                                    <span class="input-group-text">
            <i class="bi bi-search"></i>
        </span>
                                </div>
                            </form>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tên khách hàng
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tên dịch vụ
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Người tạo
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Thời gian đăng ký
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Thời gian kết thúc
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($items) > 0): ?>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="https://cdn0.iconfinder.com/data/icons/hotel-service-7/64/gym-fitness-workout-center-512.png"
                                                                 class="avatar avatar-sm me-3"
                                                                 alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="text-sm font-weight-bol mb-0"><?php echo e($item->customer->name ?? ''); ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bol mb-0"><?php echo e($item->service->name ?? ''); ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-sm"><?php echo e($item->user->name ?? ''); ?></span>
                                                </td>
                                                <td class="align-middle text-left">
                                                    <p class="text-sm font-weight-bol mb-0"><?php echo e($item->created_at ? $item->created_at->format('d/m/Y') : ''); ?></p>
                                                </td>
                                                <td class="align-middle text-left">
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        <?php echo e($item->end_time ? \Carbon\Carbon::parse($item->end_time)->format('d/m/Y') : ''); ?>

                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center"><img
                                                        src="https://www.carflow.qa/images/empty_item.svg"
                                                        alt="Not Found" style="width: 150px; margin: 20px 0;">
                                                <p class="text-secondary">Không tìm thấy bản ghi nào!</p></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end mt-3" style="margin-right: 16px;">
                                    <?php echo e($items->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/customers/services/index.blade.php ENDPATH**/ ?>