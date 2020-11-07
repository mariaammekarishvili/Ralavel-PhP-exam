@extends('home')

@section('content')
    <h1>{{$title}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/edit/{{$applicant->id}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" value="{{$applicant->name}}">
        <br>
        <label for="">surname</label>
        <input type="text" name="surname" value="{{$applicant->surname}}">
        <br>
        <label for="">position</label>
        <input type="text" name="position" value="{{$applicant->position}}">
        <br>
        <label for="">phone</label>
        <input type="text"  name="phone" value="{{$applicant->phone}}">
        <br>
        <input type="submit" value="save">
    </form>
@endsection
