@extends ('layout')
<h1>Új város hozzáadása</h1>

@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<form action="{{ route('cities.store') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Új város adatai</legend>
        <div>
            <label for="name">Város neve:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="id_county">Megye:</label>
            
            </select>
        </div>
        <button type="submit">Város hozzáadása</button>
    </fieldset>
</form>