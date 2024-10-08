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
          background-image: url('{{ asset('assets/img/login/bg-img.jpg') }}');
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
                background-color:white;
                opacity: 90%;
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

        h1{
          color:grey;
          text-align:center;
          padding:50px 0 0 10px;
          font-weight:700;
          font-size:100px;
        }

        h2{
          color:grey;
          text-align:center;
          padding:30px 0 5px 0;
          font-weight:700;
          font-size:30px;
        }
        h4{
          color:grey;
          text-align:center;
          font-size:15px;
        }

       

    </style>
    
  </head>
  <body  class=" d-flex flex-column">
    <script src="{{ asset('assets/js/demo-theme.min.js?1692870487') }}"></script>
    <!-- Code Here -->
    <div class="page page-center">
      <div class="container ">
            <h1>404</h1>
            <h2>Not Found</h2>
            <h4>The resource requested could not be found on this server</h4>
            <button id="backButton" onclick="goBack()">Kembali</button>
      </div>
    </div>

    <!-- Back Button -->
    <script>
        function goBack() {
          window.history.back(); // Mengembalikan pengguna ke halaman sebelumnya
      }
    </script>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1692870487') }}" defer></script>
  </body>
</html>