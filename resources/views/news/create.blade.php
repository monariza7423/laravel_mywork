@include('header')
<h1>NEWS作成</h1>
<form method="post" action="{{ route('news.store')}}">
@csrf
  <label for="title">タイトル</label>
  <input type="text" id="title" name="title">

  <label for="text">文章</label>
  <input type="text" id="text" name="text">

  <label for="avatar">画像</label>
  <input type="file" name="avatar">

  <button>投稿</button>
</form>
@include('footer')