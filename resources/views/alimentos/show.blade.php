@extends('layout.dashboard')

@section('title', 'Visualizar Alimento')

@section('content')
<div class="d-flex justify-content-center mt-2 mb-2">
  <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
    <div class="card-body">
      <h3 class="card-title fw-semibold text-primary mb-1">{{ $alimento->Nome_Alimento }}</h3>
      <h6 class="card-subtitle mb-4 text-muted">{{ $alimento->Grupo_Alimentar }}</h6>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="form-label">ID do Alimento</label>
          <input type="text" class="form-control" value="{{ $alimento->ID_Alimento }}" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Carboidratos</label>
          <input type="text" class="form-control" value="{{ $alimento->Carboidratos_g }} g" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Proteínas</label>
          <input type="text" class="form-control" value="{{ $alimento->Proteinas_g }} g" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Energia</label>
          <input type="text" class="form-control" value="{{ $alimento->Energia_kcal }} kcal" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Lipídeos</label>
          <input type="text" class="form-control" value="{{ $alimento->Lipideos_g }} g" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Colesterol</label>
          <input type="text" class="form-control" value="{{ $alimento->Colesterol_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Sódio</label>
          <input type="text" class="form-control" value="{{ $alimento->Sodio_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Vitamina B6</label>
          <input type="text" class="form-control" value="{{ $alimento->Vitamina_B6_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Vitamina D</label>
          <input type="text" class="form-control" value="{{ $alimento->Vitamina_D_ug }} µg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Cálcio</label>
          <input type="text" class="form-control" value="{{ $alimento->Calcio_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Ferro</label>
          <input type="text" class="form-control" value="{{ $alimento->Ferro_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Potássio</label>
          <input type="text" class="form-control" value="{{ $alimento->Potassio_mg }} mg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Ácido Fólico</label>
          <input type="text" class="form-control" value="{{ $alimento->Acido_Folico_ug }} µg" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Gorduras Saturadas</label>
          <input type="text" class="form-control" value="{{ $alimento->Gorduras_Saturadas_g }} g" readonly>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label">Gorduras Trans</label>
          <input type="text" class="form-control" value="{{ $alimento->Gorduras_Trans_g }} g" readonly>
        </div>
        <div class="col-md-4 ">
          <label class="form-label">Fibra Alimentar</label>
          <input type="text" class="form-control" value="{{ $alimento->Fibra_Alimentar_g }} g" readonly>
        </div>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('alimentos.index') }}" class="btn btn-outline-secondary">Voltar</a>  
      </div>
    </div>
  </div>
</div>
@endsection
