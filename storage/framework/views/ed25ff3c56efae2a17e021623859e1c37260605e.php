<?php $__env->startSection('title_web'); ?>
    Detail Data Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->        
            <h1 class="h3 mb-3 text-gray-800 font-weight-bold text-center">Detail Data Blog</h1>
                   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center text-primary text-dark font-weight-bold">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>nama</th>
                            <th>kelas</th>
                            <th>Noinv</th>
                            <th>Content</th>
                            <th>Kondisi</th>
                            <th>Kantor</th>
                            <th>Gudang</th>
                            <th>Aula</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                                <tr class="text-center">
                                    <td><?php echo e($no++); ?></td>
                                    <td><img src="<?php echo e(Storage::url('public/blogs/').$detail->image); ?>" class="rounded" style="width: 120px; height:120px;"></td>
                                    <td><?php echo e($detail->nama); ?></td>
                                    <td><?php echo e($detail->kelas); ?></td>
                                    <td><?php echo e($detail->noinv); ?></td>
                                    <td><?php echo $detail->content; ?></td>
                                    <td><?php echo e($detail->kondisi); ?></td>
                                    <td><?php echo e($detail->kantor); ?></td>
                                    <td><?php echo e($detail->gudang); ?></td>
                                    <td><?php echo e($detail->aula); ?></td>

                                    
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </tr>
                        
                        </tbody>
                </table>
                <a href="/blog" class="btn btn-success font-weight-bold">Kembali</a>
            </div>
        </div>
    </div> 
</div>
</div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partial.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sbadmin\resources\views/blog/detail.blade.php ENDPATH**/ ?>