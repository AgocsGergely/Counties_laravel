@extends('layout')



@section('content')

@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <form action"{{ route('cities.update', $city->id) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <legend>Város szerkesztése</legend>
            <div>
                <label for="name">Város neve:</label>
                <input type="text" name="name" id="name" value="{{ $city->name }}" required>
            </div>
            <div>
                <label for="zip_code">Irányítószám:</label>
                <input type="text" name="zip_code" id="zip_code" value="{{ $city->zip_code }}" required>
            </div>
            <div>
                <label for="id_county">Megye azonosító:</label>
                <input type="text" name="id_county" id="id_county" value="{{ $city->id_county }}" required>
            </div>
            <div>
                <label for="population">Népesség:</label>
                <input type="number" name="population" id="population" value="{{ $city->population }}" required>
            </div>
            <button type="submit">Mentés</button>
    </form>
    @endsection