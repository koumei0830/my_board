<x-come-layout>
    <div class="mb-5">
     <h3>{{$thread->title}}</h3>
    　<p>{{$thread->body}}</p>
    </div>
    <div class="text-end mb-3">
        <a href="/{{$thread->id}}/comments" class="btn btn-outline-success">投稿一覧へ</a>
    </div>
    <div class="text-end mb-3">
        <a href="/thread/{{$thread->id}}/delete" class="btn btn-outline-success">スレッドを削除する</a>
    </div>
    <div class="text-end mb-3">
        <a href="/threads" class="btn btn-outline-success">スレッド一覧へ戻る</a>
    </div>
</x-come-layout>
