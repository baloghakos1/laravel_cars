@extends('layout')

@section('content')
<h1>Új Jármű</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('vehicles.store')}}" method="post">
        @csrf
        <fieldset id="asd">
            <label for="vin">Alvázszám</label>
            <input type="text" id="vin" name="vin">
        </fieldset>
        <fieldset id="asd">
            <label for="license_plate">Rendszám</label>
            <input type="text" id="license_plate" name="license_plate">
        </fieldset>
        <fieldset id="asd">
		<label for="maker_id">Gyártó</label>
		<select name="maker_id" id="select-maker" title="Gyártók">
			<option value="0">-- Válassz gyártót --</option>
			@foreach($makers as $maker)
				<option value="{{ $maker->id }}">{{ $maker->name }}</option>
			@endforeach
		</select>
	    </fieldset>
        <fieldset id="asd">
		<label for="model_id">Model</label>
		<select name="model_id" id="select-model"  title="Modellek">
			<option value="0">-- Válassz modelt --</option>
			@foreach($models as $model)
				<option value="{{ $model->id }}">{{ $model->name }}</option>
			@endforeach
		</select>
	    </fieldset>
        <fieldset id="asd">
		<label for="body_id">Karosszéria</label>
		<select name="body_id" id="select-body"  title="Karosszériák">
			<option value="0">-- Válassz Karosszériát --</option>
			@foreach($bodies as $body)
				<option value="{{ $body->id }}">{{ $body->name }}</option>
			@endforeach
		</select>
	    </fieldset>
        <fieldset id="asd">
		<label for="fuel_id">Üzemanyag</label>
		<select name="fuel_id" id="select-fuel"  title="Üzemanyagok">
			<option value="0">-- Válassz Üzemanyagot --</option>
			@foreach($fuels as $fuel)
				<option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
			@endforeach
		</select>
	    </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('vehicles.index') }}"><button>Mégse</button></a>
</div>
@endsection