<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Agregar
            <small>Usuaria</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url() ?>administrador/usuarios">Usuarias</a></li>
            <li class="active">Agregar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url(); ?>administrador/usuarios/store" method="POST" enctype="multipart/form-data">

                        <div class="box-body col-md-6">
                            <div class="form-group col-md-6">
                                <label for="password_usuario">Password</label>
                                <input type="password" class="form-control" id="password_usuario" name="password_usuario" value="<?php echo set_value('password_usuario'); ?>">
                                <?php echo form_error("password_usuario", "<small class='text-danger'>", "</small>"); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmacionPasword_usuario">Confirmacion de password</label>
                                <input type="password" class="form-control" id="confirmacionPasword_usuario" name="confirmacionPasword_usuario" value="<?php echo set_value('confirmacionPasword_usuario'); ?>">
                                <?php echo form_error("confirmacionPasword_usuario", "<small class='text-danger'>", "</small>"); ?>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->