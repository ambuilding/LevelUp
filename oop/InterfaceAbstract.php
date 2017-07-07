<?php

interface Provider {
	public function getAuthorizationUrl();
}

class FacebookProvider implements Provider {

	protected function getAuthorizationUrl() {
		return '';
	}
}


abstract class Provider {

	abstract protected function getAuthorizationUrl();

}

class FacebookProvider extends Provider {

	protected function getAuthorizationUrl() {
		return '';
	}
}