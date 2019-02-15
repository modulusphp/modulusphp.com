{% using('layouts.app') %}

{% section('title') %}

  Welcome

{% endsection %}

{% section('main') %}

  <div class="pt-5 text-white bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left text-center align-self-center my-5">
            <h1 class="">{{ fn('name') }}</h1>
            <p class="lead">{{ fn('desc') }}</p>
            <a class="btn btn-light" href="/docs">Documentation</a>
            <p class="">version 1.9.*</p>
          </div>
          <div class="col-md-6">
            <div class="__container">
              <div class="top">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
              <div class="__content">
                <pre><code class="language-php __php">&lt;?php

// url arguments
Route::post('/song/{id}/edit', 'SongController@edit');

// grouped routes
Route::group(['prefix' =&gt; '/blog'], function() {
	Route::get('/post/{id}', 'PostController@showPost');
});

// domain routing
Route::get('/', function() {
	view('docs');
})->domain('docs.modulusphp.com');


</code></pre> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-5 order-2 order-md-1">
            <div class="__container">
              <div class="top">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
              <div class="__content">
                <pre><code class="language-php __code">class ApiController extends Controller
{
	public function details(Request $request) : Rest
	{
		return Rest::response()
			-&gt;json([
				'name'	=&gt; 'Donald',
				'age'   =&gt; 20
			], 200);
	}
}

</code></pre> </div>
            </div>
          </div>
          <div class="order-1 order-md-2 col-md-7 col-md-6 text-md-left text-center align-self-center my-5">
            <h3>Building RESTful API's has never been easier</h3>
            <p class="my-3">Build powerful elagent API's with modulusPHP's REST class.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="order-2 order-md-1 col-md-6">
            <div class="__container">
              <div class="top">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
              <div class="__content">
                <pre><code class="language-php __code">class PostController extends Controller
{
	/**
	 * Route::get('/post/{id}', 'PostController@show');
	 *
 	 * Will return a blog post with the specified {id}
	 */
	public function show(Post $post)
	{
		return view('blog.post', compact('post'));
	}
}

</code></pre> </div>
            </div>
          </div>
          <div class="col-md-6 text-md-left text-center align-self-center my-5">
            <h3>Route Model Binding</h3>
            <p class="my-3">Write cleaner code with modulusPHP's Route Model Binding</p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-5 order-2 order-md-1">
            <div class="__container">
              <div class="top">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
              <div class="__content">
                <pre><code class="language-php __code">&lt;?php

Route::group(['domain' => '{user}.example.com'], function () {

    Route::get('/', function ($user) {

        view('profile', compact('user'));

    })->middleware('user.exists');

    Route::get('/pictures', 'UserController@pictures');

    Route::get('/posts', 'UserController@posts');

});

</code></pre> </div>
            </div>
          </div>
          <div class="order-1 order-md-2 col-md-7 col-md-6 text-md-left text-center align-self-center my-5">
            <h3>Domain routing made easy</h3>
            <p class="my-3">Build multiple sites in 1 project.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="__footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
            <p class="text-light">© Copyright 2018 Modulus
          </div>
        </div>
      </div>
    </div>

{% endsection %}
