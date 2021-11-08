@extends('skeleton')

@section('meta')

    <meta name="description" content="View schools">
    <title>Schools</title>

@endsection

@section('content')
    <div class="main">
        <h1 class="title">View Schools</h1>
        <form class="schoolForm" action="{{ route('schools') }}" method="post">
            @csrf
            @error('school') 
            <div class="error">
                <p>Choose a school</p>
            </div>
            @enderror
            <select name="school" id="schoolList" class="schools">
                <option value="school1">School 1</option>
                <option value="school2">School 2</option>
                <option value="school3">School 3</option>
                <option value="school4">School 4</option>
                <option value="school5">School 5</option>
            </select>
            <input id="submit" type="submit" value="Retrieve">
        </form>
        @if ($errors->has('none'))
            <div class="error">
              <p>No results</p>
            </div>
          @endif
        <table class="members">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @isset ($members)
                    @foreach ($members as $member)
                        <tr>
                            <td>{{$member->firstname}}</td>
                            <td>{{$member->lastname}}</td>
                            <td>{{$member->email}}</td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection