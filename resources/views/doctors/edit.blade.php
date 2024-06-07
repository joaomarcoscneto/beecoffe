@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class="mb-4">Editar Médico</h2>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}" required>
        </div>
        <div class="mb-3">
            <label for="crm" class="form-label">CRM:</label>
            <input type="text" class="form-control" id="crm" name="crm" value="{{ $doctor->crm }}" required>
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Especialidade:</label>
            <input type="text" class="form-control" id="specialty" name="specialty" value="{{ $doctor->specialty }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
