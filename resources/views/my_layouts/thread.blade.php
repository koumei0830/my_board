<x-come-layout>
  <div class="title pt-5 pb-4">
    <h3>スレッド一覧</h3>
  </div>
  <ul class="list-group list-group-flush">
       @foreach ($threads as $thread)
        <li class="list-group-item">
         <h4><a href="/thread/{{$thread->id}}">{{ $thread->title }}</a></h4>
         <p>作成日：{{$thread->created_at}}</p>
         <p>更新日：{{$thread->updated_at}}</p>
        </li>
       @endforeach
  </ul>
  <div class="my-3">
    <h3>新規スレッド作成</h3>
    <form method="post">
      @csrf
        <div class="my-3">
         <label for="title" class="form-label">タイトル</label>
         <input type="text" class="form-control" name="title" value="{{session()->get("old_thre.title")}}">
         @if (session()->get("thre_errors.title"))
           <p class="text-warning">タイトルを入力してください</p>
         @endif
        </div>
        <div class="my-3">
         <label for="body" class="form-label">内容</label>
         <textarea class="form-control" name="body" row="5" placeholder="投稿して欲しい内容を簡単にご記入ください">{{session()->get("old_thre.body")}}</textarea>
         @if(session()->get("thre_errors.body"))
           <p class="text-warning">内容を入力してください</p>
         @endif
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-outline-success my-3">作成</button>
    </form>
  </div>
</x-come-layout>