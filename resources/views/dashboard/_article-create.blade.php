<form action="{{ route('api/dashboard/article/create') }}" redirect="{{ route('dashboard/article') }}" method="post">
	<table style="width:100%">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" class="txt" name="title" placeholder="Article title ..">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" placeholder="Your article ini here .." class="txt" id="" cols="30" rows="30"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn" style="height:50px;margin-top:10px;background-color: #446cbc;color:#fff;">Post</button>
			</td>
		</tr>
	</table>
	{{ csrf_field() }}
</form>

@push('scripts')
@include('layout._form-usercontrol')
@endPush