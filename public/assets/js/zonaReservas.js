$(function () {
  //pinto mesas, en almacen
  //porgramacion eficiente meter en variables sala y almacen y pasarselo 
  //a pinta para que no se tenga que buscar cada vez que se ejecuta al mismo tiempo que se pueden cambiar en la lineas de aqui
  var almacen = $("#almacen");
  var sala = $("#sala");
  //ajax de la api
  pintarMesas();


  var fecha = new Date().toJSON().slice(0, 10);
  //este codigo esta bien aqui
  almacen.droppable({
    drop: function (ev, ui) {
      let mesaAlmacen = ui.draggable;
      console.log(mesaAlmacen.attr("id"))
      console.log(mesaAlmacen.height())
      console.log(mesaAlmacen.width())
      let alto = mesaAlmacen.height()
      let ancho = mesaAlmacen.width()
      mesaAlmacen.attr("style", "").css({"width":ancho+"px","height":alto+"px"});
      $(this).append(mesaAlmacen)
      actualizarMesa(mesaAlmacen.attr("id"),undefined,undefined,fecha)
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
    //investigar por que no se ejecuta done

    //ahora traigo mesas y las pinto
    pintarMesas();


    var mesa = new Mesa(altmesa, anchmesa) // cambiamos por los elementos que traemos

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





      //$.each(function(ev,i){

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
          //necesito capturar la id de la mesa en movimiento y sus coordenadas
          $(this).append(mesa)
          mesa.css({ position: "absolute", top: top - difY + "px", left: left - difX + "px" })
          console.log(mesa.attr("id"))
          console.log(left - difX)
          console.log(top - difY)
          console.log("no ha chocado")
          actualizarMesa(mesa.attr("id"),left - difX,top - difY,fecha)
        }


      } else {
        
        $(this).append(mesa)
        console.log(mesa.attr("no ha chocado 2"))
        mesa.css({ position: "absolute", top: top - difY + "px", left: left - difX + "px" })
        actualizarMesa(mesa.attr("id"),left - difX,top - difY,fecha)
      }
      //})

    }
  }
  );



  //crear objeto mesa
  //crear objeto sala
  //crear objeto almacen
})



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
function actualizarMesa(id,posy,posx,fecha) {
  console.log(id)
  let idn= id.split("_")[1];
  console.log(idn)
  console.log("mesa actualizada")
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/editarmemsa",
      data: {
        "id":idn,
        "posx": posx,
        "posy": posy,
        "fecha": fecha
      }
    });
}

