@extends('layouts.master')

@section('content')

        <div class="portfolio-body" style="transition: background-color 0.5s ease-in-out;">
            <main-header></main-header>
            <portfolio-cover></portfolio-cover>
            <portfolio-files :data="{{$portfolio}}"></portfolio-files>
            <main-footer></main-footer>
        </div>

@stop
