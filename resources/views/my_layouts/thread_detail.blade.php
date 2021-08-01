<x-come-layout>
    <div class="mb-5">
     <h3>{{$thread->title}}</h3>
    　<p>{{$thread->body}}</p>
    </div>
    <div class="text-end mb-3">
        <a href="/{thread_id}/comments" class="btn btn-outline-success">投稿一覧へ</a>
    </div>
</x-come-layout>
