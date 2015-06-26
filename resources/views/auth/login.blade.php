<!-- resources/views/auth/login.blade.php -->



<form method="POST" action="login" class="form-horizontal">
    {!! csrf_field() !!}

   <div class="form-group">
       <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>