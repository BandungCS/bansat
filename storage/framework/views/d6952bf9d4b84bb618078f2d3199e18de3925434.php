<?php $__env->startSection('title_web'); ?>
    Assets
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-0">
    <div class="row">
        <div class="col-md-12">
            <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800 text-center font-weight-bold">Data Assets</h1>
            <div class="card border-0 shadow rounded">                         
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <a href="<?php echo e(route('assets.create')); ?>" class="btn btn-md btn-primary mb-0 font-weight-bold">
                                    Tambah Data Assets
                                </a>            
                            </div>
                        </div>
                    </div>
                <div class="card-body">                
                   
                    <table class="table table-bordered table-hover text-center">
                        <thead class="font-weight-bold text-gray-800">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">noinv</th>
                                <th scope="col">Content</th>
                                <th scope="col">kondisi</th>
                                <th scope="col">kantor</th>
                                <th scope="col">gudang</th>
                                <th scope="col">aula</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                            <?php $no=1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $assetss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                                <tr>
                                    <td><?php echo e($no++); ?></td>                       
                                    <td class="text-center">
                                        <img src="<?php echo e(Storage::url('public/assetss/').$assets->image); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td><?php echo e($assets->nama); ?></td>
                                    <td><?php echo e($assets->kelas); ?></td>
                                    <td><?php echo e($assets->noinv); ?></td>
                                    <td><?php echo $assets->content; ?></td>
                                    <td><?php echo e($assets->kondisi); ?></td>
                                    <td><?php echo e($assets->kantor); ?></td>
                                    <td><?php echo e($assets->gudang); ?></td>
                                    <td><?php echo e($assets->aula); ?></td>
                                    <td><?php echo e($assets->tahun); ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="<?php echo e(route('assets.destroy', $assets->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('assets.show', $assets->id )); ?>" class="btn btn-sm btn-warning font-weight-bold">
                                            Detail
                                        </a>                                        
                                        <a href="<?php echo e(route('assets.edit', $assets->id )); ?>" class="btn btn-sm btn-success font-weight-bold">
                                            Edit                                            
                                        </a>                                        
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger font-weight-bold delete-confirm">
                                                Hapus
                                            </button>                                            
                                        </form>                                        
                                    </td>                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger">
                                    Data assets Belum Tersedia
                                </div>
                                <?php endif; ?>
                        </tbody>                        
                    </table>
                    <?php echo e($assetss->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Public\Documents\bansat\resources\views/assets/index.blade.php ENDPATH**/ ?>