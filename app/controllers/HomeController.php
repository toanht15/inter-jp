<?php

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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function loginWithTwitter() {

    // get data from input
		$token = Input::get( 'oauth_token' );
		$verify = Input::get( 'oauth_verifier' );

    // get twitter service
		$tw = OAuth::consumer( 'Twitter' );
		
    // check if code is valid

    // if code is provided get user data and sign in
		if ( !empty( $token ) && !empty( $verify ) ) {

        // This was a callback request from twitter, get the token
			$token = $tw->requestAccessToken( $token, $verify );

			
        // Send a request with it
			$result = json_decode( $tw->request( 'account/verify_credentials.json' ), true );

			$message = 'Your unique Twitter user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
			echo $message. "<br/>";

			echo $result['description'];

			$follower = $tw->get('follower/ids', array('id' => $result['id']));

        //Var_dump
        //display whole array().
			dd($result);

		}
    // if not ask for permission first
		else {
        // get request token
			$reqToken = $tw->requestRequestToken();

        // get Authorization Uri sending the request token
			$url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));


			
        // return to twitter login url
			return Redirect::to( (string)$url );
		}
	}

}
