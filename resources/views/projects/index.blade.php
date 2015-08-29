@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
   {{-- @parent--}}

   <h2>Projects</h2>

   @if ( !$projects->count() )
       You have no projects
   @else
       <ul>
           @foreach( $projects as $project )
               <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
           @endforeach
       </ul>
   @endif
@stop

@section('content')
    {{-- View content --}}
@stop