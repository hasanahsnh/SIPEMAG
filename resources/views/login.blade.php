<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login - SIPEMAG</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/demo.min.css?1692870487') }}" rel="stylesheet"/>

    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
        body {
          font-feature-settings: "cv03", "cv04", "cv11";
          background-image: url('{{ asset('assets/css/img/bg-img.jpg') }}');
          background-size: cover;
          background-position: center;
        }

          body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color:#1E2A5E;
                opacity: 30%;
                z-index: 1;
                pointer-events: none;
              }

          body * {
              position: relative;
              z-index: 2;
              }

        .card {
          border-radius:30px;
          margin-left:20px;
          margin-right:20px;
          background-color:#EEEEEE;

        }

        .button {
          float: right;
          padding: 10px 30px;
          background-color:#1E2A5E;
          color:white;
          border-radius:50px;
          cursor:pointer;
          border:none;
          font-weight:700;
        }

       

        .form-control{
            border-radius:50px;
            background-color:#55679C;
            opacity: 30%;
        }

        .input-group-text{
            border-radius:50px;
            background-color:#55679C;
        }

        h1{
          font-size:40px;
          font-weight:700;
          padding:0 0 20px 0;
          color:#1E2A5E;
        }

        .form-label{
          padding:0 0 0 15px;
          font-weight:700;
          color:#1E2A5E;
        }

    </style>
    
  </head>
  <body  class=" d-flex flex-column">
    <script src="{{ asset('assets/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        
        <div class="card card-md">
          <div class="card-body">
            <h1 class="text-center">User Login</h1>
            <form action="./" method="get" autocomplete="off" novalidate>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="email" class="form-control"  autocomplete="off">
              </div>
              <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  autocomplete="off">
              </div>
             
              <div class="form-footer">
                <button class="button" type="submit">Login</button>
              </div>
            </form>
          </div>

        </div>
        
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1692870487') }}" defer></script>
  </body>
</html>