@extends('layouts.user')


@section('content')
<form method="post">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


   @csrf
   @method('put')


   <div class="form-group">
     <i class="fas fa-user"></i>
     <label for="name">Nombre</label>
       <input type="text" name="name" id="name" class="form-control" value="Tatiana">
   </div>


   <div class="form-group">
     <i class="fas fa-user"></i>
       <label for="name">Apellidos</label>
       <input type="text" name="name" id="name" class="form-control" value="Valentinyova">
   </div>


   <div class="form-group">
       <i class="fas fa-user"></i>
       <label for="name">Nombre de usuario</label>
       <input type="text" name="name" id="name" class="form-control" value="Tatiana17_7">
   </div>

   <div class="form-group">
       <i class="fas fa-envelope"></i>
       <label for="name">Email</label>
       <input type="text" name="name" id="name" class="form-control" value="tatianavalentinyova@iesmontsia.org">
   </div>


   <div class="form-group">
       <i class="fas fa-phone"></i>
       <label for="name">Teléfono</label>
       <input type="text" name="name" id="name" class="form-control" value="658429179">
   </div>


   <div class="form-group">
       <i class="fas fa-building"></i>
       <label for="name">Empresa</label>
       <input type="text" name="name" id="name" class="form-control" value="Null">
   </div>


   <!-- Agrega otros campos aquí -->
   <style>
  .btn-refresh {
    position: relative;
  }

  .btn-refresh .fa-sync-alt {
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
  }

  .btn-refresh:hover .fa-sync-alt {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
</style>

<button class="btn btn-primary btn-refresh">
  <i class="fas fa-sync-alt"></i> Actualizar
</button>
</form>




@stop
