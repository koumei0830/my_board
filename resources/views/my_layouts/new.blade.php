<x-come-layout>
<div class="title pt-5 pb-4">
  <h3>新規投稿</h3>
</div>
<div class="mb-5">
<form method="post">
 @csrf
 <div class="mb-3">
   <label for="title" class="form-label">タイトル</label>
   <input type="text" class="form-control" name="title" value="{{session()->get("old_come.title")}}">
   @if (session()->get("come_error.title"))
    <p class="text-warning">タイトルを入力してください</p>
   @endif
 </div>
 <div class="mb-3">
   <label for="name" class="form-label">名前</label>
   <input type="text" class="form-control" name="name" value="{{session()->get("old_come.name")}}">
   @if (session()->get("come_error.name"))
    <p class="text-warning">名前を入力してください</p>
   @endif
 </div>
 <div class="mb-3">
   <label for="body" class="form-label">内容</label>
   <textarea class="form-control" name="body" rows="5">{{session()->get("old_come.body")}}</textarea>
   @if (session()->get("come_error.body"))
    <p class="text-warning">投稿内容を入力してください</p>
   @endif
 </div>
 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 <button type="submit" class="btn btn-outline-success mb-3">作成</button>
 </div>

</form>
</div>

</x-come-layout>