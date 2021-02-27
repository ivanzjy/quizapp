@extends('backend.layouts.master')
@section('title','create quiz')
@section('content')
    <div class="span9">
        <div class="content">
            <form action="{{route('quiz.store')}}" method="POST">@csrf
                <div class="module">
                    <div class="module-head">
                        <h3>Create a quiz</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            {{-- Question Quiz dropdown--}}
                            <label for="" class="control-label">Choose Quiz</label>
                            <div class="controls">
                                <select name="quiz">
                                    @foreach(\App\Models\Quiz::all() as $quiz )
                                        <option value="{{$quiz->id}}}}">{{$quiz->name}}</option>
                                    @endforeach
                                </select>
                                @error('question')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>

                            {{-- Question name--}}
                            <div class="control-group">
                                <label for="" class="control-label">Question Name</label>
                                <div class="controls">
                                    <input type="text" name="question" class="span8" placeholder="name of question"
                                           value="{{old('question')}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Question optons--}}
                            <div class="control-group">
                                <label for="" class="control-label">Question Name</label>
                                <div class="control-group">
                                    <label for="" class="control-label" for="options">Options</label>
                                    <div class="controls">
                                        @for($i=0;$i<4;$i++)
                                            <input type="text" name="options[$i]" class="span7"
                                                   placeholder="option {{$i+1}}"
                                                   required="" ;>
                                            <input type="radio" name="correctAnswer" value="{{$i}}">
                                            <span>Is the correct answer</span>
                                        @endfor
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
