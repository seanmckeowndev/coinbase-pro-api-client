<?php namespace coinbase_pro_api_client\request;

class Error
{
	const BAD_REQUEST = 400;
	const UNAUTHORIZED = 401;
	const FORBIDDEN = 403;
	const NOT_FOUND = 404;
	const INTERNAL_SERVER_ERROR = 500;

	public function __construct(int $error_code)
	{
		switch($error_code)
		{
			case 400:
			case 401:
			case 403:
			case 404:
			case 500:
				return;

			default:
				throw new \InvalidArgumentException("Invalid error code '".$error_code."'");
		}
	}
}