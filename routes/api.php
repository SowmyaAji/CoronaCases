<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Corona;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('coronas', function() {
    return Corona::all();
});

Route::get('coronas/{id}', function($id) {
    return Corona::find($id);
});

Route::get('coronas', 'CoronaController@index');
Route::get('coronas/{id}', 'CoronaController@show');

// code for setting all of it through API endpoints 

// Route::post('coronas/create', function(Request $request) {
//     return Corona::create($request->all);
// });

// Route::put('coronas{id}', function(Request $request, $id) {
//     $corona = Corona::findOrFail($id);
//     $corona->update($request->all());

//     return $corona;
// });

// Route::delete('coronas/{id}', function($id) {
//     Corona::find($id)->delete();
//     return 204;
// });


// Route::post('coronas/create', 'CoronaController@store');
// Route::put('coronas/{id}', 'CoronaController@update');
// Route::delete('coronas/{id}', 'CoronaController@delete');

// the CoronaController.php file should change like this example:
// class ArticleController extends Controller
// {
//     public function index()
//     {
//         return Article::all();
//     }

//     public function show(Article $article)
//     {
//         return $article;
//     }

//     public function store(Request $request)
//     {
//         $article = Article::create($request->all());

//         return response()->json($article, 201);
//     }

//     public function update(Request $request, Article $article)
//     {
//         $article->update($request->all());

//         return response()->json($article, 200);
//     }

//     public function delete(Article $article)
//     {
//         $article->delete();

//         return response()->json(null, 204);
//     }
// }