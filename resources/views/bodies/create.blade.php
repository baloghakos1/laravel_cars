@extends('layout')

@section('content')
<h1>Új Karosszéria</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('bodies.store')}}" method="post">
        @csrf
        <fieldset id="asd">
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('bodies.index') }}"><button>Mégse</button></a>
</div>
@endsection