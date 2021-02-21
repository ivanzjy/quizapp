@extends('backend.layouts.master')

@section('content')

    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-success">   {{Session::get('message')}}
                </div>
            @endif
            <div class="module">
                <div class="module-head">
                    <h3>All Quizzes</h3>
                    <div class="module-body">
                        <table class="table table-striped">
                            <thread>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Minutes</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>View</th>
                                </tr>
                                @if(count($quizzes)>0)
                                    @foreach($quizzes as $key=>$quiz)
                                        <tr>
                                            <td>{{$quiz->id}}</td>
                                            <td>{{$quiz->name}}</td>
                                            <td>{{$quiz->description}}</td>
                                            <td>{{$quiz->minutes}}</td>
                                            <td>
                                                <a href="{{route('quiz.edit',[$quiz->id])}}">
                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('quiz.destroy',[$quiz->id])}}"></a>
                                                <button class="btn btn-danger">Delete</button>

                                            </td>
                                            <td>
                                                <a href="{{route('quiz.show',[$quiz->id])}}"></a>
                                                <button class="btn btn-primary">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td>No Quizzes to display</td>
                                    @endelse
                                @endif
                            </thread>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
