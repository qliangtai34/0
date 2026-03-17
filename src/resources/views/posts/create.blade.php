<h1>新規投稿</h1>


<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <input type="text" name="title" placeholder="タイトル">
    <textarea name="body"></textarea>

    <label>タグ</label><br>
@foreach ($tags as $tag)
    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
    {{ $tag->name }}
@endforeach

    <button type="submit">投稿</button>
</form>
