@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div id="oksa">
    @include('success')
    </div>
    <ul>
        <div class="col">
            <a href="{{ route('bodies.create')}}"><button>Új hozzáadása</button></a>
        </div>
        <br><br><br>
        <table>
                <tr>
                    <td><div class="col id">Id</div></td>
                    <td><div class="col">Név</div></td>
                    <td><div class="col">Gombok</div></td>
                </tr>
        </table>
        @foreach($bodies as $body)
            <table>
                <tr>
                    <td><div class="col id">{{ $body->id }}</div></td>
                    <td><div class="col">{{$body->name}}</div></td>
                <td>
                <div class="right">

                        <div class="col">
                            <a href="{{ route('bodies.edit', $body->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-body">Töröl</button>
                            </form>
                        </div>
                </div>
                </td>
                </tr>
            </table>
        
        @endforeach
    </ul>
</div>
@endsection
