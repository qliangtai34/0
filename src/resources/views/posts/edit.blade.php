<h1>編集</h1>


<form method="POST" action="{{ route('posts.update', $post) }}">
@csrf
@method('PUT')


<input name="大垣" value="{{ $post->body }}">
<textarea name="四日市">{{ $post->body }}</textarea>


<button>更新</button>
</form>