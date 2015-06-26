<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="register">
    {!! csrf_field() !!}

    <div class="col-md-6">
        First Name<br>
        <input type="text" name="firstname" value="{{ old('firstname') }}">
    </div>
    <div class="col-md-6">
        Last Name<br>
        <input type="text" name="lastname" value="{{ old('lastname') }}">
    </div>

    <div>
        Email<br>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password<br>
        <input type="password" name="password">
    </div>

    <div class="col-md-6">
        Confirm Password<br>
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button  type="submit">Register</button>
    </div>
</form>