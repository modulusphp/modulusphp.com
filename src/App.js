import React from 'react';
import carbonFour from './assets/carbon (4).png';
import carbonFive from './assets/carbon (5).png';
import './App.css';

function App() {
  return (
    <div>
      <div className="py-5 bg-secondary header">
        <div className="container">
          <div className="row">
            <div className="px-md-5 p-3 col-md-6 d-flex flex-column align-items-start justify-content-center">
              <h1 className="text-white framework-name">Modulus</h1>
              <p className="mb-3 lead text-white">Backend development made easy, a cool API framework for PHP</p>
            </div>
            <div className="col-md-6"> <img className="img-fluid d-block" src={carbonFour} alt="code"/>
            </div>
          </div>
        </div>
      </div>
      <div className="pt-5">
        <div className="container">
          <div className="row">
            <div className="col-md-12 py-3">
              <div className="py-0">
                <p align="center">
                  <img src="https://raw.githubusercontent.com/modulusphp/icons/master/assets/banner-template.png" className="main-logo" alt="Logo"/></p>
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
      <div className="text-center text-white py-4">
        <div className="container">
          <div className="row">
            <div className="col-md-8 mx-auto">
              <h1 className="mb-3 text-dark">Don't just build, extend!</h1>
              <p className="lead mb-0 text-dark">Modulus allows you to extend its code base and share your extended code with the rest of the community</p>
              <img className="img-fluid d-block mx-auto" src={carbonFive} width="750" alt="code"/>
            </div>
          </div>
        </div>
      </div>

      <div style={{ textAlign: "center", width: "100%", height: "10px" }}>
        <div style={{ borderTop: "1px solid #dee2e6 !important", width: "75%", marginLeft: "auto", marginRight: "auto"}}></div>
      </div>
      <div className="py-3 text-center">
        <div className="container">
          <div className="row">
            <div className="col-md-12 text-center">
              <h1>A framework with the right tools</h1>
            </div>
          </div>
          <div className="row justify-content-center">
            <div className="col-md-4 p-4"> <i className="d-block fa fa-circle fa-3x mb-2 text-muted"></i>
              <h4> <b>Craftsman</b></h4>
              <p>A command-line interface that makes building Modulus applications easy.</p>
            </div>
            <div className="col-md-4 p-4"> <i className="d-block fa fa-stop-circle-o fa-3x mb-2 text-muted"></i>
              <h4> <b>Shell</b></h4>
              <p>A runtime developer console, interactive debugger and REPL for Modulus.</p>
            </div>
            <div className="col-md-4 p-4"> <i className="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
              <h4><b>Laravel&nbsp;</b><b>Mix</b></h4>
              <p>An elegant wrapper around Webpack for the 80% use case.</p>
            </div>
          </div>
        </div>
      </div>
      <div className="py-3 bg-primary">
        <div className="container">
          <div className="row">
            <div className="col-md-12 text-center">
              <p className="mb-0">© 2019 Donald Pakkies. All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
