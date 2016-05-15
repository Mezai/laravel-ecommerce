<div class="form-group">
  		{!! Form::label('title', 'Title:') !!}
  		{!! Form::text('title', null, ['class' => 'form-control']) !!}	

  	</div>

  	<div class="form-group">
  	  	{!! Form::label('active', 'Active:') !!}
         <div class="make-switch">
  		    {!! Form::checkbox('active', 1, null, ['class' => 'form-control']) !!}
          </div>
  	</div>

    <div class="form-group">
      {!! Form::label('image', 'Image') !!}

      {!! Form::file('image', null) !!}
    </div>

    <div class="form-group">
      {!! Form::label('price', 'Price:') !!}
      {!! Form::text('price', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('reference', 'Reference:') !!}
      {!! Form::text('reference', null, ['class' => 'form-control']) !!}

    </div>

  	<div class="form-group">
  		{!! Form::label('description', 'Description:') !!}

  		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

  	</div>

    <div class="form-group">
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>