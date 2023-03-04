function Reserva(fecha, hora, idMesa,idJuego,idJugador,idReserva) {
    this.fecha = fecha
    this.hora = hora
    this.idMesa = idMesa
    this.idJuego = idJuego;
    this.idJugador = idJugador;
    this.idReserva = idReserva
  }
  Reserva.prototype.reservar=function(){
    alert("DIA "+this.fecha+"EN LA MESA"+this.idMesa)
  }