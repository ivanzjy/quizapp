@extends('backend.layouts.master')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success">   {{Session::get('message')}}
        </div>
    @endif
@endsection
