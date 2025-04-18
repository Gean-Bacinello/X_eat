@extends('layout.dashboard')

@section('title', 'Cadastrar Paciente')

@section('content')
<div class="d-flex justify-content-center mt-2 mb-2">
  <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
    <div class="card-body">
      <h3 class="card-title fw-semibold text-primary mb-4">Cadastrar Novo Paciente</h3>

      <form action="{{ route('pacientes.update',  $paciente->ID_Paciente) }}" method="POST">
        @csrf
        @method ('PUT') 

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Nome do Paciente</label>
            <input type="text" class="form-control" id="Nome" name="Nome" value="{{ $paciente->Nome }}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Data Nascimento</label>
            <input type="text" class="form-control" id="Data_Nascimento" name="Data_Nascimento" value="{{ $paciente->Data_Nascimento }}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="Sexo" name="Sexo" value="{{ $paciente->Sexo }}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Peso</label>
            <input type="text" class="form-control" id="Peso" name="Peso" value="{{ $paciente->Peso }}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" value="{{ $paciente->Email }}" required>
          </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <a href="{{ route('pacientes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

