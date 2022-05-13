$(document).ready(function () {

  $('#cliente').on('change', function () {
    var id_cliente = $('#cliente').val();
    // alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/departamentos/getMenuOficinas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#oficina').html('');
        $('#oficina').html(data);
        $('#oficina').prop('disabled', false);
      },
      error: function () {
        $('#oficina').html('');
        $('#oficina').append('<option value="0" selected="selected">Sin información</option>');
        $('#oficina').prop('disabled', true);
      }
    });
  });


  $('#clienteAddFull').on('change', function () {
    var id_cliente = $('#clienteAddFull').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/departamentos/getMenuOficinas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#oficinaAddFull').html('');
        $('#oficinaAddFull').html(data);
        $('#oficinaAddFull').prop('disabled', false);
      },
      error: function () {
        $('#oficinaAddFull').html('');
        $('#oficinaAddFull').append('<option value="0" selected="selected">Sin información</option>');
        $('#oficinaAddFull').prop('disabled', true);
      }
    });
  });

  $('#clienteEquipos').on('change', function () {
    var id_cliente = $('#clienteEquipos').val();
    alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/departamentos/getMenuOficinas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#sucursalEquipos').html('');
        $('#sucursalEquipos').html(data);
        $('#sucursalEquipos').prop('disabled', false);
        $('#departamentoEquipos').prop('disabled', true);
      },
      error: function () {
        $('#sucursalEquipos').html('');
        $('#sucursalEquipos').append('<option value="0" selected="selected">Sin información</option>');
        $('#sucursalEquipos').prop('disabled', true);
      }
    });
  });

  $('#sucursalEquipos').on('change', function () {
    var id_cliente = $('#sucursalEquipos').val();0
    $.ajax({
      url: "http://localhost/app/clientes/departamentos/getMenuDepartamentos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#departamentoEquipos').html('');
        $('#departamentoEquipos').html(data);
        $('#departamentoEquipos').prop('disabled', false);
      },
      error: function () {
        $('#departamentoEquipos').html('');
        $('#departamentoEquipos').append('<option value="0" selected="selected">Sin información</option>');
        $('#departamentoEquipos').prop('disabled', true);
      }
    });
  });

  $('#tipo').on('change', function () {
    var id_cliente = $('#tipo').val();
    //    alert(id_cliente);
    $.ajax({
      url: "http://localhost/app/equipos/marcas/getMenuMarcas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#marca').html('');
        $('#marca').html(data);
        $('#marca').prop('disabled', false);
      },
      error: function () {
        $('#marca').html('');
        $('#marca').append('<option value="0" selected="selected">Sin información</option>');
        $('#marca').prop('disabled', true);
      }
    });
  });
  $('#clienteOficina').on('change', function () {
    var id_cliente = $('#clienteOficina').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/regionales/getMenuRegionales",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#regionalOficinas').html('');
        $('#regionalOficinas').html(data);
        $('#regionalOficinas').prop('disabled', false);
      },
      error: function () {
        $('#regionalOficinas').html('');
        $('#regionalOficinas').append('<option value="" selected="selected">Sin información</option>');
        $('#regionalOficinas').prop('disabled', true);
      }
    });
  });

  $('#clienteUbicacion').on('change', function () {
    var id_cliente = $('#clienteUbicacion').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/regionales/getMenuRegionales",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#regionalUbicacion').html('');
        $('#regionalUbicacion').html(data);
        $('#regionalUbicacion').prop('disabled', false);
        $('#ubicacionOficinas').html('');
        $('#ubicacionOficinas').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionOficinas').prop('disabled', false);
      },
      error: function () {
        $('#ubicacionOficinas').html('');
        $('#ubicacionOficinas').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionOficinas').prop('disabled', true);
        $('#regionalUbicacion').html('');
        $('#regionalUbicacion').append('<option value="" selected="selected">Sin información</option>');
        $('#regionalUbicacion').prop('disabled', true);
      }
    });
  });

  $('#regionalUbicacion').on('change', function () {
    var id_cliente = $('#regionalUbicacion').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/oficinas/getMenuOficinas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#ubicacionOficinas').html('');
        $('#ubicacionOficinas').html(data);
        $('#ubicacionOficinas').prop('disabled', false);
      },
      error: function () {
        $('#ubicacionOficinas').html('');
        $('#ubicacionOficinas').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionOficinas').prop('disabled', true);
      }
    });
  });

  $('#ubicacionOficinas').on('change', function () {
    var id_cliente = $('#ubicacionOficinas').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/ubicaciones/getMenuUbicaciones",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#ubicacionDepartentos').html('');
        $('#ubicacionDepartentos').html(data);
        $('#ubicacionDepartentos').prop('disabled', false);
      },
      error: function () {
        $('#ubicacionDepartentos').html('');
        $('#ubicacionDepartentos').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionDepartentos').prop('disabled', true);
      }
    });
  });

  $('#ubicacionDepartentos').on('change', function () {
    var id_cliente = $('#ubicacionDepartentos').val();
    // alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/departamentos/getMenuDepartamentos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#equipoDepartentos').html('');
        $('#equipoDepartentos').html(data);
        $('#equipoDepartentos').prop('disabled', false);
      },
      error: function () {
        $('#equipoDepartentos').html('');
        $('#equipoDepartentos').append('<option value="" selected="selected">Sin información</option>');
        $('#equipoDepartentos').prop('disabled', true);
      }
    });
  });

  $('#tipoequipo').on('change', function () {
    var id_cliente = $('#tipoequipo').val();
    //  alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/equipos/marcas/getMenuMarcas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#marcaequipo').html('');
        $('#marcaequipo').html(data);
        $('#marcaequipo').prop('disabled', false);
        $('#modeloequipo').html('');
        $('#modeloequipo').append('<option value="" selected="selected">Sin información</option>');
        $('#modeloequipo').prop('disabled', true);
      },
      error: function () {
        $('#marcaequipo').html('');
        $('#marcaequipo').append('<option value="" selected="selected">Sin información</option>');
        $('#marcaequipo').prop('disabled', true);
        $('#modeloequipo').html('');
        $('#modeloequipo').append('<option value="" selected="selected">Sin información</option>');
        $('#modeloequipo').prop('disabled', true);
      }
    });
  });


  $('#marcaequipo').on('change', function () {
    var id_cliente = $('#marcaequipo').val();
    //  alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/equipos/modelos/getMenuModelos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#modeloequipo').html('');
        $('#modeloequipo').html(data);
        $('#modeloequipo').prop('disabled', false);
      },
      error: function () {
        $('#modeloequipo').html('');
        $('#modeloequipo').append('<option value="" selected="selected">Sin información</option>');
        $('#modeloequipo').prop('disabled', true);
      }
    });
  });




  $('#procesadorMarca').on('change', function () {
    var id_cliente = $('#procesadorMarca').val();
    //  alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/equipos/procesador/modelo/getMenuModelos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#procesadorModelo').html('');
        $('#procesadorModelo').html(data);
        $('#procesadorModelo').prop('disabled', false);
        $('#procesadorGeneracion').html('');
        $('#procesadorGeneracion').append('<option value="" selected="selected">Sin información</option>');
        $('#procesadorGeneracion').prop('disabled', true);
      },
      error: function () {
        $('#procesadorModelo').html('');
        $('#procesadorModelo').append('<option value="" selected="selected">Sin información</option>');
        $('#procesadorModelo').prop('disabled', true);
        // $('#modeloequipo').html('');
        // $('#modeloequipo').append('<option value="" selected="selected">Sin información</option>');
        // $('#modeloequipo').prop('disabled', true);
      }
    });
  });

  $('#procesadorModelo').on('change', function () {
    var id_modelo = $('#procesadorModelo').val();
    //  alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/equipos/procesador/generacion/getMenuGeneracion",
      type: "POST",
      data: { 'id_cliente': id_modelo },
      dataType: 'json',
      success: function (data) {
        $('#procesadorGeneracion').html('');
        $('#procesadorGeneracion').html(data);
        $('#procesadorGeneracion').prop('disabled', false);
      },
      error: function () {
        $('#procesadorGeneracion').html('');
        $('#procesadorGeneracion').append('<option value="" selected="selected">Sin información</option>');
        $('#procesadorGeneracion').prop('disabled', true);
        // $('#modeloequipo').html('');
        // $('#modeloequipo').append('<option value="" selected="selected">Sin información</option>');
        // $('#modeloequipo').prop('disabled', true);
      }
    });
  });



  // $('#marca').on('change', function () {
  //   var id_cliente = $('#marca').val();
  //   //  alert(id_cliente);
  //   $.ajax({
  //     url: "http://localhost/control-ssi/app/equipos/modelos/getMenuModelos",
  //     type: "POST",
  //     data: { 'id_cliente': id_cliente },
  //     dataType: 'json',
  //     success: function (data) {
  //       $('#modelo').html('');
  //       $('#modelo').html(data);
  //       $('#modelo').prop('disabled', false);
  //     },
  //     error: function () {
  //       $('#modelo').html('');
  //       $('#modelo').append('<option value="" selected="selected">Sin información</option>');
  //       $('#modelo').prop('disabled', true);
  //     }
  //   });
  // });

  $('#nombre').on('keyup', function () {
    var value = $('#nombre').val().toUpperCase();
    $("#nombre").val(value);
  });

  $('#nombre').on('change', function () {
    var value = $('#nombre').val().trim();
    $("#nombre").val(value);
  });

  $('#clienteEquipo').on('change', function () {
    var id_cliente = $('#clienteEquipo').val();
    alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/regionales/getMenuRegionales",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#regionalEquipo').html('');
        $('#regionalEquipo').html(data);
        $('#regionalEquipo').prop('disabled', false);
        $('#oficinaEquipo').html('');
        $('#oficinaEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#oficinaEquipo').prop('disabled', true);
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionEquipo').prop('disabled', true);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      },
      error: function () {
        $('#regionalEquipo').html('');
        $('#regionalEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#regionalEquipo').prop('disabled', true);
        $('#oficinaEquipo').html('');
        $('#oficinaEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#oficinaEquipo').prop('disabled', true);
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionEquipo').prop('disabled', true);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      }
    });
  });

  $('#regionalEquipo').on('change', function () {
    var id_cliente = $('#regionalEquipo').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/oficinas/getMenuOficinas",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#oficinaEquipo').html('');
        $('#oficinaEquipo').html(data);
        $('#oficinaEquipo').prop('disabled', false);
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionEquipo').prop('disabled', true);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      },
      error: function () {
        $('#oficinaEquipo').html('');
        $('#oficinaEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#oficinaEquipo').prop('disabled', true);
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionEquipo').prop('disabled', true);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      }
    });
  });

  $('#oficinaEquipo').on('change', function () {
    var id_cliente = $('#oficinaEquipo').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/ubicaciones/getMenuUbicaciones",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').html(data);
        $('#ubicacionEquipo').prop('disabled', false);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      },
      error: function () {
        $('#ubicacionEquipo').html('');
        $('#ubicacionEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#ubicacionEquipo').prop('disabled', true);
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      }
    });
  });
  $('#ubicacionEquipo').on('change', function () {
    var id_cliente = $('#ubicacionEquipo').val();
    // alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/clientes/departamentos/getMenuDepartamentos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#departentoEquipo').html('');
        $('#departentoEquipo').html(data);
        $('#departentoEquipo').prop('disabled', false);
      },
      error: function () {
        $('#departentoEquipo').html('');
        $('#departentoEquipo').append('<option value="" selected="selected">Sin información</option>');
        $('#departentoEquipo').prop('disabled', true);
      }
    });
  });

  $('#discoDuro').on('change', function () {
    var id_cliente = $('#discoDuro').val();
    // alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/equipos/discoduro/tipo/getMenuTipos",
      type: "POST",
      data: { 'id_cliente': id_cliente },
      dataType: 'json',
      success: function (data) {
        $('#tipo_dd').html('');
        $('#tipo_dd').html(data);
        $('#tipo_dd').prop('disabled', false);
      },
      error: function () {
        $('#tipo_dd').html('');
        $('#tipo_dd').append('<option value="" selected="selected">Sin información</option>');
        $('#tipo_dd').prop('disabled', true);
      }
    });
  });

  
  $('#nombres').on('keyup', function () {
    var value = $('#nombres').val().toUpperCase();
    $("#nombres").val(value);
  });

  $('#nombres').on('change', function () {
    var value = $('#nombres').val().trim();
    $("#nombres").val(value);
  });


  $('#primerApellido').on('keyup', function () {
    var value = $('#primerApellido').val().toUpperCase();
    $("#primerApellido").val(value);
  });

  $('#primerApellido').on('change', function () {
    var value = $('#primerApellido').val().trim();
    $("#primerApellido").val(value);
  });

  $('#segundoApellido').on('keyup', function () {
    var value = $('#segundoApellido').val().toUpperCase();
    $("#segundoApellido").val(value);
  });

  $('#segundoApellido').on('change', function () {
    var value = $('#segundoApellido').val().trim();
    $("#segundoApellido").val(value);
  });

  $('#cargo').on('keyup', function () {
    var value = $('#cargo').val().toUpperCase();
    $("#cargo").val(value);
  });

  $('#cargo').on('change', function () {
    var value = $('#cargo').val().trim();
    $("#cargo").val(value);
  });




  $('#tipocorreo').on('change', function () {
    var id_tipo = $('#tipocorreo').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/correos/provedores/getMenuProvedores",
      type: "POST",
      data: { 'id_cliente': id_tipo },
      dataType: 'json',
      success: function (data) {
        $('#provedorcorreo').html('');
        $('#provedorcorreo').html(data);
        $('#provedorcorreo').prop('disabled', false);      
      },
      error: function () {
        $('#provedorcorreo').html('');
        $('#provedorcorreo').append('<option value="" selected="selected">Sin información</option>');
        $('#provedorcorreo').prop('disabled', true);     
      }
    });
  });

  $('#provedorcorreo').on('change', function () {
    var id_tipo = $('#provedorcorreo').val();
    $.ajax({
      url: "http://localhost/control-ssi/app/correos/utilidad/getMenuUtilidades",
      type: "POST",
      data: { 'id_cliente': id_tipo },
      dataType: 'json',
      success: function (data) {
        $('#utilidadcorreo').html('');
        $('#utilidadcorreo').html(data);
        $('#utilidadcorreo').prop('disabled', false);      
      },
      error: function () {
        $('#utilidadcorreo').html('');
        $('#utilidadcorreo').append('<option value="" selected="selected">Sin información</option>');
        $('#utilidadcorreo').prop('disabled', true);     
      }
    });
  });

  $('#utilidadcorreo').on('change', function () {
    var id_utilidad = $('#utilidadcorreo').val();
    var id_cliente = $('#cliente').val();
      alert(id_cliente);
    $.ajax({
      url: "http://localhost/control-ssi/app/correos/correos/getMenuCorreos",
      type: "POST",
      data: { 'id_cliente': id_cliente,'id_utilidad': id_utilidad},
      dataType: 'json',
      success: function (data) {
        $('#correo').html('');
        $('#correo').html(data);
        $('#correo').prop('disabled', false);      
      },
      error: function () {
        $('#correo').html('');
        $('#correo').append('<option value="" selected="selected">Sin información</option>');
        $('#correo').prop('disabled', true);     
      }
    });
  });



});






