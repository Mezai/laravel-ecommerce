<div class="form-group">
  		{!! Form::label('name', 'Name:') !!}
  		{!! Form::text('name', null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
  		{!! Form::label('username', 'Username:') !!}
  		{!! Form::text('username', null, ['class' => 'form-control']) !!}	
 </div>

 <div class="form-group">
  		{!! Form::label('email', 'Email:') !!}
  		{!! Form::text('email', null, ['class' => 'form-control']) !!}	
 </div>

 <div class="form-group">
  		{!! Form::label('password', 'Password:') !!}
  		{!! Form::text('password', null, ['class' => 'form-control']) !!}	
 </div>

 <div class="form-group">
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
 </div>