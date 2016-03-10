<!DOCTYPE html>
<html lang="ja" dir="ltr" class="client-js ve-not-available">
  <head>
    <meta charset="UTF-8">
    <title>N4U</title>
    <meta name="generator" content="MediaWiki 1.27.0-wmf.14">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:200">
    <link rel="stylesheet" href="assets/css/layouts/side-menu.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
          <div class="hero-unit">
            <h2>あなたの話題になったニュースをチェックしませんか？</h2>
            <div class="pure-u-1">
              <p>N4Uはあなたの周りで話題になっていたニュースを探してきて、お届けします！</p>
            </div>
            <div class="pure-u-1-3">
              <h3>STEP1</h3>
              <p>Twitterでログインしてください</p>
            </div>
            <div class="pure-u-1-3">
              <h3>STEP2</h3>
              <p>N4Uがあなたのタイムラインで話題になっていたニュースを探してきます</p>
            </div>
            <div class="pure-u-1-3">
              <h3>STEP3</h3>
              <p>ニュースをまとめてお届け!!</p>
            </div>
          </div>
          <div class="pure-u-1 loginUnit">
            <p><a href="login"><img class="loginButton" src="https://g.twimg.com/dev/sites/default/files/images_documentation/sign-in-with-twitter-gray.png" alt="Sign in with Twitter" title="Sign in with Twitter"></a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/ui.js"></script>
  </body>
</html>
