@extends('layout.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-center mt-5">
<div class="card shadow rounded border-0 p-4" style="max-width: 800px; ">
  <div class="card-body ">
    <h3 class="card-title fw-semibold text-primary">{{ $alimento->Nome_Alimento }}</h3>
    <h6 class="card-subtitle mb-4 text-muted">{{ $alimento->Grupo_Alimentar }}</h6>


    <div class="row g-3"> <!-- Gera espaçamento entre cards -->
    <div class="row text-center">
    <div class="row">
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">ID do Alimento</span>
      <strong>{{ $alimento->ID_Alimento }}</strong>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Carboidratos</span>
      <strong>{{ $alimento->Carboidratos_g }}</strong>
      <span class="text-muted">g</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Proteínas</span>
      <strong>{{ $alimento->Proteinas_g }}</strong>
      <span class="text-muted">g</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Energia</span>
      <strong>{{ $alimento->Energia_kcal }}</strong>
      <span class="text-muted">kcal</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Lipideos</span>
      <strong>{{ $alimento->Lipideos_g }}</strong>
      <span class="text-muted">g</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Colesterol</span>
      <strong>{{ $alimento->Colesterol_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Sodio</span>
      <strong>{{ $alimento->Sodio_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Vitamina B6</span>
      <strong>{{ $alimento->Vitamina_B6_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Vitamina D</span>
      <strong>{{ $alimento->Vitamina_D_ug }}</strong>
      <span class="text-muted">ug</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Calcio</span>
      <strong>{{ $alimento->Calcio_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Ferro</span>
      <strong>{{ $alimento->Ferro_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Potassio</span>
      <strong>{{ $alimento->Potassio_mg }}</strong>
      <span class="text-muted">mg</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Acido Folico</span>
      <strong>{{ $alimento->Acido_Folico_ug }}</strong>
      <span class="text-muted">ug</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Gorduras Saturadas</span>
      <strong>{{ $alimento->Gorduras_Saturadas_g }}</strong>
      <span class="text-muted">ug</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Gorduras Trans</span>
      <strong>{{ $alimento->Gorduras_Trans_g }}</strong>
      <span class="text-muted">ug</span>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="d-flex justify-content-between bg-light rounded p-2 shadow">
      <span class="text-muted">Fibra Alimentar</span>
      <strong>{{ $alimento->Fibra_Alimentar_g }}</strong>
      <span class="text-muted">g</span>
    </div>
  </div>
</div>
</div>

    </div>

    <div class="d-flex justify-content-between mt-4">
      <a href="{{ route('alimentos.index') }}" class="btn btn-outline-secondary">Voltar</a>  
      </div>
    </div>
  </div>
</div>
</div>


@endsection