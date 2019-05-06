<h1>Register</h1>

<form method="post" action="/register">
    
    {{ csrf_field() }}

    <div>
        <label for="password">Nama Lengkap</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_confirmation">Confirmed Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <button type="submit">Submit</button>
</form>