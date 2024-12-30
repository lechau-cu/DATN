

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Doanh thu</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e(number_format($totalRevenue)); ?> đ
                                    <?php if($revenueChangePercentage > 0): ?>
                                        <span class="text-success text-sm font-weight-bolder">+<?php echo e($revenueChangePercentage); ?>%</span>
                                    <?php else: ?>
                                        <span class="text-danger text-sm font-weight-bolder">-<?php echo e($revenueChangePercentage); ?>%</span>
                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Khách hàng mới</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($totalCustomers); ?>

                                    <?php if($customerChangePercentage > 0): ?>
                                        <span class="text-success text-sm font-weight-bolder">+<?php echo e($customerChangePercentage); ?>%</span>
                                    <?php else: ?>
                                        <span class="text-danger text-sm font-weight-bolder">-<?php echo e($customerChangePercentage); ?>%</span>
                                    <?php endif; ?>                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tổng số nhân viên</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo e($totalEmployees); ?>

                                    <?php if($employeeChangePercentage > 0): ?>
                                        <span class="text-success text-sm font-weight-bolder">+<?php echo e($employeeChangePercentage); ?>%</span>
                                    <?php else: ?>
                                        <span class="text-danger text-sm font-weight-bolder">-<?php echo e($employeeChangePercentage); ?>%</span>
                                    <?php endif; ?>                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(auth()->user()->role == 1): ?>
        <div class="row my-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-lg-6 col-7">
                                <h6>Thống kê theo chi nhánh</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Chi
                                        nhánh
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Doanh thu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Số lượng khách hàng
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Số lượng nhân viên
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Số lượng dịch vụ
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Dịch vụ đăng ký nhiều nhất
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $agencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo e($item['agency']); ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm"><?php echo e(number_format($item['revenue'])); ?> đ</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm"><?php echo e(number_format($item['total_customers'])); ?></h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm"><?php echo e(number_format($item['total_employees'])); ?></h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2 text-center">
                                                <h6 class="mb-0 text-sm"><?php echo e(number_format($item['total_sessions'])); ?></h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm"><?php echo e($item['most_popular_service'] ?: '-'); ?></h6>
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
    <?php endif; ?>
    <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-lg-6 col-7">
                            <h6>Lịch tập trong tuần</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">Tổng: <?php echo e(count($schedules)); ?> buổi</span>
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-secondary"></i>
                                </a>
                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
                                    </li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                            here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Khách
                                    hàng
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Thời gian
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Người hướng dẫn
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($schedules)): ?>
                                <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo e($schedule->customer->name); ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class="mb-0 text-sm"><?php echo e(\Carbon\Carbon::parse($schedule->created_at)->format('d/m/Y')); ?></h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"><?php echo e($schedule->user->name); ?> </span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/dashboard.blade.php ENDPATH**/ ?>