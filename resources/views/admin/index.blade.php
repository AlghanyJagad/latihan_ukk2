@extends('layouts.app')
   
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Admin PPDB Wikrama</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<!-- Left Side Of Navbar -->
		<ul class="navbar-nav mr-auto">

		</ul>

		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
			<!-- Authentication Links -->
			@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
				@endif
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
			@endguest
		</ul>
	</div>
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="/">PPDB WIKRAMA</a></h3>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Asal Sekolah</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th width="280px">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($siswas as $siswa)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $siswa->nis }}</td>
							<td>{{ $siswa->nama }}</td>
							<td>{{ $siswa->jns_kelamin }}</td>
							<td>{{ $siswa->tempat_lahir }}</td>
							<td>{{ $siswa->tgl_lahir }}</td>
							<td>{{ $siswa->alamat }}</td>
							<td>{{ $siswa->asal_sekolah }}</td>
							<td>{{ $siswa->kelas }}</td>
							<td>{{ $siswa->jurusan }}</td>
							<td>
								<form action="{{ route('siswas.destroy',$siswa->nis) }}" method="POST">
				
									<a class="btn btn-info nav-link" href="{{ route('siswas.show',$siswa->nis) }}">Show</a>
					
									<a class="btn btn-primary nav-link" href="{{ route('siswas.edit',$siswa->nis) }}">Edit</a>
				
									@csrf
									@method('DELETE')
					
									<button type="submit" class="btn btn-danger nav-link" style="width: 100%;">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
@endsection

