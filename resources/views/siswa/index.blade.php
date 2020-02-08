@extends('layouts.master')

@section('content')
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
			<div class="main" style="margin-top: -1%;">
				<div class="main-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title"><b>DATA SISWA</b></h3>
									</div>

									<div class="panel-body">
										<table class=" table table-hover">	
											<thead>
												<tr>
													<th>Nama Depan</th>
													<th>Nama Belakang</th>
													<th>Jenis Kelamin</th>
													<th>Agama</th>
													<th>Alamat</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data_siswa as $siswa)
												<tr>
													<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
													<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
													<td>{{$siswa->jenis_kelamin}}</td>
													<td>{{$siswa->agama}}</td>
													<td>{{$siswa->alamat}}</td>
													<td>
														<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
														<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda ingin menghapus?')">Hapus</a>
													</td>
												</tr>
												@endforeach												
											</tbody>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary"style="margin-left: 74%" data-toggle="modal" data-target="#exampleModal">
												  Tambah Data Siswa
												</button>

												<!-- Modal -->
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												          <span aria-hidden="true">&times;</span>
												        </button>
												      </div>
												      <div class="modal-body">
														<form action="/siswa/create" method="POST" enctype="multipart/form-data">
															{{csrf_field()}}
														  <div class="form-group">
														    <label for="exampleInputEmail1">Nama Depan</label>
														    <input type="text" name="nama_depan" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nama_depan')}}">
														  </div>
														  <div class="form-group {{$errors->has('nama_belakang')?'has-error':''}}">
														    <label for="exampleInputPassword1">Nama Belakang</label>
														    <input type="text" name="nama_belakang" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{old('nama_belakang')}}" >
														    @if($errors->has('nama_belakang'))
														    	<span class="help-block">{{$errors->first('nama_belakang')}}</span>
														    @endif
														  </div>
														  <div class="form-group {{$errors->has('email')?'has-error':''}}">
														    <label for="exampleInputPassword1">Email</label>
														    <input type="email" name="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
														    @if($errors->has('email'))
														    	<span class="help-block">{{$errors->first('email')}}</span>
														    @endif
														  </div>														  
														  <div class="form-group {{$errors->has('jenis_kelamin')?'has-error':''}}">
														    <label for="exampleInputPassword1">Pilih Jenis Kelamin</label>
														    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect">
														    	<option value="L"{{(old('jenis_kelamin') == 'L') ? 'selected' :''}}>Laki-Laki</option>
														    	<option value="P"{{(old('jenis_kelamin') == 'P') ? 'selected' :''}}>Perempuan</option>
														    </select>
														    @if($errors->has('jenis_kelamin'))
														    	<span class="help-block">{{$errors->first('nama_belakang')}}</span>
														    @endif
														  </div>
														  <div class="form-group {{$errors->has('agama')?'has-error':''}}">
														    <label for="exampleInputPassword1">Agama</label>
														    <input type="text" name="agama" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Agama" value="{{old('agama')}}">
														    @if($errors->has('agama'))
														    	<span class="help-block">{{$errors->first('nama_belakang')}}</span>
														    @endif
														  </div>
														  <div class="form-group">
														    <label for="exampleInputPassword1">Alamat</label>
														    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Alamat" value="{{old('alamat')}}"> 
														  </div>
														  <div class="form-group {{$errors->has('avatar')?'has-error':''}}">
														    <label for="exampleInputPassword1">Avatar</label>
														    <input type="file" name="avatar" class="form-control"> 
														    @if($errors->has('avatar'))
														    	<span class="help-block">{{$errors->first('avatar')}}</span>
														    @endif														    
														  </div>
												          <div class="modal-footer">
												        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												        	<button type="submit" class="btn btn-primary">Submit</button>
												          </div>
												        </form> 
												      </div>
												  </div>
												</div>		
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
