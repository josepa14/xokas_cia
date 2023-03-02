$(function () {
  var almacen = $("#almacen");
  var sala = $("#sala");

  //FECHAAAA
   var diasfestivos = ["27/02/2023", "28/02/2023", "01/03/2023"];
   $.datepicker.setDefaults()
   $('#entrada').datepicker({
    dateFormat: "dd/mm/yy",
    minDate: "+1D",
    maxDate: "+3M +1D",
    firstDay: 1,
    onSelect: function (text, obj) {
      //   var desde = new Date(obj.currentYear, obj.currentMonth, obj.currentDay + 1);
      //llamo a la api con los valores establecidos en fecha
      pintarMesas();
    }
  })

//FECHAAAAA



var fecha = new Date().toJSON().slice(0, 10);

almacen.droppable({
  drop: function (ev, ui) {
    let mesaAlmacen = ui.draggable;
    console.log(mesaAlmacen.attr("id"))
    console.log(mesaAlmacen.height())
    console.log(mesaAlmacen.width())
    let alto = mesaAlmacen.height()
    let ancho = mesaAlmacen.width()
    mesaAlmacen.attr("style", "").css({ "width": ancho + "px", "height": alto + "px" });
    $(this).append(mesaAlmacen)
    actualizarMesa(mesaAlmacen.attr("id"), undefined, undefined, fecha)
  }
})
$('.dialog').hide();


$("#anadir").click(function () {
  //capturamos los valores de la altura y anchura de la mesa y de la fecha seleccionada
  altmesa = $("#altura").val();
  anchmesa = $("#anchura").val();
  //mientras este en almacen se crea en 0 posy y posX

  //mientras no tenga el selector de fecha utilizo la fecha de hoy

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
  pintarMesas();

  //cerramos el dialog
  $(".dialog").dialog("close");

});

$('#agregar').click(function () {
  $(".dialog").dialog({ autoOpen: true });
}
)
//control de movimiento


sala.droppable({
  drop: function (ev, ui) {

    difX = $(this).offset().left
    difY = $(this).offset().top

    var mesa = ui.draggable;
    var left = parseInt(ui.offset.left);
    var top = parseInt(ui.offset.top)
    var width = parseInt(mesa.width())
    var height = parseInt(mesa.height())



    var pos1 = [left, +left + width, top, top + height]
    m1 = new Mesa(left, top, width, height);
    m1.posicion();

    var mesaYa = $(".sala .mesa");
    console.log(mesaYa)


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
      console.log(mesa.attr("no ha chocado 2"))
      mesa.css({ position: "absolute", top: top - difY + "px", left: left - difX + "px" })
      actualizarMesa(mesa.attr("id"), left - difX, top - difY, fecha)
    }
    //})

  }
}
);
})

//FUNCIONES LLAMANDO A LA API

function pintarMesas() {
  $("#almacen").html("");
  $("#sala").html("");
  $.ajax({
    type: "GET",
    url: "http://localhost:8000/mostrarmesas",
    data: {

    },
    success: function (data) {

      $.each(data, function (k, v) {
        var mesa = new Mesa(v.alto, v.ancho, v.posy, v.posx, v.fecha, v.id); // cambiamos por los elementos que traemos
        mesa.pinta();
      });
    }
  });
}
function actualizarMesa(id, posy, posx, fecha) {
  console.log(id)
  let idn = id.split("_")[1];
  console.log(idn)
  console.log("mesa actualizada")
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

//ELEMENTOS DE LA FECHA
