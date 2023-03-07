function Mesa(alto, ancho, posy, posx, fecha, id) {
  this.posicionY = posy
  this.posicionX = posx
  this.ancho = ancho
  this.alto = alto
  this.fecha = fecha
  this.id = id;
}

Mesa.prototype.posicion = function () {
  console.log(this.posicionX)
  console.log(this.posicionY)
  console.log(this.alto)
  console.log(this.ancho)
  console.log(this.id)
}

Mesa.prototype.pinta = function (hora) {
  var almesa = this.alto;
  var ancMesa = this.ancho;
  let fechita = this.fecha;

  var div = $('<div>');
  //sala posicion abosluta alamacen relativo
  if ((this.posicionX != undefined && this.posicionY != undefined) && (this.posicionX != 0 && this.posicionY != 0)) {

    div.addClass("c-mesa").appendTo('.c-sala').css({
      "height": almesa,
      "width": ancMesa,
      "top": this.posicionY + "px",
      "left": this.posicionX + "px",
      position: "absolute",
      "box-shadow": '0px 0px 3px 7px green'
    }).attr({ "id": "mesa_" + this.id })


    //AQUI ABRO VENTANA

    $('#mesa_' + this.id).click(function () {
      let baneo = this.id;
      console.log(baneo);
      let identificador= this.id.split("_")[1];
      if ($(this).attr('reservada') == 'si') {
        mensajeFloat()
      } else {
        
        traerJuegos(almesa, ancMesa)
        $("#crearReserva").dialog({ autoOpen: true });
        //cargo juegos para la mesa con ancmesa y altmesa
        $("#reservar").click(function(){
          crearReserva(fechita,hora,identificador,$("#idJuego").val(),$("#idUser").val())
        $('#'+baneo).css({"box-shadow":'0px 0px 3px 7px red'}).attr({"reservada":"si"})
        $("#crearReserva").dialog("close")
        $("#crearReserva").off("click")
        })
      }
    });
  } else {
    div.addClass("c-mesa").appendTo('.c-almacen').css({ "height": almesa, "width": ancMesa }).attr({ "id": "mesa_" + this.id })
  }
  if(filters.includes("ROLE_ADMIN")){
  div.draggable(
    {
      start: function (ev, ui) {
        $(this).attr("data-y", ui.offset.top)
        $(this).attr("data-x", ui.offset.left)
        $(this).attr("id", this.id)
      }, revert: true, helper: "clone", revertDuration: 0
    }
  )
  }
}

function mensajeFloat() {
  $.toast({
    text: 'LA MESA SELECCIONADA YA ESTA RESERVADA',
    showHideTransition: 'plain',
    icon: 'warning'
  })
}

function traerJuegos(almesa, ancMesa) {
  let juegos = $("#idJuego")
  juegos.empty()
  $.ajax({
    method: "get",
    url: "http://localhost:8000/juegos/mostrarJuegos/" + almesa + "/" + ancMesa,
    dataType: "json",
  }).done(function (data) {

    $.each(data, function (i, v) {
      console.log(v)
      $("<option>")
        .val(v.id)
        .text(v.nombre)
        .appendTo(juegos)
    })
  })
}

function crearReserva(fecha,hora,idmesa,idjuego,iduser){
  data = {
    "fecha": fecha,
    "hora": hora,
    "idMesa": idmesa,
    "idJuego": idjuego,
    "idUser": iduser
  }
  console.log(data)
  $.ajax({
    type: "POST",
    url: "http://localhost:8000/nuevaReserva",
    data: data,
    dataType: "JSON"
  })
}