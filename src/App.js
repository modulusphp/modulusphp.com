import React from 'react';
import carbonFour from './assets/carbon (4).png';
import carbonFive from './assets/carbon (5).png';
import './App.css';

function App() {
  return (
    <div>
      <div className="py-5 bg-secondary header">
        <div class="container">
          <div class="row">
            <div class="px-md-5 p-3 col-md-6 d-flex flex-column align-items-start justify-content-center">
              <h1 class="text-white framework-name">Modulus</h1>
              <p class="mb-3 lead text-white">Backend development made easy, a cool API framework for PHP</p>
            </div>
            <div class="col-md-6"> <img class="img-fluid d-block" src={carbonFour} alt="code"/>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 py-3">
              <div class="py-0">
                <p align="center">
                  <img src="https://raw.githubusercontent.com/modulusphp/icons/master/assets/banner-template.png" alt="Logo" width="450px"/></p>
                <p align="center">
                  <a href="https://packagist.org/packages/modulusphp/framework"><img src="https://poser.pugx.org/modulusphp/framework/d/total.svg" alt="Total Downloads"/></a>
                  <a href="https://packagist.org/packages/modulusphp/framework"><img src="https://poser.pugx.org/modulusphp/framework/v/stable.svg" alt="Latest Stable Version"/></a>
                  <a href="https://packagist.org/packages/modulusphp/framework"><img src="https://poser.pugx.org/modulusphp/framework/license.svg" alt="License"/></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style={{ textAlign: "center", width: "100%", height: "10px" }}>
        <div style={{ borderTop: "1px solid #dee2e6 !important", width: "75%", marginLeft: "auto", marginRight: "auto"}}></div>
      </div>
      <div class="text-center text-white py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <h1 class="mb-3 text-dark">Don't just build, extend!</h1>
              <p class="lead mb-0 text-dark">Modulus allows you to extend its code base and share your extended code with the rest of the community</p>
              <img class="img-fluid d-block mx-auto" src={carbonFive} width="750" alt="code"/>
            </div>
          </div>
        </div>
      </div>

      <div style={{ textAlign: "center", width: "100%", height: "10px" }}>
        <div style={{ borderTop: "1px solid #dee2e6 !important", width: "75%", marginLeft: "auto", marginRight: "auto"}}></div>
      </div>
      <div class="py-3 text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1>A framework with the right tools</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 p-4"> <i class="d-block fa fa-circle fa-3x mb-2 text-muted"></i>
              <h4> <b>Craftsman</b></h4>
              <p>A command-line interface that makes building Modulus applications easy.</p>
            </div>
            <div class="col-md-4 col-6 p-4"> <i class="d-block fa fa-stop-circle-o fa-3x mb-2 text-muted"></i>
              <h4> <b>Shell</b></h4>
              <p>A runtime developer console, interactive debugger and REPL for Modulus.</p>
            </div>
            <div class="col-md-4 col-6 p-4"> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
              <h4><b>Laravel&nbsp;</b><b>Mix</b></h4>
              <p>An elegant wrapper around Webpack for the 80% use case.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="py-3 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="mb-0">© 2019 Donald Pakkies. All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
