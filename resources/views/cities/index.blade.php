@extends ('layout')

@section('content')


<h1>Városok</h1>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif

<ul>
    @foreach ($cities as $city)
    <li> {{ $city->name }} <a href="{{ route('cities.edit', $city->id) }}">Szerkesztés</a> <a href="{{ route('cities.destroy', $city->id) }}" onclick="return confirm('Biztosan törölni szeretnéd ezt a várost?')">Törlés</a></li>
    <li> {{ $city->id_county }}<a href="{{ route('counties.edit', $city->id_county) }}">Részletek</a> <a href="{{ route('counties.destroy', $city->id_county) }}" onclick="return confirm('Biztosan törölni szeretnéd ezt a megyét?')">Szerkesztés</a></li>
    <li> {{ $city->zip_code }}<a href=" {{ route('cities.edit', $city->id) }}">Részletek</a> <a href="{{ route('cities.destroy', $city->id) }}" onclick="return confirm('Biztosan törölni szeretnéd ezt a várost?')">Törlés</a></li>
    <li> {{ $city->population }}<a href=" {{ route('cities.edit', $city->id) }}">Részletek</a> <a href="{{ route('cities.destroy', $city->id) }}" onclick="return confirm('Biztosan törölni szeretnéd ezt a várost?')">Törlés</a></li>


    
    @endforeach
</ul>
@endsection