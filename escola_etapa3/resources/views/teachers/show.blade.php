@extends('layout')

@section('content')
    <h2>Detalhes do Professor</h2>
    <p><strong>ID:</strong> {{ $teacher->id }}</p>
    <p><strong>Nome:</strong> {{ $teacher->name }}</p>
    <p><strong>Email:</strong> {{ $teacher->email }}</p>

    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Voltar para a lista</a>
@endsection
