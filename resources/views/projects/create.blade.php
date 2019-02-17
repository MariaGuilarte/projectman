@extends('layouts.app')
@section('content')
<div class="container pt-4" id="app">
  <h2>Crear proyecto</h2>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <div class="form-group">
        <label for="client_id">Cliente</label>
        @if( $clients->count() )
        <select name="client_id" id="client_id" class="form-control">
          @foreach( $clients as $cli )
            <option name="client_id" value="{{ $cli->id }}">{{ $cli->name }}</option>
          @endforeach
        </select>
        @else
          <span class="d-block"><a href="#">Registrar un cliente</a></span>
        @endif
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" autocomplete="off">
      </div>

      <label style="font-weight: 500;">Plataforma</label>
      <div class="form-group inline-checks-container">
        @foreach( $platforms as $p )
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="platformCheckbox{{ $p->id }}" value="{{ $p->id }}">
          <label class="form-check-label" for="inlineCheckbox1">{{ $p->title }}</label>
        </div>
        @endforeach
      </div>

      <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" rows="11" class="form-control"></textarea>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="form-group">
        <label for="development_status">Estado de desarrollo</label>
        @foreach( $dev_statuses as $dev_status )
          <div class="form-check">
            <input class="form-check-input" name="development_status_id" type="radio" value="{{ $dev_status->id }}" id="defaultCheck{{ $dev_status->id }} ">
            <label class="form-check-label" for="defaultCheck{{ $dev_status->id }}">{{ $dev_status->title }}</label>
          </div>
        @endforeach
      </div>

      <div class="form-group">
        <label>Logo</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="attachment">
          <label class="custom-file-label">Logo</label>
        </div>
      </div>

      <div class="form-group">
        <label>Documento adjunto</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="attachment">
          <label class="custom-file-label">Documento(s) adjunto(s)</label>
        </div>
      </div>

      <div class="form-group">
        <label>Captura</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="attachment">
          <label class="custom-file-label">Captura</label>
        </div>
      </div>

      <div class="form-group text-right">
        <button type="submit" class="btn">Enviar</button>
      </div>

    </div>

  </div>
</div>
@endsection
