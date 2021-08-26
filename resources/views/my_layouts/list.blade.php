<x-come-layout>
    <div class="title pt-5 pb-4">
        <h3>{{$thread->title}}</h3>
        　<p>{{$thread->body}}</p>
    </div>
    <div class="title pt-5 pb-4">
        <h3>投稿一覧</h3>
    </div>
    @if(count($comments)!==0)
    <ul class="list-group list-group-flush">
       @foreach ($comments as $comment)
        <li class="list-group-item">
        <h4><a href="/{{request()->route("thread_id")}}/comment/{{$comment->id}}/delete">{{ $comment->title }}</a></h4>
        <p>投稿者：{{$comment->name}}</p>
        <p>{{$comment->date_on}}</p>
        <p>{{$comment->body}}</p>
        </li>
       @endforeach
    </ul>
    @else
     <p>まだコメントが投稿されていません</p>
    @endif
    <div class="text-end mb-3">
        <a href="/{{request()->route("thread_id")}}/comment/new" class="btn btn-outline-success">新規作成</a>
    </div>
    <div class="text-end mb-3">
        <a href="/threads" class="btn btn-outline-success">スレッド一覧へ戻る</a>
    </div>
</x-come-layout>
