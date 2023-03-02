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

Mesa.prototype.pinta = function () {
  var almesa = this.alto;
  var ancMesa = this.ancho;

  var div = $('<div>');
  //sala posicion abosluta alamacen relativo
  if ((this.posicionX != undefined && this.posicionY != undefined) && (this.posicionX != 0 && this.posicionY != 0)) {

    div.addClass("mesa").appendTo('.sala').css({ "height": almesa, "width": ancMesa, "top": this.posicionY + "px", "left": this.posicionX + "px",position:"absolute"}).attr({ "id": "mesa_" + this.id })
  } else {
    div.addClass("mesa").appendTo('.almacen').css({ "height": almesa, "width": ancMesa }).attr({ "id": "mesa_" + this.id })
  }
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

Mesa.prototype.choca = function (otraMesa) {

  return false;
}