<?php

namespace App\Http\Controllers;

use Modulus\Http\Request;

class DocumentationController extends Controller
{
  /**
   * Show documentations
   *
   * @return void
   */
  public function show(Request $request)
  {
    $versions = array_filter(
      glob(config('app.dir') . 'resources' . DS . 'docs' . DS . '*.*'), 'is_dir'
    );

    foreach($versions as $key => $version) {
      $versions[$key] = [
        'title' => basename($version),
        'hash' => '#/' . basename($version) . '/',
        'unique' => 'api-doc-' . basename($version),
        'selected' => (basename($version) == config('app.version')) ? true : false,
      ];
    }

    return view('app.docs.default', compact('versions'));
  }
}
