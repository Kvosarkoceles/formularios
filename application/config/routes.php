<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
	| -------------------------------------------------------------------------
	| URI ROUTING
	| -------------------------------------------------------------------------
	| This file lets you re-map URI requests to specific controller functions.
	|
	| Typically there is a one-to-one relationship between a URL string
	| and its corresponding controller class/method. The segments in a
	| URL normally follow this pattern:
	|
	|	example.com/class/method/id/
	|
	| In some instances, however, you may want to remap this relationship
	| so that a different class/function is called than the one
	| corresponding to the URL.
	|
	| Please see the user guide for complete details:
	|
	|	https://codeigniter.com/user_guide/general/routing.html
	|
	| -------------------------------------------------------------------------
	| RESERVED ROUTES
	| -------------------------------------------------------------------------
	|
	| There are three reserved routes:
	|
	|	$route['default_controller'] = 'welcome';
	|
	| This route indicates which controller class should be loaded if the
	| URI contains no data. In the above example, the "welcome" class
	| would be loaded.
	|
	|	$route['404_override'] = 'errors/page_missing';
	|
	| This route will tell the Router which controller/method to use if those
	| provided in the URL cannot be matched to a valid route.
	|
	|	$route['translate_uri_dashes'] = FALSE;
	|
	| This is not exactly a route, but allows you to automatically route
	| controller and method names that contain dashes. '-' isn't a valid
	| class or method name character, so it requires translation.
	| When you set this option to TRUE, it will replace ALL dashes in the
	| controller and method URI segments.
	|
	| Examples:	my-controller/index	-> my_controller/index
	|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route[LOGIN_PAGE] = 'login/login/login';

//$route[LOGIN_PAGE] = 'examples/login';


/*
	| -------------------------------------------------------------------------
	| Administradores
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los administradores del sistema.
	|   1.- Lista de los Administradores
	| 	2.- Agrega Administrador
	|	3.- Edita Administrador
	|	
*/

$route['administradores'] = 'administradores/administradores';
$route['administradores/add'] = 'administradores/administradores/add';
$route['administradores/edit/(:any)'] = 'administradores/administradores/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Correos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los administradores del sistema.
	|   1.- Lista de los Correos
	|	2.- Muestra Correo
	| 	3.- Correos de Baja
	|	4.- Edita Correo
	|	5.- Agrega Correo
	|	
*/

$route['correos'] = 'app/correos/correos';
$route['correos/(:any)'] = 'app/correos/correos/correo/$1';
$route['correo/bajas'] = 'app/correos/correos/bajas';
$route['correos/edit/(:any)'] = 'app/correos/correos/edit/$1';
$route['correos/remove/(:any)'] = 'app/correos/correos/remove/$1';
$route['correo/add'] = 'app/correos/correos/add';
$route['correos/cliente/(:any)'] = 'app/filtros/correos/clientes/correos/$1';

/*
	| -------------------------------------------------------------------------
	| Configuracion de Tipo de Correos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los correos.
	|   1.- Lista Tipo de Correo 
	|   2.- Agrega Tipo de Correo 
	|   3.- Muestra Tipo de Correo 
	|   4.- Edita Tipo de Correo 
	|   5.- Agrega a Tipo de Correo 
	|	
*/
$route['configuracion/correos/tipos'] = 'app/correos/tipo';
$route['configuracion/correos/tipos/add'] = 'app/correos/tipo/add';
$route['configuracion/correo/tipo/(:any)'] = 'app/correos/tipo/view/$1';
$route['configuracion/correo/tipo/edit/(:any)'] = 'app/correos/tipo/edit/$1';
$route['configuracion/correo/add/tipo/(:any)'] = 'app/correos/provedores/addForTipo/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Provedor de Correos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los correos.
	|   1.- Lista Provedor de Correo 
	|   2.- Agrega Provedor de Correo 
	|   3.- Muestra Provedor de Correo 
	|   4.- Edita Provedor de Correo 
	|   5.- Agrega a Provedor de Correo 
	|	
*/
$route['configuracion/correos/provedores'] = 'app/correos/provedores';
$route['configuracion/correos/provedores/add'] = 'app/correos/provedores/add';
$route['configuracion/correos/provedores/(:any)'] = 'app/correos/provedores/view/$1';
$route['configuracion/correos/provedores/edit/(:any)'] = 'app/correos/provedores/edit/$1';
$route['configuracion/correo/add/provedores/(:any)'] = 'app/correos/utilidad/addForProvedor/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Provedor de Correos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los correos.
	|   1.- Lista utilidad de Correo 
	|   2.- Agrega utilidad de Correo 
	|   3.- Muestra utilidad de Correo 
	|   4.- Edita utilidad de Correo 	
*/
$route['configuracion/correos/utilidad'] = 'app/correos/utilidad';
$route['configuracion/correos/utilidad/(:any)'] = 'app/correos/utilidad/view/$1';
$route['configuracion/correos/utilidades/add'] = 'app/correos/utilidad/add';
$route['configuracion/correos/utilidad/edit/(:any)'] = 'app/correos/utilidad/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Cliente
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de los correos.
	|   1.- Lista de Clientes 
	|   2.- Agrega Cliente
	|   3.- Muestra Cliente 
	|   4.- Edita Cliente 	
*/
$route['configuracion/clientes'] = 'app/clientes/clientes';
$route['configuracion/clientes/add'] = 'app/clientes/clientes/add';
$route['configuracion/clientes/(:any)'] = 'app/clientes/clientes/view/$1';
$route['configuracion/clientes/edit/(:any)'] = 'app/clientes/clientes/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Regionales
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista de clientes
	|   2.- Agrega cliente
	|   3.- Viste de Cliente
	|   4.- Edita Cliente, recibe id del cliente
	|   
	|	
*/
$route['configuracion/regionales'] = 'app/clientes/regionales';
$route['configuracion/regionales/add/(:any)'] = 'app/clientes/regionales/add/$1';
$route['configuracion/regionales/(:any)'] = 'app/clientes/regionales/view/$1';
$route['configuracion/regionales/edit/(:any)'] = 'app/clientes/regionales/edit/$1';
$route['configuracion/regional/addAll'] = 'app/clientes/regionales/addAll';
/*
	| -------------------------------------------------------------------------
	| Configuracion de las Oficinas
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista de Oficinas
	|   2.- Vista Oficina
	|   3.- Agrega una Oficina a un cliente determinado
	|   4.- Agrega una Oficina
	|   5.- Edita una Oficina determinada   
	|	
*/
$route['configuracion/oficinas'] = 'app/clientes/oficinas';
$route['configuracion/oficina/(:any)'] = 'app/clientes/oficinas/view/$1';
$route['configuracion/oficina/add/(:any)'] = 'app/clientes/oficinas/add/$1';
$route['configuracion/oficinas/addfull'] = 'app/clientes/oficinas/addfull';
$route['configuracion/oficina/edit/(:any)'] = 'app/clientes/oficinas/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de las Ubicaciones
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista de Oficinas
	|   2.- Vista Oficina
	|   3.- Agrega una Oficina a un cliente determinado
	|   4.- Agrega una Oficina
	|   5.- Edita una Oficina determinada   
	|	
*/
$route['configuracion/ubicaciones'] = 'app/clientes/ubicaciones';
$route['configuracion/ubicaciones/(:any)'] = 'app/clientes/ubicaciones/view/$1';
$route['configuracion/ubicaciones/add/(:any)'] = 'app/clientes/ubicaciones/add/$1';
$route['configuracion/ubicacion/addfull'] = 'app/clientes/ubicaciones/addfull';
$route['configuracion/ubicaciones/edit/(:any)'] = 'app/clientes/ubicaciones/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Departamentos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista de Departamentos
	|   2.- Vista Departamento
	|   3.- Agrega un Departamento a un cliente y oficina determinado
	|   4.- Agrega un Departamento
	|   5.- Edita una Departamento determinado  
	|	
*/
$route['configuracion/departamentos'] = 'app/clientes/departamentos';
$route['configuracion/departamento/(:any)'] = 'app/clientes/departamentos/view/$1';
$route['configuracion/departamentos/addfull'] = 'app/clientes/departamentos/addfull';
$route['configuracion/departamentos/add/(:any)'] = 'app/clientes/departamentos/add/$1';
$route['configuracion/departamento/edit/(:any)'] = 'app/clientes/departamentos/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de Contratos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de Contratos.
	|
	|   1.- Lista de Departamentos
	|   2.- Vista Departamento
	|   3.- Agrega un Departamento a un cliente y oficina determinado
	|   4.- Agrega un Departamento
	|   5.- Edita una Departamento determinado  
	|	
*/
$route['configuracion/contratos'] = 'app/contratos/contratos';
$route['configuracion/contratos/addAll'] = 'app/contratos/contratos/addAll';
$route['configuracion/contratos/(:any)'] = 'app/contratos/contratos/view/$1';
$route['configuracion/contratos/add/(:any)'] = 'app/contratos/contratos/add/$1';
$route['configuracion/contratos/edit/(:any)'] = 'app/contratos/contratos/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Configuracion de tipos de Contratos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de Contratos.
	|
	|   1.- Lista de Departamentos
	|   2.- Vista Departamento
	|   3.- Agrega un Departamento a un cliente y oficina determinado
	|   4.- Agrega un Departamento
	|   5.- Edita una Departamento determinado  
	|	
*/
$route['configuracion/tipo_contrato'] = 'app/contratos/tipos';
$route['configuracion/tipo_contrato/add'] = 'app/contratos/tipos/add';
$route['configuracion/tipo_contrato/(:any)'] = 'app/contratos/tipos/view/$1';
$route['configuracion/tipo_contrato/edit/(:any)'] = 'app/contratos/tipos/edit/$1';
/*
	| -------------------------------------------------------------------------
	| DD
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
// $route['configuracion/discoduro/add'] = 'app/equipos/discoduro/discoduro/add';
$route['configuracion/discoduro'] = 'app/equipos/discoduro/discoduro';
$route['configuracion/discoduro/(:any)'] = 'app/equipos/discoduro/discoduro/view/$1';
$route['configuracion/discoduro/edit/(:any)'] = 'app/equipos/discoduro/discoduro/edit/$1';
$route['configuracion/discoduro/addtipo/(:any)'] = 'app/equipos/discoduro/tipo/agrega/$1';
$route['configuracion/dd/tipo/(:any)'] = 'app/equipos/discoduro/tipo/view/$1';
$route['configuracion/dd/tipo'] = 'app/equipos/discoduro/tipo'; 
$route['configuracion/dd/tipo/edit/(:any)'] = 'app/equipos/discoduro/tipo/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Configuracion Equipos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/equipos/status'] = 'app/equipos/status';
$route['configuracion/equipos/status/add'] = 'app/equipos/status/add';
$route['configuracion/equipos/status/edit/(:any)'] = 'app/equipos/status/edit/$1';
$route['configuracion/equipos/status/view/(:any)'] = 'app/equipos/status/view/$1';

/*
	| -------------------------------------------------------------------------
	| Marcas de Equipos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/equipos/marcas'] = 'app/equipos/marcas';
$route['configuracion/equipos/marcas/(:any)'] = 'app/equipos/marcas/view/$1';
$route['configuracion/equipos/marcas/add/(:any)'] = 'app/equipos/marcas/add/$1';
$route['configuracion/equipos/marca/addAll'] = 'app/equipos/marcas/addAll';
$route['configuracion/equipos/marcas/edit/(:any)'] = 'app/equipos/marcas/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Modelos de Equipos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 	
	|	
*/
$route['configuracion/equipos/modelos'] = 'app/equipos/modelos';
$route['configuracion/equipos/modelos/(:any)'] = 'app/equipos/modelos/view/$1';
$route['configuracion/equipos/modelos/edit/(:any)'] = 'app/equipos/modelos/edit/$1';
$route['configuracion/equipos/modelos/add/(:any)'] = 'app/equipos/modelos/add/$1';
$route['configuracion/equipos/modelo/addAll'] = 'app/equipos/modelos/addAll';

/*
	| -------------------------------------------------------------------------
	| Procesador
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/procesador/marcas'] = 'app/equipos/procesador/marca';
$route['configuracion/procesador/marca/(:any)'] = 'app/equipos/procesador/marca/view/$1';
$route['configuracion/procesador/marcas/add'] = 'app/equipos/procesador/marca/add';
$route['configuracion/procesador/marca/edit/(:any)'] = 'app/equipos/procesador/marca/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Procesador
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/procesador/modelos'] = 'app/equipos/procesador/modelo';
$route['configuracion/procesador/modelo/add/(:any)'] = 'app/equipos/procesador/modelo/add/$1';
$route['configuracion/procesador/modelo/(:any)'] = 'app/equipos/procesador/modelo/view/$1';
$route['configuracion/procesador/modelos/addAll'] = 'app/equipos/procesador/modelo/addAll';
$route['configuracion/procesador/modelo/edit/(:any)'] = 'app/equipos/procesador/modelo/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Procesador
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/

$route['configuracion/procesador/generacion'] = 'app/equipos/procesador/generacion';
$route['configuracion/procesador/generacion/add/(:any)'] = 'app/equipos/procesador/generacion/add/$1';
$route['configuracion/procesador/generacion/addAll'] = 'app/equipos/procesador/generacion/addAll';
$route['configuracion/procesador/generacion/(:any)'] = 'app/equipos/procesador/generacion/view/$1';
$route['configuracion/procesador/generacion/edit/(:any)'] = 'app/equipos/procesador/generacion/edit/$1';

/*
	| -------------------------------------------------------------------------
	| Ram
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/ram/add'] = 'app/equipos/ram/ram/add';
$route['configuracion/ram'] = 'app/equipos/ram/ram';
$route['configuracion/ram/(:any)'] = 'app/equipos/ram/ram/view/$1';
$route['configuracion/ram/edit/(:any)'] = 'app/equipos/ram/ram/edit/$1';
/*
	| -------------------------------------------------------------------------
	| Ram
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/

$route['configuracion/sistema'] = 'app/equipos/sistemaoperativo/sistema';
$route['configuracion/sistemas/(:any)'] = 'app/equipos/sistemaoperativo/sistema/view/$1';
$route['configuracion/sistema/edit/(:any)'] = 'app/equipos/sistemaoperativo/sistema/edit/$1';
$route['configuracion/sistema/add'] = 'app/equipos/sistemaoperativo/sistema/add';
/*
	| -------------------------------------------------------------------------
	| Ram
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/

$route['configuracion/sistema/version'] = 'app/equipos/sistemaoperativo/version';
$route['configuracion/sistema/version/(:any)'] = 'app/equipos/sistemaoperativo/version/view/$1';
$route['configuracion/sistema/version/edit/(:any)'] = 'app/equipos/sistemaoperativo/version/edit/$1';
$route['configuracion/sistema/versionAdd'] = 'app/equipos/sistemaoperativo/version/versionAdd';
$route['configuracion/sistema/version/add/(:any)'] = 'app/equipos/sistemaoperativo/version/add/$1';

/*
	| -------------------------------------------------------------------------
	| Configuracion Equipos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['configuracion/equipos/tipos'] = 'app/equipos/tipos';
$route['configuracion/equipos/tipos/(:any)'] = 'app/equipos/tipos/view/$1';
$route['configuracion/equipos/tipo/add'] = 'app/equipos/tipos/add';
$route['configuracion/equipos/tipos/edit/(:any)'] = 'app/equipos/tipos/edit/$1';



/*
	| -------------------------------------------------------------------------
	| Equipos
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|   2.- Ver Equipo 
	|   3.- Editar Equipo 
	|	
*/
$route['equipos'] = 'app/equipos/equipos';
$route['equipo/(:any)'] = 'app/equipos/equipos/equipo/$1';
$route['equipo/edit/(:any)'] = 'app/equipos/equipos/edit/$1';
$route['equipos/add/(:any)'] = 'app/equipos/equipos/add/$1';
// $route['equipos/add/equipos'] = 'app/equipos/equipos/add/1';
// $route['equipos/add/impresoras'] = 'app/equipos/equipos/add/2';
// $route['equipos/add/herramientas'] = 'app/equipos/equipos/add/3';

$route['equipo/imagen/(:any)'] = 'app/equipos/Imagenes/view/$1';
$route['equipo/imagen/editar/(:any)'] = 'app/equipos/Imagenes/edit/$1';
$route['equipo/imagen/cambiar/(:any)'] = 'app/equipos/Imagenes/cambiar/$1';

/*
	| -------------------------------------------------------------------------
	| Filtros
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/

$route['equipo/cliente/(:any)'] = 'app/filtros/equipos/clientes/cliente/$1';
$route['equipo/regional/(:any)'] = 'app/filtros/equipos/Regionales/regionales/$1';
$route['equipo/oficina/(:any)'] = 'app/filtros/equipos/Oficinas/oficinas/$1';
$route['equipo/ubicacion/(:any)'] = 'app/filtros/equipos/Ubicaciones/Ubicaciones/$1';
$route['equipo/departamento/(:any)'] = 'app/filtros/equipos/Departamentos/departamento/$1';


/*
	| -------------------------------------------------------------------------
	| Usuarios
	| -------------------------------------------------------------------------
	| Metodos utilizados para la configuración de clientes.
	|   1.- Lista Tipo de Equipos 
	|	
*/
$route['usuarios'] = 'app/usuarios/usuarios';
$route['usuarios/add'] = 'app/usuarios/usuarios/add';
$route['usuario/(:any)'] = 'app/usuarios/usuarios/view/$1';
$route['usuario/edit/(:any)'] = 'app/usuarios/usuarios/edit/$1';

$route['usuario/cliente/(:any)'] = 'app/filtros/usuarios/clientes/usuarios/$1';
$route['usuario/regional/(:any)'] = 'app/filtros/usuarios/regionales/usuarios/$1';
$route['usuario/oficina/(:any)'] = 'app/filtros/usuarios/oficinas/usuarios/$1';
$route['usuario/ubicacion/(:any)'] = 'app/filtros/usuarios/ubicaciones/usuarios/$1';
$route['usuario/departamento/(:any)'] = 'app/filtros/usuarios/departamentos/usuarios/$1';
