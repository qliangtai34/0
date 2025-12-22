<h1>新規投稿</h1>


<form method="POST" action="{{ route('posts.store') }}">
@csrf


<input name="名古屋" placeholder="タイトル">
<textarea name="多治見"></textarea>


<button>保存</button>
</form>