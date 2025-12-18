{{-- resources/views/auth/login.blade.php --}}
<form method="POST" action="/login">
    @csrf

    <div>
        <label>メール</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>パスワード</label>
        <input type="password" name="password">
        @error('password') <div>{{ $message }}</div> @enderror
    </div>

    <button type="submit">ログイン</button>
</form>
