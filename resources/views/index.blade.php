@extends('skeleton')

@section('meta')

    <meta name="description" content="Coding test for Tech Toucan">
    <title>Tech Toucan</title>

@endsection

@section('content')
<div class="main">
      <h1 class="title">Tech Toucan</h1>
      @if (session('message'))
      <div class="success">
        <p>Success</p>
      </div>
      @endif
      <form class="form" id="form" action="{{ route('index') }}" method="post">
      @csrf
        <div class="firstname">
          <label class="label" for="firstname">Firstname</label>
          <input class="input" type="text" name="firstname" autocomplete="off" value="{{ old('firstname') }}">
          @error('firstname') 
          <div class="error">
            <p>Invalid</p>
          </div>
          @enderror
        </div>
        <div class="lastname">
          <label class="label" for="lastname">Lastname</label>
          <input class="input" type="text" name="lastname" autocomplete="off" value="{{ old('lastname') }}"/>
          @error('lastname') 
          <div class="error">
            <p>Invalid</p>
          </div>
          @enderror
        </div>
        <div class="email">
          <label class="label" for="email">Email</label>
          <input class="input" type="email" name="email" id="email" autocomplete="off" value="{{ old('email') }}"/>
          @if ($errors->any())
            <div class="error">
              <p>Duplicate</p>
            </div>
          @endif
          @error('email') 
          <div class="error">
            <p>Invalid</p>
          </div>
          @enderror
        </div>
        @error('schools') 
          <div class="error">
            <p>Minimum 1 school</p>
          </div>
          @enderror
        <div class="schools">
            <div class="school">
                <label for="school1">School 1</label>
                <input class="checkbox" type="checkbox" name="schools[school1]" id="school1" {{ old('school1') == 'school1' ? 'checked' : '' }}/>
      
            </div>
            <div class="school">
                <label for="school2">School 2</label>
                <input class="checkbox" type="checkbox" name="schools[school2]" id="school2" {{ old('school2') == 'school2' ? 'checked' : '' }}" />
      
            </div>
            <div class="school">
                <label for="school3">School 3</label>
                <input class="checkbox" type="checkbox" name="schools[school3]" id="school3" {{ old('school3') == 'school3' ? 'checked' : '' }}/>
      
            </div>
            <div class="school">
                <label for="school4">School 4</label>
                <input class="checkbox" type="checkbox" name="schools[school4]" id="school4" {{ old('school4') == 'school4' ? 'checked' : '' }}/>
      
            </div>
            <div class="school">
                <label for="school5">School 5</label>
                <input class="checkbox" type="checkbox" name="schools[school5]" id="school5" {{ old('school5') == 'school5' ? 'checked' : '' }}/>
      
            </div>
        </div>
        <div class="submit">
            <input id="submit" type="submit" value="Add">
        </div>
      </form>
    </div>
@endsection