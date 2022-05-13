<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="Control-SSI" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Control-SSI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->auth_username ?> </a>
        <a href="">
          <?php
          switch ($this->auth_level) {
            case 1:
              echo "Usuario";
              break;
            case 2:
              echo "Cliente";
              break;
            case 4:
              echo "Técnico";
              break;
            case 6:
              echo "Administrador";
              break;
            case 9:
              echo "Developer";
              break;
          }
          ?>
        </a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if ($this->auth_level >= 2) : ?>
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- Equipos -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>equipos" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Equipos </p>
            </a>
          </li>
          <!-- Usuarios -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <!-- Correos -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>correos" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Correos
              </p>
            </a>
          </li>
        <?php endif ?>
        <?php if ($this->auth_level >= 4) : ?>

          <li class="nav-header">Asignados</li>
          <!-- Equipos -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>asignados/equipos" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p> Equipos </p>
            </a>
          </li>
          <li class="nav-header">Disponibles</li>
          <!-- Equipos -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>libre/equipos" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p> Equipos </p>
            </a>
          </li>
          <li class="nav-header">BAJAS</li>
          <!-- Usuarios Bajas -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>usuarios/bajas" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <!-- Equipos Bajas -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>baja/equipos" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Equipos
              </p>
            </a>
          </li>
          <!-- Correos Bajas -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>correo/bajas" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Correos
              </p>
            </a>
          </li>

        <?php endif ?>



        <?php if ($this->auth_level >= 6) : ?>

          <li class="nav-header">Configuración</li>
          <!-- Administradores -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>administradores" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Administradores
              </p>
            </a>

          </li>
          <!-- Correos -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Correos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Tipos -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/correos/tipos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipos</p>
                </a>
              </li>
              <!-- Provedor  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/correos/provedores" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Proverodes
                  </p>
                </a>
              </li>
              <!-- Utilidad  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/correos/utilidad" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Utilidad
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Clientes -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Clientes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Clientes -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <!-- Regionales -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/regionales" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Regionales
                  </p>
                </a>
              </li>
              <!-- Oficinas -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/oficinas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Oficinas</p>
                </a>
              </li>
              <!-- Ubicaciones -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/ubicaciones" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubicaciones</p>
                </a>
              </li>
              <!-- Departamentos  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/departamentos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departamentos </p>
                </a>
              </li>
              <!-- Contratos  -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Contratos
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/contratos" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/tipo_contrato" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tipos</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Equipos -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Equipos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- DD -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Discos Duro
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/discoduro" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Disco Duro</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/dd/tipo" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tipo</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Estado -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/equipos/status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado</p>
                </a>
              </li>
              <!-- Marcas  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/equipos/marcas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Marcas
                  </p>
                </a>
              </li>
              <!-- Modelos -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/equipos/modelos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modelos</p>
                </a>
              </li>
              <!-- Procesador -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Procesador
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/procesador/marcas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Marca</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/procesador/modelos" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modelo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/procesador/generacion" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Generación</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Ram -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/ram" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ram</p>
                </a>
              </li>



              <!-- Sistema O.  -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Sistema O.
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/sistema" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Nombre</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>configuracion/sistema/version" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Versión</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Tipos -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>configuracion/equipos/tipos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipos</p>
                </a>
              </li>
            </ul>
          </li>

        <?php endif ?>








      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>