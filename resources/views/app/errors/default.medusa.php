{% using('layouts.app') %}

{% section('title') %}

  {{ $title }}

{% endsection %}

{% section('main') %}


  <div class="pt-5 text-white bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left text-center align-self-center my-5">
            <h1 class="">{{ fn('name') }}</h1>
            <p class="lead">{{ fn('desc') }}</p>
            <a class="btn btn-light" href="https://github.com/modulusphp">Source Code</a>
            <a class="btn btn-light" href="/">Home</a>
          </div>
          <div class="col-md-6">
            <div class="__container">
              <div class="top">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
              <div class="__content">
                <pre><code class="language-php __php">class ErrorController extends Controller
{
  public function handle(Request $request)
  {
    return view('errors.{{ $statusCode }}');
  }
}


  </code></pre> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="">{{ $message }}</h1>
          </div>
        </div>
      </div>
    </div>

{% endsection %}
