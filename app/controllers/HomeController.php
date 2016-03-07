<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $consumer_key = 'k6sfHzZOphRRgQRUV2Zce89mt';
	public $consumer_secret = 'JzO3pywLv5LLUCWfuRgYqyuj9aB3RPnxGk1WWQ4XrfqkPmffgz';

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function login(){
		if(isset($_COOKIE['accessToken']))
			return;

		//CONNECTION TO THE TWITTER APP TO ASK FOR A REQUEST TOKEN
		$connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret);
		$request_token = $connection->oauth("oauth/request_token", array("oauth_callback" => "http://localhost:8000/printKey"));
		//callback is set to where the rest of the script is

		//TAKING THE OAUTH TOKEN AND THE TOKEN SECRET AND PUTTING THEM IN COOKIES (NEEDED IN THE NEXT SCRIPT)
		$oauth_token=$request_token['oauth_token'];
		$token_secret=$request_token['oauth_token_secret'];

		setcookie("token_secret", $token_secret, time()+60*10);
		setcookie("oauth_token", $oauth_token, time()+60*10);


		//GETTING THE URL FOR ASKING TWITTER TO AUTHORIZE THE APP WITH THE OAUTH TOKEN
		$url = $connection->url("oauth/authorize", array("oauth_token" => $oauth_token));

		//REDIRECTING TO THE URL
		return Redirect::to( (string)$url );
		header('Location: ' . $url);
	}

	public function printKey(){
		
		if(isset($_COOKIE['accessToken']))
			return;

		$oauth_verifier = $_GET['oauth_verifier'];
		$token_secret = $_COOKIE['token_secret'];
		$oauth_token = $_COOKIE['oauth_token'];


		//EXCHANGING THE TOKENS FOR OAUTH TOKEN AND TOKEN SECRET
		$connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $oauth_token, $token_secret);
		$access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $oauth_verifier));
		$accessToken=$access_token['oauth_token'];
		$secretToken=$access_token['oauth_token_secret'];


		setcookie("accessToken", $accessToken, time()+60*10);
		setcookie("secretToken", $secretToken, time()+60*10);

	}

	private function getTwitterConnectTion()
	{

		$token_secret = $_COOKIE['accessToken'];
		$oauth_token = $_COOKIE['secretToken'];

		//EXCHANGING THE TOKENS FOR OAUTH TOKEN AND TOKEN SECRET
		$connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $token_secret, $oauth_token);
		return $connection;
	}

	public function getFollow()
	{
		$connection = $this->getTwitterConnectTion();
		$content = $connection->get("account/verify_credentials");
		$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
		echo "<pre>";
		var_dump($statuses);
		echo "</pre>";
	}
}
