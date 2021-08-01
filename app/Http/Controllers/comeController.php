<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
class comeController
{
    public function getCome(){
        $comments = \DB::table("comments")->get();
        return view('my_layouts.list',[
        "comments" => $comments
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
            return redirect("/comment/new");
        }else{
            $comeData["date_on"]=Carbon::now();
            //$comeDataで配列で指定している。配列作ったとにアクセスするときは[]を使用する
            \DB::table("comments")->insert($comeData);
        return redirect("/comments");
        }
    }

    public function getDeleteComeById($id) {
        $come=\DB::table("comments")->where("id",$id)->first();
        return view('my_layouts.delete',[
            "come"=>$come
        ]);

    }

    public function postDeleteComeById($id){
        \DB::table("comments")->where("id",$id)->delete();
        return redirect("/comments");
    }


}
