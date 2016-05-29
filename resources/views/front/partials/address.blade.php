{{ Form::open(array('class' => 'form-horizontal')) }}
    <fieldset>
      <legend>Address</legend>
			<div class="form-group">
			    {{ Form::label('firstname', 'Firstname', array('class' => 'col-md-4 control-label')) }}
			    <div class="col-md-4">
			      {{ Form::text('firstname', null, array('class' => 'form-control input-md', 'id' => 'firstname')) }}
			    </div>
			</div>

			<div class="form-group">
			  {{ Form::label('lastname', 'Lastname', array('class' => 'col-md-4 control-label')) }}
			  <div class="col-md-4">
				{{ Form::text('lastname', null, array('class' => 'form-control input-md', 'id' => 'lastname')) }}
			  </div>
			</div>

			<div class="form-group">
			  {{ Form::label('address', 'Address', array('class' => 'col-md-4 control-label')) }}
			  <div class="col-md-4">
			  {{ Form::text('address', null, array('class' => 'form-control input-md', 'id' => 'address')) }}
			  </div>
			</div>
			
			<div class="form-group">
				{{ Form::label('postcode', 'Postcode', array('class' => 'col-md-4 control-label')) }}
				<div class="col-md-4">
					{{ Form::text('postcode', null, array('class' => 'form-control input-md', 'id' => 'postcode')) }}
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('city', 'City', array('class' => 'col-md-4 control-label')) }}
				<div class="col-md-4">
					{{ Form::text('city', null, array('class' => 'form-control input-md', 'id' => 'city')) }}
				</div>
			</div>
	</fieldset>
{{ Form::close() }}