<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administradores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>administradores">Administradores</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Administradores</h3>
                        </div>
                        <div class="card-body">
                            <form id="quickForm" action="<?php echo base_url(); ?>administradores/administradores/passwordupdate/<?php echo $administrador->user_id; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="password_usuario">Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password_usuario" id="password_usuario" autocomplete="off" maxlength="255" value="<?php echo set_value('password_usuario'); ?>">
                                            <?php echo form_error("password_usuario", "<small class='text-danger'>", "</small>"); ?>
                                        </div>
                                    </div>
                                    <!-- Nickname -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="confirmacionPasword_usuario">Confirmacion de password</label>
                                            <input type="password" class="form-control" id="confirmacionPasword_usuario" name="confirmacionPasword_usuario" value="<?php echo set_value('confirmacionPasword_usuario'); ?>" autocomplete="off">
                                            <?php echo form_error("confirmacionPasword_usuario", "<small class='text-danger'>", "</small>"); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Cuarta fila Boton guardar -->
                                    <div class="col-sm-12 my-1">
                                        <div class="form-group float-right">
                                            <button type="submit" class="btn btn-outline-primary mb-3">Guardar</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->