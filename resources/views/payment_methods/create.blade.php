@extends('layouts.app')
@section('content')
<div class="container pt-4" id="app">
  <h2>Registrar método de pago</h2>
  <hr>
  <form action="" method="POST">
    <div class="row">
      <div class="col-sm-3">
        <label for="#">Logotípo</label>
        <div class="picture-placeholder"></div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" name="name" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="logo">Url del sitio</label>
          <input type="url" class="form-control" name="url" id="url" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="logo">Logotípo</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="logo" id="logo" autocomplete="off">
            <label class="custom-file-label">Seleccionar archivo</label>
          </div>
        </div>

        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
