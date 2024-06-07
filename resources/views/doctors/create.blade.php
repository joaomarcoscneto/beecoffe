@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Cadastrar Médico</h2>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
           
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="crm" class="form-label">CRM:</label>
            <input type="text" class="form-control" id="crm" name="crm" value="{{ old('crm') }}" required>
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Especialidade:</label>
            <input type="text" class="form-control" id="specialty" name="specialty" value="{{ old('specialty') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
