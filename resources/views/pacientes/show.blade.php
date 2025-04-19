@extends('layout.dashboard')

@section('title', 'Cadastrar Paciente')

@section('content')
    <div class="d-flex justify-content-center mt-2 mb-2">
        <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title fw-semibold text-primary mb-4">Dados do Paciente</h3>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Nome do Paciente</label>
                        <input type="text" class="form-control" value="{{ $paciente->Nome }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Data Nascimento</label>
                        <input type="text" class="form-control" value="{{ $paciente->Data_Nascimento }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Sexo</label>
                        <input type="text" class="form-control" value="{{ $paciente->Sexo }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Altura</label>
                        <input type="text" class="form-control" value="{{ $paciente->Altura }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Peso</label>
                        <input type="text" class="form-control" value="{{ $paciente->Peso }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ $paciente->Email }}" readonly>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Nutricionista responsavel</label>
                        <input type="text" class="form-control"
                            value="{{ $paciente->nutricionista->Nome ?? 'Não informado' }}" readonly>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('pacientes.index') }}" class="btn btn-outline-secondary">Voltar</a>
                </div>
            </div>
        </div>
    @endsection
