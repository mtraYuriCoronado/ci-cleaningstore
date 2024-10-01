<?= $this->extend('templates/admin_template'); ?>

<!-- Estilos -->
<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= site_url('css/cliente/estilo_clientes.css'); ?>">
<?= $this->endSection(); ?>


<!-- JavaScript -->
<?= $this->section('js'); ?>

<?= $this->endSection(); ?>


<!-- Titulo de la página -->
<?= $this->section('titulo'); ?>
<?= esc($page_title) ?>
<?= $this->endSection(); ?>


<!-- Camino de migas -->
<?= $this->section('breadcrumb'); ?>

<?= $this->endSection(); ?>


<!-- Contenido de la página -->
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= esc($form_title) ?></h3>
            </div>
            <!-- /.card-header -->

            <!-- //$validation->listErrors();  -->

            <!-- form start -->
            <form action="<?= base_url('cliente') ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese cliente" name="nombre" value="Yeyo">
                    </div>
                    <div class="form-group">
                        <label for="rfc">RFC</label>
                        <input type="text" class="form-control" id="rfc" placeholder="Ingrese el RFC" name="rfc" value="YEYE950214YV5">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese dirección" name="direccion" value="Simon Bolivear 25">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" placeholder="Ingrese teléfono" name="telefono" value="8345689475">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese email" name="email" value="yeyo@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="contacto">Nombre del contacto</label>
                        <input type="text" class="form-control" id="contacto" placeholder="Ingrese nombre de contacto para ventas" name="contacto" value="Andrew">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>

<?= $this->endSection(); ?>