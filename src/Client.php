<?php namespace coinbase_pro_api_client;

class Client
{
	private string $key;
	private string $secret;
	private string $passphrase;
	private HttpClient $HttpClient;

	// REST API Endpoint
	const API_ENDPOINT = "https://api.pro.coinbase.com";

	// Websocket Feed
	const WEBSOCKET_FEED = "wss://ws-feed.pro.coinbase.com";

	public function __construct(string $key, string $secret, string $passphrase)
	{
		if(strlen($key) < 1)
		{
			throw new \InvalidArgumentException("API key is required");
		}
		if(strlen($secret) < 1)
		{
			throw new \InvalidArgumentException("API secret is required");
		}
		if(strlen($passphrase) < 1)
		{
			throw new \InvalidArgumentException("API passphrase is required");
		}
	}

	protected function execRequest(Request)
	{

	}
}