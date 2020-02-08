@extends('layouts.master')

@section('content')
<div class="main" style="min-height: 927px;margin-top: -19px;">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$siswa->getAvatar()}}" class="img-circle" width="150px" height="150px" alt="Avatar">
										<h3 class="name">{{$siswa->nama_depan}}&nbsp{{$siswa->nama_belakang}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$siswa->mapel->count()}} <span>Mata Pelajaran</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
											<li>Agama <span>{{$siswa->agama}}</span></li>
											<li>Alamat <span>{{$siswa->alamat}}</span></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Nilai</button>
							</div>							
							<div class="profile-right">
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title">Mata Pelajaran</h3>
										</div>
										<div class="panel-body">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Kode</th>
														<th>Nama</th>
														<th>Semester</th>
														<th>Nilai</th>
													</tr>
												</thead>
												<tbody>
													@foreach($siswa->mapel as $mapel)
														<tr>
															<td>{{$mapel->kode}}</td>
															<td>{{$mapel->nama}}</td>
															<td>{{$mapel->semester}}</td>
															<td>{{$mapel->pivot->nilai}}</td>
														</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Siswa</h5>
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		        </div>
		        <div class="modal-body">
					<form action="/siswa/{{$siswa->id}}/addnilai" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
							<div class="form-group">
								<label for="exampleInputEmail1">Nilai</label>
								<input type="text" name="nilai" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" placeholder="Nilai" value="{{old('nilai')}}">
							</div>		      			
		      	    </form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		          <button type="button" class="btn btn-primary">Save changes</button>
		        </div>
		      </div>
		    </div>
		 </div>
@stop