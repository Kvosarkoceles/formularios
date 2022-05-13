<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>GDSNet</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                        <li class="breadcrumb-item active">Administradores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Administradores</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Username</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($administradores)) : ?>
                                        <?php foreach ($administradores as $administrador) : ?>
                                            <tr>
                                                <td><?php echo $administrador->nombre; ?></td>
                                                <td><?php echo $administrador->username; ?></td>
                                                <td><?php echo $administrador->email; ?></td>
                                                <td><?php echo $administrador->nivel; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>administradores/delete/<?php echo $administrador->user_id; ?>">
                                                        <i class="fas fa-trash" style="color: red;"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?php echo base_url(); ?>administradores/edit/<?php echo $administrador->user_id; ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Username</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Opciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="mt-2 float-right">
                                <a class="btn btn-outline-secondary mt-5" href="<?php echo base_url(); ?>administradores/add">Agregar</a>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->