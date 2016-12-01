@extends('layout.layout')

@section('title')
{{ $param['title'] }}
@endSection

@section('content')
<div class="wrapper" id="dashboard">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li>
				<a href="{{ route('home') }}" target="_blank">View Blog</a>
			</li>
			<li>
				<a href="{{ route('dashboard') }}">Dashboard</a>
			</li>
			<li>
				<a href="{{ route('dashboard/article') }}">Article</a>
			</li>
		</ul>
	</section>
	<section class="main">
	@if ($param['path'] == 'index')
		@include('dashboard._dashboard')
	@elseif ($param['path'] == 'article')
		@include('dashboard._article')
	@elseif ($param['path'] == 'article/create')
		@include('dashboard._article-create')
	@elseif ($param['path'] == 'article/edit')
		@include('dashboard._article-edit')
	@endif
</div>
@endSection

@push('scripts')

@endPush