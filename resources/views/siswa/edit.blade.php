@extends('layouts.master')

@section('content')
			<h1>Edit Data Siswa</h1>
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
			<div class="main" style="margin-top: -85px;">
				<div class="main-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Siswa</h3>
								</div>
									<div class="panel-body">
										<form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
											{{csrf_field()}}
											<div class="form-group">
												<label for="exampleInputEmail1">Nama Depan</label>
												<input type="text" name="nama_depan" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Nama Belakang</label>
												<input type="text" name="nama_belakang" class="form-control" id="exampleInputNama2" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Pilih Jenis Kelamin</label>
												<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect">
													<option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
													<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
												</select>
											</div>
											<div class="form-group">
											    <label for="exampleInputPassword1">Agama</label>
											    <input type="text" name="agama" class="form-control" id="exampleInputAgama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
											</div>
											<div class="form-group">
											    <label for="exampleInputPassword1">Alamat</label>
											    <textarea type="text" name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="emailHelp" placeholder="Alamat" rows="3">{{$siswa->alamat}}</textarea>
											</div>
											<div class="form-group">
											    <label for="exampleInputPassword1">Avatar</label>
											    <input type="file" name="avatar" class="form-control"1>
											</div>
											<button type="submit" class="btn btn-warning">Update</button>
										</form>
									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
@endsection