@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Agendar Consulta</h2>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Médico:</label>
            <select class="form-select" id="doctor_id" name="doctor_id" required>
                <option value="">Selecione o Médico</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="patient_id" class="form-label">Paciente:</label>
            <select class="form-select" id="patient_id" name="patient_id" required>
                <option value="">Selecione o Paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="appointment_date" class="form-label">Data da Consulta:</label>
            <input class="form-control" type="datetime-local" id="appointment_date" name="appointment_date" value="{{ old('appointment_date') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Agendar</button>
    </form>
</div>
@endsection
