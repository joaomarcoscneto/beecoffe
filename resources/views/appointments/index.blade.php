@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="text-end mb-3">
        <a href="{{ route('appointments.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data</th>
                <th scope="col">Doutor</th>
                <th scope="col">Paciente</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <th scope="row">{{ $appointment->id }}</th>
                <td>{{ date('d/m/Y H:i', strtotime($appointment->appointment_date)) }}</td>
                <td>{{ $appointment->doctor->name }}</td>
                <td>{{ $appointment->patient->name }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection