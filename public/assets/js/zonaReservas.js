$(function () {
  var almacen = $("#almacen");
  var sala = $("#sala");
  var horario = $("#horario");
  var horas = $("#horas");
  var fecha;
  var tramo;
  $('.dialog').hide();

  //FECHAAAA
   $.datepicker.setDefaults()

   $('#entrada').datepicker({
    dateFormat: "dd-mm-yy",
    minDate: "+1D",
    maxDate: "+3M +1D",
    firstDay: 1,
    onSelect: function (fechaSelect, obj) {
      console.log(filters)
      fecha = fechaSelect;
      horas.prop('selectedIndex',0)
      horario.attr({"style":""}) 
    }
    })
    horas.change(function(){
    tramo = $(this).val()
      pintarMesas(fecha,tramo);
    })


  almacen.droppable({
    drop: function (ev, ui) {

      let mesaAlmacen;
      //filtros
      
      mesaAlmacen= ui.draggable;
      
      let alto = mesaAlmacen.height()
      let ancho = mesaAlmacen.width()
      mesaAlmacen.attr("style", "").css({ "width": ancho + "px", "height": alto + "px" }).removeAttr("ondblclick");
      $(this).append(mesaAlmacen)
      actualizarMesa(mesaAlmacen.attr("id"), undefined, undefined, fecha)
    }
  })




$("#anadir").click(function () {
  //capturamos los valores de la altura y anchura de la mesa y de la fecha seleccionada
  altmesa = $("#altura").val();
  anchmesa = $("#anchura").val();
  //mientras este en almacen se crea en 0 posy y posX

  console.log(fecha);
  data = {
    "posx": 0,
    "posy": 0,
    "alto": altmesa,
    "ancho": anchmesa,
    "fecha": fecha
  }
  $.ajax({
    type: "POST",
    url: "http://localhost:8000/nuevamesa",
    data: data,
    dataType: "JSON"
  })
  pintarMesas(fecha,tramo);

  //cerramos el dialog
  $("#crearMesa").dialog("close");

});

$('#agregar').click(function () {
  $("#crearMesa").dialog({ autoOpen: true });
}
)

//control de movimiento


sala.droppable({
  drop: function (ev, ui) {

    difX = $(this).offset().left
    difY = $(this).offset().top
    var mesa;
    if(filters.includes("ROLE_ADMIN"))
      mesa = ui.draggable;
    var left = parseInt(ui.offset.left);
    var top = parseInt(ui.offset.top)
    var width = parseInt(mesa.width())
    var height = parseInt(mesa.height())
  

    var pos1 = [left, +left + width, top, top + height]
    m1 = new Mesa(left, top, width, height);
    var mesaYa = $(".sala .mesa");

    if (mesaYa.length > 0) {
      var choca = false;

      mesaYa.each(function (i, v) {

        var mesaPrueba = $(v);
        if (mesaPrueba.attr('id') != undefined && mesa.attr('id') != mesaPrueba.attr('id')) {//dos formas hacer estamos mezclando elementos jquery y javascript
          var posX = parseInt(mesaPrueba.offset().left)
          var posY = parseInt(mesaPrueba.offset().top)
          var anchura = parseInt(mesaPrueba.width())
          var altura = parseInt(mesaPrueba.height())
          var pos2 = [posX, posX + anchura, posY, posY + altura];
          if (((pos1[0] > pos2[0] && pos1[0] < pos2[1]) ||
            (pos1[1] > pos2[0] && pos1[1] < pos2[1]) ||
            (pos1[0] <= pos2[0] && pos1[1] >= pos2[1])) &&
            ((pos1[2] > pos2[2] && pos1[2] < pos2[3]) ||
              (pos1[3] > pos2[2] && pos1[3] < pos2[3]) ||
              (pos1[2] <= pos2[2] && pos1[3] >= pos2[3]))) {

            choca = true;
          }
        }
      })

      if (!choca) {

        $(this).append(mesa)
        mesa.css({ position: "absolute", top: top - difY + "px", left: left - difX + "px" })
        actualizarMesa(mesa.attr("id"), left - difX, top - difY, fecha)
      }


    } else {

      $(this).append(mesa)

      mesa.css({ position: "absolute", top: top - difY + "px", left: left - difX + "px" })
      actualizarMesa(mesa.attr("id"), left - difX, top - difY, fecha)
    }
    //})

  }
}
);
})

//FUNCIONES LLAMANDO A LA API

function pintarMesas(fecha,hora) {
  $("#almacen").html("");
  $("#sala").html("");

  //TRAIGO LAS MESAS CON LA FECHA
  $.ajax({
    type: "GET",
    crossDomain: true,
    url: "http://localhost:8000/mostrarmesas/"+fecha,
    success: function (data) {

      $.each(data, function (k, v) {
        var mesa = new Mesa(v.alto, v.ancho, v.posy, v.posx, v.fecha, v.id);
      
         //aqui va mesa pinta
         
        
        //traemos reservas de la v.fecha --> 1 reserva dia 5 a las 11 mesa 2
        $.ajax({
          type: "GET",
          crossDomain: true,
          url: "http://localhost:8000/mostrarreservas/"+fecha+"/"+hora,
          success: function (reservas) {
            $.each(reservas, function (k, v) {
              var reserva = new Reserva(v.fecha,v.hora,v.idMesa,v.idJuego,v.idJugador,v.id)            
              if(mesa.id = reserva.idMesa){
              $("#mesa_"+mesa.id).css({"box-shadow":'0px 0px 3px 7px red'}).attr({"reservada":"si"})
             
              }
            })
          }
        })
        mesa.pinta(hora);
      });
    }
  });
  //TRAIGO RESERVAS Y COMPRUEBO CUALES ESTAN PILLADAS
  
  
}
function actualizarMesa(id, posy, posx, fecha) {
  // console.log(id)
  let idn = id.split("_")[1];
  // console.log(idn)
  // console.log("mesa actualizada")
  $.ajax({
    type: "POST",
    url: "http://localhost:8000/editarmemsa",
    data: {
      "id": idn,
      "posx": posx,
      "posy": posy,
      "fecha": fecha
    }
  });
}

   // $(this).css({'box-shadow':'10px 10px 5px #888'})
  


