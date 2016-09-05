@extends('layout.layout')

@section('title')
{{ $title }}
@endSection

@section('content')
@include('blog.register._register')
<center><a class="link-to" href="{{ route('login') }}">Login</a></center>
@endSection

@push('scripts')
@include('layout._form-usercontrol')
@endPush