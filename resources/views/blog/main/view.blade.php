
<article class="full">
	<div class="title">
		<h1>{{ $param['post']->title }}</h1>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span>{{ $param['post']->users->name }}</span>
		</div>
	</div>
	<div class="content">
		{!! $param['post']->content !!}
	</div>
</article>
