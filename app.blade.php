<html>
    <head>
        <title>SillyBot - @yield('title')</title>
      <style>
        body{
          background: rgba(226,226,226,1);
          background: -moz-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 17%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%);
          background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(226,226,226,1)), color-stop(17%, rgba(219,219,219,1)), color-stop(51%, rgba(209,209,209,1)), color-stop(100%, rgba(254,254,254,1)));
          background: -webkit-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 17%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%);
          background: -o-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 17%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%);
          background: -ms-radial-gradient(center, ellipse cover, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 17%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%);
          background: radial-gradient(ellipse at center, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 17%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 );
        }
        #main input{ display:block; margin: 0 auto; margin-top: 5px; border-radius: 5px; color: black; }
        input{
          padding:10px; width:75%; display:block; text-align: center; border: 1px solid hotpink; font-size: 20px; 
          
        }
        input:hover, input:focus{
          border: 1px solid purple;
        }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
    </head>
    <body>
       <div class="container">
            @yield('content')
        </div>
    </body>
</html>