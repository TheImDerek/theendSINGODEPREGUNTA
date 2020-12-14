

<?php $__env->startSection('titulo'); ?>
<?php if((isset($clientes)) and (is_object($clientes))): ?>
    modificacion de datos de usuario
    <?php
    $title1='modificacion de datos de usuario';
    $nombre_cliente=$clientes->nombre_cliente;
    $apellido_cliente=$clientes->apellido_cliente;
    $direccion_cliente=$clientes->direccion_cliente;
    $codigo_postal_cliente=$clientes->codigo_postal_cliente;
    $telefono_cliente=$clientes->telefono_cliente;
    $idcliente=$clientes->idcliente;
    ?>
    <?php else: ?>
    alta de un nuevo usuario
    <?php
    $title1='alta de un nuevo usuario';
    $nombre_cliente='';
    $apellido_cliente='';
    $direccion_cliente='';
    $codigo_postal_cliente='';
    $telefono_cliente='';
    $idcliente='';
    ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div></div>
<form action="<?php echo e(isset($clientes) ?  action('ClientesController@update') : action('ClientesController@save')); ?>" method="post" >
        <?php echo e(csrf_field()); ?>

        <?php if((isset($clientes)) and (is_object($clientes))): ?>
        <input type="hidden" name="idcliente" value="<?php echo e($idcliente); ?>">
        <?php endif; ?>
        <label for="nombre_cliente">Nombre</label>
        <input type="text" name="nombre_cliente" value="<?php echo e($nombre_cliente); ?>">
        <br>
        <label for="apellido_cliente">Apellido</label>
        <input type="text" name="apellido_cliente" value="<?php echo e($apellido_cliente); ?>">
        <br>
        <label for="direccion_cliente">Direccion</label>
        <input type="text" name="direccion_cliente" value="<?php echo e($direccion_cliente); ?>">
        <br>
        <label for="codigo_postal_cliente">Codig postal</label>
        <input type="text" name="codigo_postal_cliente" value="<?php echo e($codigo_postal_cliente); ?>">
        <br>
        <label for="telefono_cliente">Telefono</label>
        <input type="text" name="telefono_cliente" value="<?php echo e($telefono_cliente); ?>">
        <br>
        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\poetcircle\resources\views/logclientes/altacliente.blade.php ENDPATH**/ ?>