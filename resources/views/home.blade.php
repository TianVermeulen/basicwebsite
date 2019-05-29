@extends('layouts.app')
@section('content')
<h1>home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fuga beatae, dolorem esse quisquam quod aspernatur quibusdam at incidunt earum hic, molestias consequatur aliquid repudiandae voluptatibus. Autem odio eveniet laudantium!</p>
@endsection

@section('sidebar')
@parent
    <p>This is appended to the sidebar</p>
@endsection