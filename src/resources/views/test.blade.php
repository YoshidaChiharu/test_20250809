@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
@endsection

@section('content')
<div class="container">
    <div>テストページ</div>
    <div>test_branch_04_add_text</div>

    <x-test_component_01></x-test_component_01>
</div>
@endsection