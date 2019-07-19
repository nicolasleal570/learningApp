@extends('layouts.app')

@section('jumbotron')
    @include('partials.courses.jumbotron')
@endsection

@section('content')
    
    <div class="container">
        {{-- GOALS AND REQUIREMENTS --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                @include('partials.courses.requirements', ['requirements' => $course->requirements])
            </div>
            <div class="col-md-6">
                @include('partials.courses.goals', ['goals' => $course->goals])
            </div>
        </div>

        <hr />

        {{-- COURSE DESCRIPTION --}}
        @include('partials.courses.description')

        <hr />
        
        {{-- RELATED COURSES --}}
        @include('partials.courses.related')
        
        <hr />
    </div>
    
@endsection