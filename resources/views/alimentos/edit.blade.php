@extends('layout.dashboard')

@section('title', 'Editar Alimento')

@section('content')
<div class="d-flex justify-content-center mt-2 mb-2">
  <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
    <div class="card-body">
      <h3 class="card-title fw-semibold text-primary mb-4">Editar Alimento</h3>

      <form action="{{ route('alimentos.update' , $alimento) }}" method="POST">
      @csrf
      @method ('PUT') 
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="Nome_Alimento" class="form-label">Nome do Alimento</label>
            <input type="text" class="form-control" id="Nome_Alimento" name="Nome_Alimento" value="{{ $alimento->Nome_Alimento }}" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for="Grupo_Alimentar" class="form-label">Grupo Alimentar</label>
            <input type="text" class="form-control" id="Grupo_Alimentar" name="Grupo_Alimentar" value="{{ $alimento->Grupo_Alimentar }}" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for="Energia_kcal" class="form-label">Energia (kcal)</label>
            <input type="number" class="form-control" id="Energia_kcal" name="Energia_kcal" value="{{ $alimento->Energia_kcal }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Carboidratos_g" class="form-label">Carboidratos (g)</label>
            <input type="number" class="form-control" id="Carboidratos_g" name="Carboidratos_g" value="{{ $alimento->Carboidratos_g }}"  step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Proteinas_g" class="form-label">Proteínas (g)</label>
            <input type="number" class="form-control" id="Proteinas_g" name="Proteinas_g" value="{{ $alimento->Proteinas_g }}"  step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Lipideos_g" class="form-label">Lipídeos (g)</label>
            <input type="number" class="form-control" id="Lipideos_g" name="Lipideos_g" value="{{ $alimento->Lipideos_g }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Colesterol_mg" class="form-label">Colesterol (mg)</label>
            <input type="number" class="form-control" id="Colesterol_mg" name="Colesterol_mg" value="{{ $alimento->Colesterol_mg }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Sodio_mg" class="form-label">Sódio (mg)</label>
            <input type="number" class="form-control" id="Sodio_mg" name="Sodio_mg" value="{{ $alimento->Sodio_mg }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Vitamina_B6_mg" class="form-label">Vitamina B6 (mg)</label>
            <input type="number" class="form-control" id="Vitamina_B6_mg" name="Vitamina_B6_mg" value="{{ $alimento->Vitamina_B6_mg }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Vitamina_D_ug" class="form-label">Vitamina D (μg)</label>
            <input type="number" class="form-control" id="Vitamina_D_ug" name="Vitamina_D_ug" value="{{ $alimento->Vitamina_D_ug }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Calcio_mg" class="form-label">Cálcio (mg)</label>
            <input type="number" class="form-control" id="Calcio_mg" name="Calcio_mg" value="{{ $alimento->Calcio_mg }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Ferro_mg" class="form-label">Ferro (mg)</label>
            <input type="number" class="form-control" id="Ferro_mg" name="Ferro_mg" value="{{ $alimento->Ferro_mg }}"  step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Potassio_mg" class="form-label">Potássio (mg)</label>
            <input type="number" class="form-control" id="Potassio_mg" name="Potassio_mg" value="{{ $alimento->Potassio_mg }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Acido_Folico_ug" class="form-label">Ácido Fólico (μg)</label>
            <input type="number" class="form-control" id="Acido_Folico_ug" name="Acido_Folico_ug" value="{{ $alimento->Acido_Folico_ug }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Gorduras_Saturadas_g" class="form-label">Gorduras Saturadas (g)</label>
            <input type="number" class="form-control" id="Gorduras_Saturadas_g" name="Gorduras_Saturadas_g" value="{{ $alimento->Gorduras_Saturadas_g }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Gorduras_Trans_g" class="form-label">Gorduras Trans (g)</label>
            <input type="number" class="form-control" id="Gorduras_Trans_g" name="Gorduras_Trans_g" value="{{ $alimento->Gorduras_Trans_g }}" step="0.01">
          </div>

          <div class="col-md-4 mb-3">
            <label for="Fibra_Alimentar_g" class="form-label">Fibra Alimentar (g)</label>
            <input type="number" class="form-control" id="Fibra_Alimentar_g" name="Fibra_Alimentar_g" value="{{ $alimento->Fibra_Alimentar_g }}" step="0.01">
          </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <a href="{{ route('alimentos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
