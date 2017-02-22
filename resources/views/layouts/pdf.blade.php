<!DOCTYPE html>
<html>
<head>
    <title>PDF Medical record export</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/pdf.css') }}"> --}}
    <style type="text/css">
        body {
          font-family: sans-serif;
        }
        .header {
          color: #383838;
          text-align: center;
          border-bottom: 2px solid #383838;
        }

        .header h1 {
          font-weight: 300;
        }

        h1 {
          padding: 0 20px; 
        }

        h1, h2, h3 {
          font-weight: normal;
        }

        #general-info {
          list-style-type: none;
        }

        #heading {
          font-size: 3em;
        }

        #heading img {
          height: 2em;
        }

        #heading #r {
          font-size: 0.3em;
          vertical-align: middle;
        }

        .panel {
          background: #fff;
          border: 1px solid #d3e0e9;
          margin: 20px;
          padding: 20px;
          max-width: 600px; 
         }

        .panel-heading {
          border-bottom: 1px solid #d3e0e9;
        }

        .table {
          width: 100%; 
        }

        textarea {
          width: 100%;
          border: 1px solid #d3e0e9;
          padding: 5px 10px; 
      }

      .general-info-section {
        width: 100%;
      }

      .general-info-section img {
        max-width: 50%;
        height: auto;
        float: left;
      }

      .clearfix {
        clear: both;
      }

    </style>

</head>
<body>

    @yield('content')

</body>
</html>