@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Detalhes do Médico</h2>
    <div class="card bg-dark mb-4">
        <div class="card-body">
            <h5 class="card-title text-white">Informações do Médico</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark text-white"><strong>Nome:</strong> {{ $doctor->name }}</li>
                <li class="list-group-item bg-dark text-white"><strong>CRM:</strong> {{ $doctor->crm }}</li>
                <li class="list-group-item bg-dark text-white"><strong>Especialidade:</strong> {{ $doctor->specialty }}</li>
            </ul>
        </div>
    </div>
    <h2 class="mb-4">Agendamentos</h2>
    <div>
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Data da Consulta</th>
                        <th scope="col">Paciente</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($appointments as $appointment)
                        <tr>
                            <th scope="row">{{ $appointment->id }}</th>
                            <td>{{ date('d/m/Y H:i', strtotime($appointment->appointment_date)) }}</td>
                            <td>{{ $appointment->patient->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Ainda não há agendamentos.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
