<x-come-layout>
    <div class="title pt-5 pb-4">
        <h3>投稿一覧</h3>
    </div>
    <ul class="list-group list-group-flush">
       @foreach ($comments as $comment)
        <li class="list-group-item">
        <h4><a href="/comment/{{$comment->id}}/delete">{{ $comment->title }}</a></h4>
        <p>投稿者：{{$comment->name}}</p>
        <p>{{$comment->date_on}}</p>
        <p>{{$comment->body}}</p>
        </li>
       @endforeach
    </ul>
    <div class="text-end mb-3">
        <a href="{thread_id}/comment/new" class="btn btn-outline-success">新規作成</a>
    </div>
</x-come-layout>
