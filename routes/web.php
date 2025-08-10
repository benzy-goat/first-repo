<?php

use App\Models\Hotel;
use App\Models\Image;
use App\Models\Park;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Zoo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/poly', function () {
   $user =  User::create([
        'name' => 'hi',
        'email' => 'mikel490@gmail.com',
        'password' => '00000000'
    ]);

//    $user = User::find(2);
//    $user->image()->create([
//            'url'=>'https://example.com/image.jpg'
//        ]
//    );
});

Route::get('/post', function () {
      Post::create([
        'name' => 'post1',
    ]);

    $post = Post::find(1);
    $post->image()->create([
            'url'=>'https://example.com/image.jpg'
        ]
    );
});

Route::get('all',function (){

//    $user = Tag::all();
//    $P = [];
//    foreach ($user as $park){
//        $P[] = $park->parks;
//    }

    $user = User::all();


   return $user;

});

Route::get('create',function (){

    $park = Park::create([
        'name'=>'Four_S'
    ]);
    $park->tags()->create([
        'name'=>'season_tag'
    ]);
    return response()->json(['message'=>'success']);
});

 Route::get('map',function (){

    $user = User::all()->reject(function (User $user){
       return $user->active == 0 ;
   })->map(function (User $user){
       return $user->name;
   });
    return $user;
});

 Route::get('collect',function (){
//    $mas = ['taylor','mary',null];
//  return  collect($mas)->map(function ( $name){
//       return strtoupper($name);
//    })->reject(function ($n){
//        return empty($n);
//    });

     // define a methode to use it in collection
     Collection::macro('toUpper', function () {
         return $this->map(function (string $value) {
             return Str::lower($value);
         });
     });

     $collection = collect(['FIRST', 'second']);

    return $upper = $collection->toUpper();
 });
