@extends('layouts.app')
@section('title')
genres
@endsection
@section('main_content')
<div class="main_container">
   <h1>Genres</h1>
   {{dd($genres)}}
</div>
@endsection