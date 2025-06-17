@extends('layout.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Agenda</h1>

        <!-- Botão para abrir o formulário -->
        <button id="btnAdicionar">Adicionar Evento</button>

        <!-- Formulário de inclusão -->
        <div id="formEvento">
            <label>Paciente:
                <select id="pacienteSelect">
                    <option value="João da Silva">João da Silva</option>
                    <option value="Maria Oliveira">Maria Oliveira</option>
                    <option value="Carlos Souza">Carlos Souza</option>
                    <!-- Este campo pode ser populado dinamicamente -->
                </select>
            </label>

            <label>Data da Consulta:
                <input type="date" id="dataConsulta">
            </label>

            <label>Local:
                <input type="text" id="localConsulta" placeholder="Ex: Clínica A, Sala 2">
            </label>

            <button id="btnSalvarEvento">Salvar Evento</button>
        </div>

        <!-- Calendário -->
        <div id="calendar" style="margin-top: 40px;"></div>
    </div>

    <!-- Estilos adicionais -->
    <style>
        #formEvento {
            display: none;
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            width: 300px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
    </style>

    <!-- FullCalendar -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'pt-br',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [],

                // Clique em evento para excluir
                eventClick: function (info) {
                    const confirmar = confirm(`Deseja realmente excluir o evento "${info.event.title}"?`);
                    if (confirmar) {
                        info.event.remove();
                        alert('Evento excluído com sucesso!');
                    }
                }
            });

            calendar.render();

            // Mostrar formulário
            document.getElementById('btnAdicionar').addEventListener('click', () => {
                document.getElementById('formEvento').style.display = 'block';
            });

            // Salvar evento
            document.getElementById('btnSalvarEvento').addEventListener('click', () => {
                const paciente = document.getElementById('pacienteSelect').value;
                const data = document.getElementById('dataConsulta').value;
                const local = document.getElementById('localConsulta').value;

                if (paciente && data && local) {
                    calendar.addEvent({
                        title: paciente + ' - ' + local,
                        start: data,
                        allDay: true
                    });

                    alert('Evento adicionado com sucesso!');
                    document.getElementById('formEvento').style.display = 'none';

                    // Limpar campos
                    document.getElementById('dataConsulta').value = '';
                    document.getElementById('localConsulta').value = '';
                } else {
                    alert('Preencha todos os campos!');
                }
            });
        });
    </script>
@endsection
