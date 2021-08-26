<?php

namespace App\Http\Controllers;
use App\Models\Thread;
use Carbon\Carbon;
use App\Models\Comment;
class comeController
{
    public function getCome($thread_id){
//        $comments =Comment::get();
//       $comments = \DB::table("comments")->get();
//        $comments=\DB::table("comments")->where("thread_id",$thread_id)->get();
        $thread = Thread::where("id",$thread_id)->first();
        $comments = $thread->comments()->get();
        return view('my_layouts.list',[
        "comments" => $comments,
        "thread"=>$thread

        ]);
    }

    public function getNewCome(){
        return view('my_layouts/new');
    }

    public function postNewCome(){
        $comeData=[
            "title" =>request()->get("title"),
            "name" =>request()->get("name"),
            "body" =>request()->get("body"),
            "thread_id"=>request()->route("thread_id")
        ];
//         dd($comeData);
//        これで中身が見れる
        $comeRules=[
            "title" =>["required"],
            "name" =>["required"],
            "body" =>["required"]
        ];
        $vali = validator($comeData,$comeRules);
        // 第一引数にバリデーション対象のデータを、第２引数にルール
        if($vali->fails()){
            session()->flash("old_come",$comeData);
            session()->flash("come_error",$vali->errors()->toArray());
        //flash メソドでは、第一引数に保存するキー名、第二引数に保存するデータ
            return redirect("/{thread_id}/comment/new");
        }else{
            $comeData["date_on"]=Carbon::now();
            //$comeDataで配列で指定している。配列作ったとにアクセスするときは[]を使用する
            \DB::table("comments")->insert($comeData);
        return redirect("/".request()->route("thread_id")."/comments");
        }
    }

    public function getDeleteComeById($thread_id,$comment_id) {
        $come=\DB::table("comments")->where("id",$comment_id)->first();
        if($come){
            return view('my_layouts.delete',[
                "come"=>$come
            ]);
        } else{
            return abort(404);
        }
    }

    public function postDeleteComeById($id){
        \DB::table("comments")->where("id",$id)->delete();
        return redirect("/{thread_id}/comments");
    }


}
