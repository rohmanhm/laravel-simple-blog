<h1 class="greeting">Selamat Datang, {{ Auth::user()->username }}</h1>
	<table class="data">
		<tbody>
			<tr>
				<td>Nama</td>
				<td>{{ Auth::user()->name }}</td>
			</tr>
			<tr>
				<td>Usename</td>
				<td>{{ Auth::user()->username }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ Auth::user()->email }}</td>
			</tr>
			<tr>
				<td>Total Post</td>
				<td>{{ $param['count_posts'] }}</td>
			</tr>
		</tbody>
	</table>

	<a style="color:inherit;" href="{{ route('logout') }}"><button class="btn btndelete">Logout</button></a>
</section>