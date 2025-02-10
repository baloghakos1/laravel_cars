@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <ul>
        <div class="col">
            <a href="{{ route('makers.create')}}"><button>Új hozzáadása</button></a>
        </div>
        <br><br><br>
        
        @foreach($makers as $maker)
        <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
            <table>
                <tr>
                    <td><div class="col id">{{ $maker->id }}</div></td>
                    <td><div class="col">{{$maker->name}}</div></td>
                <td>
                <div class="right">

                        <div class="col">
                            <a href="{{ route('makers.edit', $maker->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-maker">Töröl</button>
                            </form>
                        </div>
                </div>
                </td>
                </tr>
            </table>
        </li>
        @endforeach
    </ul>
</div>
@endsection
