
{!! Form::label('privacy', 'Privacy', ['class' => 'control-label']) !!}
{!! Form::select('privacy', ['Anonymous'=> 'Anonymous', 'Raw'=> 'Raw'], null, ['class' => 'form-control', 'required' => 'required']) !!}

{!! Form::label('type', 'Type', ['class' => 'control-label']) !!}
{!! Form::select('type', ['Audio'=> 'Audio', 'Video'=> 'Video'], null, ['class' => 'form-control', 'required' => 'required']) !!}

{!! Form::label('number', 'Number', ['class' => 'control-label']) !!}
{!! Form::select('number', ['3'=> '3','4'=> '4','5'=> '5','6'=> '6','7'=> '7','8'=> '8','9'=> '9','10'=> '10','11'=> '11','12'=> '12','13'=> '13','14'=> '14','15'=> '15','16'=> '16','17'=> '17','18'=> '18','19'=> '19','20'=> '20'], null, ['class' => 'form-control', 'required' => 'required']) !!}

{!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary form-margin']) !!}
