@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/dog_door.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <table class="controller">
                <tr>
                    <th>Object</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Bruce (dog)</td>
                    <td>
                        <button>Bark</button>
                    </td>
                </tr>
                <tr>
                    <td>Remote</td>
                    <td>
                        <button>Open</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <div><label>Message system</label></div>
        </div>
    </div>
@endsection
@section('js')
    <script>

    </script>
@endsection