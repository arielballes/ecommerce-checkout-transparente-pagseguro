<?php

namespace Hcode\PagSeguro;

class Config{
	
	const SANDBOX = true;

	const SANDBOX_EMAIL = "Digite_Seu_Email";
	const PRODUCTION_EMAIL = "Digite_Seu_Email";

	const SANDBOX_TOKEN = "Digite_Seu_Token";
	const PRODUCTION_TOKEN = "Digite_Seu_Token";

	const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/...";
	const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/...";

	public static function getAuthencation():array
	{

		if (Config::SANDBOX === true)
		{

			return [
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN

			];

		}else{

			return [
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			];

		}

	}

	public static function getUrlSessions():string
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;

	}
}

?>