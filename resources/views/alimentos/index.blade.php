@extends('layout.dashboard')

@section('title', 'Lista de Alimentos')

@section('content')
    <div class="container">
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
            
        <h1 class="mb-4">Bases de dados de alimentos</h1>

        <div class="d-flex justify-content-between mb-4">
            <a href="{{ route('alimentos.create') }}" class="btn btn-primary">Adicionar Alimento</a>
            <form action="{{ route('alimentos.index') }}" method="GET" class="d-flex align-items-center">
                <input type="text" name="search" class="form-control me-2" placeholder="Pesquisar Alimento"
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
            </form>
        </div>

        <div class="d-flex flex-column gap-3">
            @foreach ($alimentos as $alimento)
                <div class="d-flex align-items-center justify-content-between p-3 border rounded shadow-sm bg-white">

                    {{-- Nome e Grupo --}}
                    <div class="me-4" style="width: 250px; overflow: hidden;">
                        <h5 class="mb-1 fw-semibold text-truncate" title="{{ $alimento->Nome_Alimento }}">
                            <a href="{{ route('alimentos.show', $alimento->ID_Alimento) }}">
                                {{ $alimento->Nome_Alimento }}</a>

                        </h5>
                        <small class="text-muted">{{ $alimento->Grupo_Alimentar }}</small>
                    </div>

                    {{-- Valores Nutricionais --}}
                    <div class="d-flex text-center justify-content-center flex-grow-1" style="gap: 3rem;">
                        <div style="width: 90px;">
                            <div class="fw-bold">{{ $alimento->Carboidratos_g }} g</div>
                            <small class="text-muted">Carboidratos</small>
                        </div>
                        <div style="width: 90px;">
                            <div class="fw-bold">{{ $alimento->Proteinas_g }} g</div>
                            <small class="text-muted">Proteínas</small>
                        </div>
                        <div style="width: 90px;">
                            <div class="fw-bold">{{ $alimento->Energia_kcal }} kcal</div>
                            <small class="text-muted">Energia</small>
                        </div>
                        <div style="width: 60px;">
                            <div class="fw-bold">#{{ $alimento->ID_Alimento }}</div>
                            <small class="text-muted">ID</small>
                        </div>
                    </div>

                    
                    {{-- Botões --}}
                    <div class="d-flex gap-2">
                        <a href="{{ route('alimentos.edit', $alimento->ID_Alimento) }}"
                            class="btn btn-sm btn-outline-primary">Editar</a>
                        <form action="{{ route('alimentos.destroy', $alimento->ID_Alimento) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Tem certeza que deseja apagar')">Excluir</button>
                        </form>
                    </div>

                </div>
            @endforeach
            <!-- adiciona paginação -->
            <div class="d-flex justify-content-center mt-4">
                {{ $alimentos->links('pagination::bootstrap-5') }}
            </div>


        </div>
    </div>
@endsection
