@extends('layout')

@section('content')
    <h1>Pairings</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Male</th>
                    <th>Female</th>
                    <th>Successful</th>
                    <th>Memo</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($pairings as $pairing)
                <tr>
                    <td>{{{ $pairing->pairing_id }}}</td>
                    <td>{{{ $pairing->pairing_date }}}</td>
                    <td>{{{ $pairing->male_snake_name }}}</td>
                    <td>{{{ $pairing->female_snake_name }}}</td>
                    <td>{{{ $pairing->successful }}}</td>
                    <td>{{{ $pairing->memo }}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop