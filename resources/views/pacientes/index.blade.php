@extends('layout.dashboard')

@section('title', 'Lista de Pacientes')

@section('content')
<div class="container">
  <h1 class="mb-4">Pacientes Cadastrados</h1>

  <div class="d-flex justify-content-between mb-4">
    <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Adicionar Paciente</a>
    <form action="{{ route('pacientes.index') }}" method="GET" class="d-flex align-items-center">
      <input type="text" name="search" class="form-control me-2" placeholder="Pesquisar por nome ou e-mail" value="{{ request('search') }}">
      <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
    </form>
  </div>

  <div class="d-flex flex-column gap-3">
    @foreach ($pacientes as $paciente)
      <div class="d-flex align-items-center justify-content-between p-3 border rounded shadow-sm bg-white">

        {{-- Nome e E-mail --}}
        <div class="me-4" style="width: 250px; overflow: hidden;">
          <h5 class="mb-1 fw-semibold text-truncate" title="{{ $paciente->Nome }}">
            <a href="{{ route('pacientes.show', $paciente->ID_Paciente) }}">{{ $paciente->Nome }}</a>
          </h5>
          <small class="text-muted">{{ $paciente->Email }}</small>
        </div>

        {{-- Informações do Paciente --}}
        <div class="d-flex text-center justify-content-center flex-grow-1" style="gap: 3rem;">
          <div style="width: 90px;">
            <div class="fw-bold">{{ $paciente->Altura }} m</div>
            <small class="text-muted">Altura</small>
          </div>
          <div style="width: 90px;">
            <div class="fw-bold">{{ $paciente->Peso }} kg</div>
            <small class="text-muted">Peso</small>
          </div>
          <div style="width: 90px;">
            <div class="fw-bold">{{ \Carbon\Carbon::parse($paciente->Data_Nascimento)->age }} anos</div>
            <small class="text-muted">Idade</small>
          </div>
          <div style="width: 60px;">
            <div class="fw-bold">#{{ $paciente->ID_Paciente }}</div>
            <small class="text-muted">ID</small>
          </div>
        </div>

        {{-- Botões --}}
        <div class="d-flex gap-2">
          <a href="{{ route('pacientes.edit', $paciente->ID_Paciente) }}" class="btn btn-sm btn-outline-primary">Editar</a>
          <form action="{{ route('pacientes.destroy', $paciente->ID_Paciente) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza que deseja apagar este paciente?')">Excluir</button>
          </form>
        </div>

      </div>
    @endforeach

    {{-- Paginação --}}
    <div class="d-flex justify-content-center mt-4">
      {{ $pacientes->links('pagination::bootstrap-5') }}
    </div>
  </div>
</div>
@endsection
