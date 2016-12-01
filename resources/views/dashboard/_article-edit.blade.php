<form action="{{ route('api/dashboard/article/edit') }}" redirect="{{ route('dashboard/article') }}" method="put">
	<table style="width:100%">
		<tr>
			<td>Title</td>
			<td>
				<input type="text" class="txt" name="title" value="{{ $param['post']->title }}" placeholder="Article title ..">
			</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>
				<textarea name="content" placeholder="Your article ini here .." class="txt" id="" cols="30" rows="30">{{ $param['post']->content }}</textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn" style="height:50px;margin-top:10px;background-color: #446cbc;color:#fff;">Update</button>
				<button id="btndelete" class="btn btndelete">Delete</button>
			</td>
		</tr>
	</table>
	{{ csrf_field() }}
	<input type="hidden" value="{{ $param['id'] }}" name="id">
</form>
@push('scripts')
@include('layout._form-usercontrol')
<script type="text/javascript">
	$('button#btndelete').on('click', function (event) {
		event.preventDefault();
		var id = $('form').find('input[name=id]')[0],
			token = $('form').find('input[name=_token]')[0],
			action = $('form').attr('action'),
			redirect = $('form').attr('redirect');
		id = $(id).val();
		token = $(token).val();
		$.ajax({
			type:'post',
			url: '/api/dashboard/article/delete',
			data: {'_method': 'delete', 'id': id, '_token': token},
			beforeSend: function () {
				var confirm = window.confirm('Yakin ingin di hapus?');
				if (!confirm) {
					return false;
				}
			},
			success: function (res) {
				var data = res;
				if (typeof(res) != 'object') {
					data = JSON.parse(res);
				}
				if (data.status == 'success'){
					window.location.href = redirect;
				}
			}
		})
	});

</script>
@endPush