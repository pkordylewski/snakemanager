@extends('layout')

@section('content')
    <h1>Snakes</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Buy Date</th>
                    <th>Buy Price</th>
                    <th>Hatch Date</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($snakes as $snake)
                    <tr>
                        <td>{{{ $snake->snake_name }}}</td>
                        <td>{{{ $snake->gender }}}</td>
                        <td>{{{ $snake->buy_date }}}</td>
                        <td>{{{ $snake->buy_price }}}</td>
                        <td>{{{ $snake->hatch_date }}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop