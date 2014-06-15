@extends('layout')

@section('content')
    <h1>Sheds</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Snake</th>
                    <th>Shed Date</th>
                    <th>Notice Date</th>
                    <th>Memo</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($sheds as $shed)
                <tr>
                    <td>{{{ $shed->shed_id }}}</td>
                    <td>{{{ $shed->snake_name }}}</td>
                    <td>{{{ $shed->shed_date }}}</td>
                    <td>{{{ $shed->notice_date }}}</td>
                    <td>{{{ $shed->memo }}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop