@extends('backend.layouts.master')
@section('title','Update Question')
@section('content')

    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <form action="{{route('question.update',[$question->id])}}" method="POST">@csrf
                {{method_field('PUT')}}


                <div class="module">
                    <div class="module-head">
                        <h3>Edit Question</h3>
                    </div>
                    {{--  Choose Quiz--}}
                    <div class="module-body">
                        <div class="control-group">
                            <label class="control-label" for="name">Choose Quiz</label>
                            <div class="controls">
                                <select name="quiz" class="span8 ">
                                    @foreach(\App\Models\Quiz::all() as $quiz)
                                        <option value="{{$quiz->name}}"
                                                {{--select value on quiz--}}
                                            @if($quiz->id==$question->quiz_id)selected
                                            @endif
                                            >{{$quiz->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('quiz')
                            <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
                            @enderror
                        </div>

                        {{--  Question name --}}
                        <div class="control-group">
                            <label class="control-label" for="name">Question name</label>
                            <div class="controls">
                                <input type="text" name="question" class="span8 @error('name') border-red @enderror"
                                       placeholder="name of the question" value='{{$question->question}}'>
                            </div>
                            @error('question')
                            <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
                            @enderror

                        </div>

                        {{--  Options --}}
                        <div class="control-group">
                            <label class="control-label" for="options">Options</label>
                            <div class="controls">
                                @foreach($question->answers as $key=>$answer)
                                    <input type="text" name="options[]"
                                           class="span7 @error('name') border-red @enderror"
                                           required="" value="{{$answer->answer}}">
                                    <input type="radio" name="correct_answer" value="{{$key}}"
                                    @if($answer->is_correct){{'checked'}}@endif
                                    >
                                    <span>Is correct answer</span>
                                @endforeach
                            </div>
                            @error('options')
                            <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                    </span>
                            @enderror
                        </div>
                        {{--  Buttons --}}

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
