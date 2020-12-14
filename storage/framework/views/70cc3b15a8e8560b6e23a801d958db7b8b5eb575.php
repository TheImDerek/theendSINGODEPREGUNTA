


<?php $__env->startSection('titulo'); ?>  
clientes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div><a href="<?php echo e(action('ClientesController@create')); ?>">crear usuario <img src="<?php echo e(url('https://image.flaticon.com/icons/png/512/72/72648.png')); ?>"></a></div>
<?php echo e(session('status') ?? ''); ?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Codigo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user->idcliente); ?></th>
      <td><?php echo e($user->nombre_cliente); ?></td>
      <td><?php echo e($user->apellido_cliente); ?></td>
      <td><?php echo e($user->direccion_cliente); ?></td>
      <td><?php echo e($user->codigo_postal_cliente); ?></td>
      <td><?php echo e($user->telefono_cliente); ?></td>
      <td><a href="<?php echo e(action('ClientesController@show',['id'=>$user->idcliente])); ?>"><img src="<?php echo e(url('https://ps.w.org/automatic-safe-update/assets/icon-256x256.png?rev=2090952')); ?>"></a></td>
      <td><a href="<?php echo e(action('ClientesController@destroy',['id'=>$user->idcliente])); ?>"><img src="<?php echo e(url('https://alisteducation.com/wp-content/uploads/2012/06/delete.png')); ?>"></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\poetcircle\resources\views/logclientes/showclientes.blade.php ENDPATH**/ ?>