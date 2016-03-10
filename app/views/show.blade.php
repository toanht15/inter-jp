<!DOCTYPE html>
<html lang="ja" dir="ltr" class="client-js ve-not-available">
<head>
  <meta charset="UTF-8">
  <title>N4U</title>
  <meta name="generator" content="MediaWiki 1.27.0-wmf.14">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:200">
  {{ HTML::style('css/style.css') }}
  {{ HTML::style('css/side-menu.css') }}
</head>
<body>
  <div id="layout">
    <a href="#menu" id="menuLink" class="menu-link"><span></span></a>
    <div id="menu">
      <div class="pure-menu">
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="#main" class="pure-menu-link">TOP</a></li>
          <li class="pure-menu-item"><a href="#about" class="pure-menu-link">ABOUT</a></li>
          <li class="pure-menu-item"><a href="#form" class="pure-menu-link">CONTUCT US</a></li>
          <li class="pure-menu-item"><a href="http://localhost:8000/logout" class="pure-menu-link">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div id="main">
      <h1>N4U</h1>
      <div class="pure-g">
        <div class="pure-u-1 updateInfo">
          <p>最終更新日時 2016-03-03 10:00:00 <button class="pure-button pure-button-primary">更新</button></p>
        </div>

        @foreach ($list as $l)

        @if ($l !== null ) 
        <!-- 1block -->

        <div class="pure-u-sm-1-4">
          <div class="pure-u-1 news">   
            @if(isset($l['image']) && isset($l['title']))
              <img class="pure-img" src="{{ $l['image'] }}" height="400px" width="200px"/>
              <h3><a href="{{ $l['url'] }}" target="_blank">{{ $l['title'] }}</a></h3>
            @else 
              <img class="pure-img" src="http://maylocnuocnewlife.com/wp-content/themes/newlife/images/no_image_available.jpg" height="400px" width="200px"/> 
              <h3><a href="{{ $l['url'] }}" target="_blank">Please click here to read news</a></h3>
            @endif

            <br>
          </div>
        </div>

        @endif
        <!-- /1block -->
        @endforeach

      </div>
    </div>
  </div>
  <script src="assets/js/ui.js"></script>
</body>
</html>
