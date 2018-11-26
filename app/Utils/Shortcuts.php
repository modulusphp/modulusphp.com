<?php

namespace App\Utils;

class Shortcuts
{
  /*
  |--------------------------------------------------------------------------
  | Application Shortcuts
  |--------------------------------------------------------------------------
  |
  | Application shortcuts (or underscores) are functions that are accessible
  | from anywhere in your application. In order for these functions to be
  | visible to the rest of your application, they must be declared under
  | the public scope.
  |
  */

  /**
   * Get application name
   *
   * @return string
   */
  public function name() : string
  {
    return config('app.name');
  }

  /**
   * Get application description
   *
   * @return string
   */
  public function desc() : string
  {
    return config('app.description');
  }
}
