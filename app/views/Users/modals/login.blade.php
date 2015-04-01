
<!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#login">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
       	{{ Form::open(array('route' => 'sessions.store')) }}
				<!-- email -->
		<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class'=>'form-control']) }}
		</div>

				<!-- password -->
		<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', null, ['class'=>'form-control']) }}
		</div>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
<!-- Modal Ends -->