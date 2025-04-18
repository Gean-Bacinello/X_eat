@extends('layout.dashboard')

@section('title', 'Lista de Pacientes')

@section('content')
<div class="container">
  <h1 class="mb-4">Pacientes Cadastrados</h1>

  <div class="container">
    <div class="d-flex justify-content-between mb-4">
      <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Adicionar Paciente</a>
      <form action="{{ route('pacientes.index') }}" method="GET" class="d-flex align-items-center">
         <input type="text" name="search" class="form-control me-2" placeholder="Pesquisar por nome ou e-mail" value="{{ request('search') }}"> 
        <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
      </form>
    </div>

{{-- Cards em linha com 2 por linha --}}
    @foreach ($pacientes->chunk(2) as $dupla)
      <div class="row mb-3">
        
        @foreach ($dupla as $paciente)
          <div class="col-md-6">
            <div class="p-3 border rounded shadow-sm bg-white h-100">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h5 class="mb-1 fw-semibold text-truncate" title="{{ $paciente->Nome }}">
                    <a href="{{ route('pacientes.show', $paciente->ID_Paciente) }}">{{ $paciente->Nome }}</a>
                  </h5>
                  <small class="text-muted">{{ $paciente->Email }}</small>
                </div>
                <div class="text-end" style="width: 60px;">
                  <div class="fw-bold">#{{ $paciente->ID_Paciente }}</div>
                  <small class="text-muted">ID</small>
                </div>
              </div>

               {{-- Botões dentro do card --}}
              <div class="d-flex gap-2 mt-3">
                <a href="{{ route('pacientes.edit', $paciente->ID_Paciente) }}" class="btn btn-sm btn-outline-primary">Editar</a>

                <form action="{{ route('pacientes.destroy', $paciente->ID_Paciente) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja apagar?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                </form>
              </div>

            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>

  {{-- Paginação --}}
  <div class="d-flex justify-content-center mt-4">
    {{ $pacientes->links('pagination::bootstrap-5') }}
  </div>
</div>
@endsection