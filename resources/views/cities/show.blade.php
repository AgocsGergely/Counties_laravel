@extends('layout')

@section('content')
    <h1>Város részletei</h1>

    <p><strong>Név:</strong> {{ $city->name }}</p>
    <p><strong>Irányítószám:</strong> {{ $city->zip_code }}</p>
    <p><strong>Megye azonosító:</strong> {{ $city->id_county }}</p>
    <p><strong>Népesség:</strong> {{ $city->population }}</p>

    <a href="{{ route('cities.edit', $city->id) }}">Szerkesztés</a>
    <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Biztosan törölni szeretnéd ezt a várost?')">Törlés</button>
    </form>
    @endsection