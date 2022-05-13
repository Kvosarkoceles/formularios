$(document).ready(function () {

  $('#clienteEquipo').on('change', function () {
    var id_cliente = $('#clienteEquipo').val();

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

  $('#tipo_equipo').on('change', function () {
    
    var id_cliente = $('#tipo_equipo').val();
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


  // $('#tipo_equipo').on('change', function () {
  //   var id_cliente = $('#tipo_equipo').val();   
  //   if (id_cliente==3 || id_cliente==4 ) {    
  //     $(location).attr('href','http://localhost/control-ssi/equipos/add/impresoras')
  //   } 
  // });

  $('#tipo_impresora').on('change', function () {
    
    var id_cliente = $('#tipo_impresora').val();
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

  // $('#tipo_impresora').on('change', function () {
  //   var id_cliente = $('#tipo_impresora').val();
  //   if (id_cliente==1 || id_cliente==2 ) {     
  //     $(location).attr('href','http://localhost/control-ssi/equipos/add/equipos')
  //   }  
  // });

  $('#boton_add_equipo').on('click', function () {
    
    var tipo = $('#tipo_add').val();
    if(tipo == ""){

    
      alert("Seleccione un tipo de equipo para agregar");
    }else{
      $(location).attr('href','http://localhost/control-ssi/equipos/add/'+tipo)
    }
   
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

  $('#serie').on('keyup', function () {
    var value = $('#serie').val().toUpperCase();
    $("#serie").val(value);
  });

  $('#serie').on('change', function () {
    var value = $('#serie').val().trim();
    $("#serie").val(value);
  });

  $('#parte').on('keyup', function () {
    var value = $('#parte').val().toUpperCase();
    $("#parte").val(value);
  });

  $('#parte').on('change', function () {
    var value = $('#parte').val().trim();
    $("#parte").val(value);
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


  $('#venta').on('keyup', function () {
    var value = $('#venta').val().toUpperCase();
    $("#venta").val(value);
  });

  $('#venta').on('change', function () {
    var value = $('#venta').val().trim();
    $("#venta").val(value);
  });

  $('#nombre').on('keyup', function () {
    var value = $('#nombre').val().toUpperCase();
    $("#nombre").val(value);
  });

  $('#nombre').on('change', function () {
    var value = $('#nombre').val().trim();
    $("#nombre").val(value);
  });
});





