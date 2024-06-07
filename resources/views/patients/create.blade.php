@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Cadastrar Paciente</h2>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
           
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}" required>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Data de Nascimento:</label>
            <input class="form-control" type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" placeholder="dd/mm/yyyy"  required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
