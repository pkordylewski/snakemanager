@extends('layout')

@section('content')
    <h1>Weights</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Snake</th>
                    <th>Weight Date</th>
                    <th>Weight</th>
                    <th>Memo</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($weights as $weight)
                <tr>
                    <td>{{{ $weight->weight_id }}}</td>
                    <td>{{{ $weight->snake_name }}}</td>
                    <td>{{{ $weight->weight_date }}}</td>
                    <td>{{{ $weight->weight }}}</td>
                    <td>{{{ $weight->memo }}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop