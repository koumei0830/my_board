<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
class threController
{
    public function getThread(){
        $threads=\DB::table('threads')->get();
        return view('my_layouts/thread',[
            "threads"=>$threads
        ]);
    }

    public function postThread(){
        $threData=[
            "title"=>request()->get("title"),
            "body"=>request()->get("body")
        ];
        // dd($threData);
        $threRules=[
            "title"=>["required"],
            "body"=>["required"]
        ];
        $t_vali=validator($threData,$threRules);
          if($t_vali->fails()){
              session()->flash("old_thre",$threData);
              session()->flash("thre_errors",$t_vali->errors()->toArray());
            //   flash:第一引数は保存するキー名、第二引数は保存するデータ
              return redirect("/threads");
          }else{
               $threData["created_at"]=Carbon::now();
               $threData["updated_at"]=Carbon::now();
               \DB::table('threads')->insert($threData);
                  return redirect("/threads");
          }
    }

    public function getThreadById($id){
        $thread=\DB::table('threads')->where("id",$id)->first();
        return view('my_layouts.thread_detail',[
            "thread"=>$thread
        ]);
    }

}