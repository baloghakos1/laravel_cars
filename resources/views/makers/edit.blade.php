@extends('layout')

@section('content')
    <h1>Módosítás</h1>
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        @include('error')
        <form action="{{ route('makers.update', $maker->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset id="asd">
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $maker->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
        </form>
        <a href="{{ route('makers.index') }}"><button>Mégse</button></a>
    </div>
@endsection