@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>
    <p>I'm a software developer and live in Cupertino, California</p>

@endsection
