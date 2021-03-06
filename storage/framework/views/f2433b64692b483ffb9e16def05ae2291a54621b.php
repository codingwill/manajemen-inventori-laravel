
<?php $__env->startSection('title','Tabel Manajer'); ?>


<?php $__env->startSection('content'); ?>
<section class="content">
  <?php if($inputSuccess == 'success'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data berhasil dimasukkan!</strong>
    </div>
  <?php elseif($inputSuccess == 'failed'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data gagal dimasukkan!</strong>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Manajer</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama Manajer</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Password Sementara</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($row->user_id); ?></td>
                  <td><?php echo e($row->nama); ?></td>
                  <td><?php echo e($row->email); ?> </td>
                  <td><?php echo e($row->telp); ?></td>
                  <td><?php echo e($row->alamat); ?></td>
                  <td>
                    <?php if($row->password_changed): ?>
                      <div class="alert alert-success " role="alert">
                        Password sudah diubah oleh pengguna
                      </div>
                    <?php else: ?>
                      <div class="alert alert-danger" role="alert">
                        Password belum diubah oleh pengguna<br>
                        PASSWORD: <strong><?php echo e($row->password); ?></strong>
                      </div>
                    <?php endif; ?>
                  </td>
                  <td>
                      <a href="">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                      </a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SisterTubes\resources\views/tabel/v_tabelmanajer.blade.php ENDPATH**/ ?>