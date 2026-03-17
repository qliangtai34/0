<h1>編集</h1>


<form method="POST" action="{{ route('posts.update', $post) }}">
@csrf
@method('PUT')


<input name="title" value="{{ $post->title }}">
<textarea name="body">{{ $post->body }}</textarea>


<button>更新</button>
</form>