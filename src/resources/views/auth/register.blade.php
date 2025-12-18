<h1>会員登録</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label>名前</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <label>Password（確認）</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit">登録</button>
</form>
