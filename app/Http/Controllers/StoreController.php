<?php

namespace App\Http\Controllers;

use App\User;

class StoreController extends Controller
{
    public function index()
    {
        // $Store = new Store();
        // $Store->name = '為你自己學php';
        // $Store->save();

        // $Cake = new Cake();

        // $cake = Cake::create(['name' => '巧克力蛋糕', 'store_id' => 3]);
        // $cake = Cake::create(['name' => '蛋糕', 'store_id' => 1]);
        // dd($cake);
        // $Cake->name = '草莓蛋糕';
        // $Cake->save();

        // dd(Store::find(1)->cakes);
        //Book->store?s
        // dd(Cake::find(6));
        // dd(Cake::first()->store); //所以取締一筆會沒資料 十一   那取id

        // $article = new Article(['title' => '為你自己學框架', 'content' => '累積是王道']);
        // User::first()->articles()->save($article);   以為這個會是id 1號~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        // User::find(7)->articles()->save($article);

        // User::find(7)->articles()->create(['title' => '為你自己學框架', 'content' => '累積是王道'],
        //     ['title' => '為你自己學框架2', 'content' => '累積是王道2']

        // );
        dd(user::find([1, 2, 3, 7]));

        // dd(Article::all());
    }

    //
}
