@extends('layout')

@section('content')
<h1>Új Üzemanyag</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('fuels.store')}}" method="post">
        @csrf
        <fieldset id="asd">
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('fuels.index') }}"><button>Mégse</button></a>
</div>
@endsection