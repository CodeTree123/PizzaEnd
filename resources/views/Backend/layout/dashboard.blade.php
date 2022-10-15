@extends('Backend.master')
@section('content')

          @if(session()->has('massage'))
        <div class="alert alert-success">
          {{session()->get('massage')}}
        </div>
          @endif
          @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
          @endif
@endsection
