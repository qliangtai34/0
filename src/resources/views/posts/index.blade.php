<h1>投稿一覧</h1>
<a href="{{ route('posts.create') }}">新規作成</a>

@foreach($posts as $post)
    <div>
        <a href="{{ route('posts.show', $post) }}">{{ $post->body }}</a>
    </div>
@endforeach

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    ログアウト
</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
    @csrf
</form>
