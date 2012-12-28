<?php
/**
 * Twitter Datasource 0.3
 *
 * Twitter datasource to communicate with the Twitter API.
 *
 * Based on:
 * http://bakery.cakephp.org/articles/view/paypal-datasource
 * http://bakery.cakephp.org/articles/view/twitter-component
 * http://debuggable.com/posts/new-google-analytics-api:480f4dd6-c59c-445f-8ce0-4202cbdd56cb
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 *
 * @author Alexandru Ciobanu <iscandr@gmail.com>
 * @copyright (c) 2009 Alexandru Ciobanu
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link http://bakery.cakephp.org/articles/view/twitter-datasource
 * @created May 4, 2009
 * @version 0.3
 *
 */
App::import('Core', array('Xml', 'HttpSocket'));

class TwitterSource extends DataSource {
	var $username = "";
	var $password = "";
	var $description = "Twitter API";
	var $Http = null;

	function __construct($config) {
		parent::__construct($config);
		$this->Http =& new HttpSocket();
		$this->username = $this->config['username'];
		$this->password = $this->config['password'];
	}

	/**
	 * Updates the authenticating user's status.  Requires the status parameter specified below.
	 *
	 * @param string status Required.  The text of your status update.
	 *              Be sure to URL encode as necessary.  Must not be more than 160 characters
	 *              and should not be more than 140 characters to ensure optimal display.
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function status_update($status) {
		$url = "http://twitter.com/statuses/update.xml";
		return $this->__process($this->Http->post($url, array('status' => $status), $this->__getAuthHeader()));
	}

	/**
	 * Destroys the status specified by the required ID parameter.
	 *
	 * @param string id Required.  The ID of the status to destroy.
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function status_destroy($id) {
		$url = "http://twitter.com/statuses/destroy/{$id}.xml";
		return $this->__process($this->Http->get($url, null, $this->__getAuthHeader()));
	}

	/**
	 * Returns an HTTP 200 OK response code and a format-specific response if authentication was successful.
	 *
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function account_verify_credentials() {
		$url = "http://twitter.com/account/verify_credentials.xml";
		return $this->__process($this->Http->get($url, null, $this->__getAuthHeader()));
	}

	/**
	 * Ends the session of the authenticating user, returning a null cookie.
	 *
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function account_end_session() {
		$url = "http://twitter.com/account/end_session";
		$this->Http->get($url, null, $this->__getAuthHeader());
	}

	/**
	 * Updates the location attribute of the authenticating user,
	 * as displayed on the side of their profile and returned in various API methods.
	 *
	 * @param string location The location of the user.  Please note this is not normalized, geocoded, or translated to latitude/longitude at this time.
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function account_update_location($location) {
		$url = 'http://twitter.com/account/update_location.xml';
		return $this->__process($this->Http->get($url, array('location' => $location), $this->__getAuthHeader()));
	}

	/**
	 * Returns the string "ok" in the requested format with a 200 OK HTTP status code.
	 *
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function help_test() {
		$url = 'http://twitter.com/help/test.xml';
		return $this->__process($this->Http->get($url));
	}

	/**
	 * Returns the same text displayed on http://twitter.com/home when
	 * a maintenance window is scheduled, in the requested format.
	 *
	 * @see http://groups.google.com/group/twitter-development-talk/web/api-documentation
	 */
	function help_downtime_schedule() {
		$url = 'http://twitter.com/help/downtime_schedule.xml';
		return $this->__process($this->Http->get($url));
	}
	/**
	 * Credentials array for method with mandatory auth
	 * @return array credentials
	 */
	function __getAuthHeader() {
		return array('auth' => array('method' => 'Basic',
				'user' => $this->username,
				'pass' => $this->password
		)
		);
	}

	/**
	 *
	 * @param string data to process
	 * @return array Twitter API response
	 */
	function __process($response) {
		$xml = new XML($response);
		$array = $xml->toArray();

		$xml->__destruct();
		$xml = null;
		unset($xml);

		return $array;
	}
}
?>