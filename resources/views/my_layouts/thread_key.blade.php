<x-come-layout>
    <div class="title pt-3 pb-4">
        <h3>スレッド検索</h3>
    </div>
    <form class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="キーワード" >
        <button class="btn btn-outline-success" type="submit" >検索</button>
    </form>
    <div class="my-3">
        @if(count($threads_keywords)!==0){
         <p>こちらのテーマが検索できました</p>
         <ul class="list-group list-group-flush">
          @foreach ($thread_keywords as $thread_keyword)
            <li class="list-group-item">
                <p>{{$thread_keyword->title}}</p>
            </li>
          </ul>
          @endforeach
        }else{
            <p>検索結果が見つかりませんでした</p>
            }
        @endif
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/threads" class="btn btn-outline-success my-3">戻る</button>
    </div>
</x-come-layout>
