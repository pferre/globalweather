<?php


namespace AppBundle\Services;

use SoapClient;

class GlobalWeatherClient
{
	protected $endpoint = 'http://www.webservicex.net/globalweather.asmx?WSDL';

	/**
	 * @return SoapClient
	 */
	private function getClient()
	{
		return new SoapClient($this->endpoint);
	}

	/**
	 * @param array $options
	 *
	 * @return mixed
	 */
	public function getWeather( $options = [ ] )
	{
		$client = $this->getClient();
		$response = $client->getWeather($options);

		return $response;
	}

	/**
	 * @param array $options
	 *
	 * @return mixed
	 */
	public function getCitiesByCountry( $options = [ ] )
	{
		$client = $this->getClient();
		$response = $client->getCitiesByCountry($options);

		return $response;
	}
}