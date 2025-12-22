<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>


<a href="{{ route('posts.edit', $post) }}">編集</a>


<form method="POST" action="{{ route('posts.destroy', $post) }}">
@csrf
@method('DELETE')
<button>削除</button>
</form>