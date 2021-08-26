<x-come-layout>
<div class="title pt-5 pb-4">
  <h3>スレッドの削除</h3>
</div>

 <div class="mb-3">
   <label for="title" class="form-label">タイトル</label>
   <p>{{$thread->title}}</p>
 </div>
 <div class="mb-3">
   <label for="body" class="form-label">内容</label>
   <p>{{$thread->body}}</p>
 </div>

 <form method="post">
 @csrf
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
       <input type="submit" class="btn btn-outline-success mb-3" value="削除"></input>
       <a href="/threads" class="btn btn-outline-success mb-3">やっぱりやめる</a>
    </div>
  </form>

</x-come-layout>
