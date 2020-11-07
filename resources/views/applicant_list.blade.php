@extends('home')

@section('content')
    <h1>{{$title}}</h1>
    <table>
        <tr>
            <td>name</td>
            <td>surname</td>
            <td>position</td>
            <td>phone</td>
            <td>status</td>
            <td>edit</td>
        </tr>
        @foreach($applicants as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->position}}</td>
                <td>{{$item->phone}}</td>
                <td><a href="?id={{$item->id}}&action={{!$item->is_hired}}">@if($item->is_hired){{'not hire'}}@else{{'hire'}}@endif</a></td>
                <td><a href="/edit/{{$item->id}}">edit</a></td>
            </tr>
            @endforeach
    </table>
    @endsection
