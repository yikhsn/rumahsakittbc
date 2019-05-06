<h1>Sign In</h1>

<form method="post" action="/login">
    
    {{ csrf_field() }}

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <button type="submit">Submit</button>
</form>