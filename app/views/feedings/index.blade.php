@extends('layout')

@section('content')
    <h1>Feedings</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Snake</th>
                    <th>Date</th>
                    <th>Food</th>
                    <th>Weight</th>
                    <th>Successful</th>
                    <th>Memo</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($feedings as $feeding)
                    <tr>
                        <td>{{{ $feeding->feeding_id }}}</td>
                        <td>{{{ $feeding->snake_name }}}</td>
                        <td>{{{ $feeding->feeding_date }}}</td>
                        <td>{{{ $feeding->food }}}</td>
                        <td>{{{ $feeding->weight }}}</td>
                        <td>{{{ $feeding->successful }}}</td>
                        <td>{{{ $feeding->memo }}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop