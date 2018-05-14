@extends('master')

@section('content')
    <div id="body">
        <div style="display: inline-block">
            <h3>User Master</h3>
        </div>
        <div id="divbutton" style="display: inline-block">
        	<div class="buttonmenu" style="display: inline-block">
        		<a id="save" class="glyphicon glyphicon-ok-sign" onclick="loadForm()"></a>
				<span>Save</span>
			</div>
        	<div class="buttonmenu" style="display: inline-block">
        		<a href="{{ url('/delete/{$user->user_cd}') }}" class="glyphicon glyphicon-remove-sign"></a>
				<span>Delete</span>
			</div>
			<div class="buttonmenu" style="display: inline-block">
				<a onclick="reset()" class="glyphicon glyphicon-plus-sign"></a>
				<span>Add</span>
			</div>
			<div class="buttonmenu" style="display: inline-block">
				<a href="{{ url('/searchuser') }}" class="glyphicon glyphicon-share-alt"></a>
				<span>Back</span>
			</div>
			{{-- <div class="buttonmenu" style="display: inline-block">
				<a href="{{ url('/data') }}"><img class="icon" src="Image/report-icon.gif"></a>
				<span>Reset</span>
			</div> --}}
        </div>
    </div>
    <div>
      	@if ($errors->any())
	        <div class="alert alert-danger">
	          	<ul>
	            	@foreach ($errors->all() as $error)
	            	<li>{{ $error }}</li>
	            @endforeach
	          	</ul>
	        </div>
      	@endif
    </div>
	<form id="myform" action="{{ url('/save') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="userid">User ID</label>
			<input type="text" id="userid" name="userid" size="40" onblur="refer()" value="">
		</div>
		<div class="form-group">
			<label for="shortname">Short Name</label>
			<input type="text" id="shortname" name="shortname" size="60" value="">
		</div>
		<div class="form-group">
			<label for="kataname">Kata Name</label>
			<input type="text" id="kataname" name="kataname" size="80" value="">
		</div>
		<div class="form-group">
			<label for="fullname">Full Name</label>
			<input type="text" id="fullname" name="fullname" size="80" value="">
		</div>
		<div class="form-group">
			<label for="birthday">Birth Day</label>
			<input type="date" id="birthday" name="birthday" value="">

			<label for="gender">Gender</label>
			<select id="gender" name="gender">
				@foreach($libs as $lib)
					<option value="{{ $lib->name }}" id="gend">{{ $lib->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" id="address" name="address" size="116" value="">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" size="60" value="">
		</div>
		<div class="form-group">
			<label for="note">Note</label>
			<textarea id="note" name="note" style="width: 850px; height: 200px"></textarea value="">
		</div>

		<div class="form-group" id="avatar">
			<input type="file" id="fileimg" name="fileimg" onchange="loadimg()">
			<img id="imgavatar">
			{{-- <img id="avatar" src="Image/report-icon.gif"> --}}
		</div>
	</form>
@endsection