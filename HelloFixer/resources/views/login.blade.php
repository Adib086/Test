<form action="{{ route('user.login') }}" method="POST">
    @csrf
    <input type="text" name="uname" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <button type="submit">Login</button>

    @if ($errors->has('login_error'))
        <div class="alert alert-danger">
            {{ $errors->first('login_error') }}
        </div>
    @endif
</form>
