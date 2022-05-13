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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>usuarios">Usuarios</a></li>
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
                            <form id="quickForm" action="<?php echo base_url(); ?>administradores/administradores/store" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Nombres -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                                        </div>
                                    </div>

                                    <!-- Nickname -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <input type="text" class="form-control" placeholder="Nickname" id="nick" name="nick" required>
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
                                        </div>
                                    </div>
                                    <!-- Correo -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" placeholder="Correo" id="correo" name="correo" required>
                                        </div>
                                    </div>

                                    <!-- Roles -->
                                    <div class="col-sm-3 my-1 ">
                                        <div class="form-group">
                                            <label>Rol</label>
                                            <select class="form-control" name="nivel" id="nivel">
                                                <?php foreach ($niveles as $nivel) : ?>
                                                    <option value="<?php echo $nivel->id; ?>"><?php echo $nivel->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

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