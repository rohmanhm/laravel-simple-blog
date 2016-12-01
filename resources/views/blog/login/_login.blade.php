<div class="wrapper" id="login">
	<form action="{{ route('api/login') }}" method="post" redirect="dashboard">
		<center><h1>Login</h1></center>
		<table>
			<tbody>
				<tr class="status">
					<td colspan="2">
						<div id="messagelog"></div>
					</td>
				</tr>
				<tr>
					<td><label for="username">Username</label></td>
					<td>
						<input type="text" class="txt" name="username" id="username" maxlength="100" placeholder="bobdoe">
					</td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td>
						<input type="password" class="txt" name="password" id="password" autocomplete="off" placeholder="Your password">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button class="btn" type="submit">Login</button>
					</td>
				</tr>
			</tbody>
		</table>
		{{ csrf_field() }}
	</form>
</div>