@foreach($param['posts'] as $post)
<article>
	<div class="title">
		<a href="view/{{ $post->id }}">
			<h1>{{ $post->title }}</h1>
		</a>
	</div>
	<div class="detail">
		<div class="author">
			Author : <span>{{ $post->users->name }}</span>
		</div>
	</div>
	<div class="content">
		{!! str_limit($post->content, 350) !!}
	</div>
</article>
@endForeach