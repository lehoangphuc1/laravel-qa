@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add Questions') }}</div>

                <div class="card-body">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{$question->title}}</h3>
                                {{str_limit($question->body,250)}} <!--ham gioi han ki tu hien thi-->
                            </div>
                        </div>
                    @endforeach
                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
