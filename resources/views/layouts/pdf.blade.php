<!DOCTYPE html>
<html>
<head>
    <title>PDF Medical record export</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/pdf.css') }}"> --}}
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
        body {
          font-family: "Raleway", sans-serif; 
        }

        h1 {
          padding: 0 20px; 
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
            padding: 0 20px; 
          }

        .table {
          width: 100%; 
        }

        textarea {
          width: 100%;
          border: 1px solid #d3e0e9;
          padding: 5px 10px; 
      }

    </style>

</head>
<body>

    @yield('content')

</body>
</html>