
{{ Form::open(['url'=>'users/create', 'class'=>'form form-signup']) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li><div class="alert alert-danger" role="alert">{{ $error }}</div></li>
        @endforeach
    </ul>

    <div class="form-group">
        {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}     
    </div>

    <div class="form-group">
        {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
    </div>

    <div class="form-group">
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>

    <div class="form-group">
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    </div>

    <div class="form-group">
        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
    </div>

 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
