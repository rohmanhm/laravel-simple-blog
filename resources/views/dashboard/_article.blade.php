<ul class="navigate">
	<li>
		<a href="{{ route('dashboard/article/create') }}">New Article</a>
	</li>
</ul>

<div class="list-data">
	@if (!empty($param['posts']))
	<table class="data">
		<tbody>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
			@foreach($param['posts'] as $post)
			<tr>
				<td>{{ str_limit($post->title, 100) }}</td>
				<td>{!! str_limit($post->content, 150) !!}</td>
				<td>{{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</td>
				<td>
					<a href="{{ route('dashboard/article') }}/edit/{{ $post->id }}">Edit</a>
				</td>
			</tr>
			@endForeach
		</tbody>
	</table>
	@else
	<span>Tidak ada data</span>
	@endif
</div>