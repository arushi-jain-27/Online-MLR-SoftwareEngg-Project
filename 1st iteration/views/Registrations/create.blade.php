@extends ('layout')
@section ('content')
<h1> Register </h1>
<form method="POST" action="/register"> 
{{csrf_field()}}
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="form-group">
<label for="username">Username:</label>
<input type="text" class="form-control" id="username" name="username" required>
</div>
<div class="form-group">
<label for="email;">Email:</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control" id="password" name="password" required>
</div>
<div class="form-group">
<label for="password_confirmation">Password Confirmation:</label>
<input type="password" class="form-control" id="password-confirmation" name="password-confirmation" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Register</button>
</div>
</form>
@endsection