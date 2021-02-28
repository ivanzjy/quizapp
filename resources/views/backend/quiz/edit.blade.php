@extends('backend.layouts.master')
@section('title','Edit Quiz')
@section('content')
    <div class="span9">
        <div class="content">
            <form action="{{route('quiz.update',[$quiz->id])}}" method="POST">@csrf
                {{method_field('PUT')}}
                <div class="module">
                    <div class="module-head">
                        <h3>Create a quiz</h3>
                    </div>
                    {{-- choose quiz--}}
                    <div class="module-body">
                        <div class="control-group">
                            <label for="" class="control-label">Quiz Name</label>
                            <div class="controls">
                                <input type="text" name="name" class="span8" placeholder="name of quiz"
                                       value="{{$quiz->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                            </span>
                                @enderror
                            </div>

                            {{-- Enter quiz Descriptions--}}
                            <div class="controls">
                                <label class="control-label">Quiz Description</label>
                                <textarea type="text" name="description" class="span8"
                                          placeholder="Description">{{$quiz->description}}</textarea>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            {{-- Enter quiz minutes--}}

                            <div class="controls">
                                <label class="control-label">Minutes</label>
                                <input type="text" name="minutes" class="span8" placeholder="minutes"
                                       value="{{$quiz->minutes}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
