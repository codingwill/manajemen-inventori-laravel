
<?php $__env->startSection('title','Tabel Produk'); ?>


<?php $__env->startSection('content'); ?>
<h1>Ini Halaman Tabel Produk</h1>
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
              <h3 class="box-title">Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered ">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stok</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <a href="produk"><td><?php echo e($loop->index + 1); ?></td></a>
                      <td><?php echo e($row->kategoriNama); ?></td>
                      <td><?php echo e($row->nama); ?></td>
                      <td><?php echo e($row->stok); ?> </td>
                      <td>Rp <?php echo e(number_format($row->harga, 2, ',', '.')); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--
                  <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                -->
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stok</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SisterTubes\resources\views/tabel/v_tabelproduk.blade.php ENDPATH**/ ?>