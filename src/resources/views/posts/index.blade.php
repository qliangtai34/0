<h1>投稿一覧</h1>
<a href="{{ route('posts.create') }}">新規作成</a>

<form method="GET" action="{{ route('posts.index') }}">
    <input
        type="text"
        name="keyword"
        value="{{ request('keyword') }}"
        placeholder="キーワード検索"
    >
    <button type="submit">検索</button>
</form>

@foreach ($posts as $post)
    <article>
       {{ $post->title }}
        <a href="{{ route('posts.show', $post) }}">{{ $post->body }}</a>
        <div>@foreach ($post->tags as $tag)
                <span>#{{ $tag->name }}</span>
            @endforeach</div>
        <small>投稿者：{{ $post->user->name }}</small>
    </article>
@endforeach



<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    ログアウト
</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
    @csrf
</form>
