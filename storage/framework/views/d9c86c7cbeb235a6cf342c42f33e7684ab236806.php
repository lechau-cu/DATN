
<?php $__env->startSection('title', 'Danh sách dịch vụ'); ?>

<?php $__env->startSection('content'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-6">
                    <h4>Danh sách dịch vụ</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="<?php echo e(route('services.create')); ?>" class="btn bg-gradient-success"><i
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
                                           placeholder="Nhập tên dịch vụ"
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
                                            Tên dịch vụ
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Giá
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Thời gian
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Chi nhánh
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Loại dịch vụ
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Trạng thái
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($services) > 0): ?>
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img style="object-fit: cover"
                                                                 src="https://cdn2.iconfinder.com/data/icons/hotel-12/24/hotel-fitness-room-512.png"
                                                                 class="avatar avatar-sm me-3"
                                                                 alt="avatar">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="<?php echo e(route('services.edit', ['service_id' => $service->id])); ?>"
                                                               class="mb-0 text-sm label-name"><?php echo e($service->name); ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bol mb-0"><?php echo e(number_format($service->price)); ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-sm"><?php echo e($service->duration); ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-sm font-weight-bol mb-0"><?php echo e($service->agency->name); ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-sm font-weight-bol mb-0"><?php if($service->type === 1): ?>
                                                            Dịch vụ tập luyện
                                                        <?php elseif($service->type === 2): ?>
                                                            Dịch vụ cá nhân
                                                        <?php else: ?>
                                                            Dịch vụ khác
                                                        <?php endif; ?></p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-sm font-weight-bol mb-0"><?php if($service->status): ?>
                                                            <span class="badge badge-sm bg-gradient-success">Hoạt động</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-sm bg-gradient-warning">Không hoạt động</span>
                                                        <?php endif; ?></p>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="<?php echo e(route('services.edit', ['service_id' => $service->id])); ?>"
                                                       class="text-warning font-weight-bold text-xs"
                                                       data-toggle="tooltip" data-original-title="Edit user">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>

                                                    <span class="mx-2">|</span>

                                                    <form action="<?php echo e(route('services.destroy', ['service_id' => $service->id])); ?>"
                                                          method="POST" style="display:inline;"
                                                          onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit"
                                                                class="border-0 bg-transparent p-0 text-danger"
                                                                data-toggle="tooltip" data-original-title="Delete user">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
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
                                    <?php echo e($services->links('pagination::bootstrap-4')); ?>

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

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/services/index.blade.php ENDPATH**/ ?>