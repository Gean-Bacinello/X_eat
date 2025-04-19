@extends('layout.dashboard')

@section('title', 'Cadastrar Paciente')

@section('content')
    <div class="d-flex justify-content-center mt-2 mb-2">
        <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title fw-semibold text-primary mb-4">Cadastrar Novo Paciente</h3>

                <form action="{{ route('pacientes.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="Nome Paciente" class="form-label">Nome do Paciente</label>
                            <input type="text" class="form-control" id="Nome" name="Nome" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Data Nascimento" class="form-label">Data Nascimento</label>
                            <input type="date" class="form-control" id="Data_Nascimento" name="Data_Nascimento" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Sexo" class="form-label">Sexo</label>
                            <select class="form-control" id="Sexo" name="Sexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="Peso" class="form-label">Peso</label>
                            <input type="number" class="form-control" id="Peso" name="Peso" step="0.01"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Altura" class="form-label">Altura</label>
                            <input type="number" class="form-control" id="Altura" name="Altura" step="0.01"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="Email" name="Email" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Senha" class="form-label">Senha</label>
                            <input type="text" class="form-control" id="Senha" name="Senha"
                                pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}"
                                title="A senha deve conter pelo menos 8 caracteres, uma letra maiúscula, uma letra minúscula e um número."
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Nutricionista" class="form-label">Nutricionista Responsavel</label>
                            <input type="number" class="form-control" id="Nutricionista_ID" name="Nutricionista_ID"
                                step="1" min="0" max="100" placeholder="ID"
                                title="Identificador do nutricionista responsavel" required>
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
