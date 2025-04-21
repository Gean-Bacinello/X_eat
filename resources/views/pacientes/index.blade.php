@extends('layout.dashboard')

@section('title', 'Lista de Pacientes')

@section('content')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-1 shadow-sm rounded-3 d-flex align-items-center" role="alert" style="padding: 1rem 1.25rem;">
            <i class="bi bi-check-circle-fill me-2 fs-4"></i>
            <div class="flex-grow-1">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close ms-2" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif
    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500);
            }
        }, 2000); 
    </script> 
        
        <h1 class="mb-4 pl-3">Pacientes Cadastrados</h1>

        <div class="container">
            <div class="d-flex justify-content-between mb-4">
                <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Adicionar Paciente</a>
                <form action="{{ route('pacientes.index') }}" method="GET" class="d-flex align-items-center">
                    <input type="text" name="search" class="form-control me-2"
                        placeholder="Pesquisar por nome ou e-mail" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
                </form>
            </div>

            {{-- Cards em linha com 2 por linha --}}
            @foreach ($pacientes->chunk(2) as $dupla)
                <div class="row mb-3">

                    @foreach ($dupla as $paciente)
                        @php
                            // Define a imagem de acordo com o sexo
                            switch (strtolower($paciente->Sexo)) {
                                case 'masculino':
                                    $foto = asset('img/img_perfil/padrao_masculino.png');
                                    break;
                                case 'feminino':
                                    $foto = asset('img/img_perfil/padrao_feminino.png');
                                    break;
                                default:
                                    $foto = asset('img/img_perfil/padrao_neutro.png');
                                    break;
                            }
                        @endphp
                        <div class="col-md-6">
                            <div class="p-3 border rounded shadow-sm bg-white h-100">
                                <div class="d-flex align-items-start">
                                    <img src="{{ $foto }}" alt="Foto" class="rounded-circle me-3"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <div class="flex-grow-1 pl-3">
                                        <h5 class="mb-1 fw-semibold text-truncate" title="{{ $paciente->Nome }}">
                                            <a
                                                href="{{ route('pacientes.show', $paciente->ID_Paciente) }}">{{ $paciente->Nome }}</a>
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
                                    <a href="{{ route('pacientes.edit', $paciente->ID_Paciente) }}"
                                        class="btn btn-sm btn-outline-primary">Editar</a>

                                    <form action="{{ route('pacientes.destroy', $paciente->ID_Paciente) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja apagar?')">
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
