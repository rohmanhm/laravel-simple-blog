<script type="text/javascript">
	var btnDefaultValue = $('button[type=submit]').text();
	$('form').on('submit', function (event) {
		
		$('tr.status').removeClass('failed');
		$('tr.status').removeClass('success');
		$('tr.status').css({'display':'none'});

		$('td span').remove();
		event.preventDefault();
		var formdata = $(this).serialize(),
			url = $(this).attr('action'),
			redirect = $(this).attr('redirect'),
			method = $(this).attr('method');

		$.ajax({
			type: method,
			url: url,
			data: formdata,
			beforeSend: function () {
				$('button[type=submit]').attr('disabled', true);
				$('button[type=submit]').text('Process, Wait');
			},
			success: function (res) {
				var data = res;
				
				if (typeof(res) != 'object') {
					data = JSON.parse(res);
				}

				if (data.status == 'success') {
					setTimeout(function () {

						$('tr.status').addClass('success');
						$('#messagelog').text('Success, wait');
						$('tr.status').css({'display':'table-row'});
						$('button[type=submit]').text('Done');

						setTimeout(function () {
							window.location.href = redirect;
						}, 500)
					}, 500);
				} else {
					failed();
				}
			},
			error: function (res) {
				var log = res.responseJSON;
				for (var i in log) {
					var target = 'input[name=' + i + ']',
						td = $(target)[0].parentElement;

					var span = '<span>' + log[i][0] + '</span>';
					$(td).append(span);

					failed();
				}
			}
		})
	})

	function failed () {
		$('button[type=submit]').removeAttr('disabled');
		$('button[type=submit]').text(btnDefaultValue);

		$('tr.status').addClass('failed');
		$('#messagelog').text('Failed, try again');
		$('tr.status').css({'display':'table-row'});
	}
</script>