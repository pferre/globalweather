<?php


namespace AppBundle\Tests\Services;

use AppBundle\Services\GlobalWeatherClient;

class GlobalWeatherClientTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @covers AppBundle\Services\GlobalWeatherClient::getWeather
	 */
	public function test_it_returns_the_weather_for_a_city_and_a_country()
	{
		$weather_client = new GlobalWeatherClient();
		$response = $weather_client->getWeather([
			'CityName'	=> 'New York',
			'CountryName'	=>	'United States'
		]);

		$this->assertTrue(substr($response->GetWeatherResult, 0, 5) == '<?xml');
		$this->assertContains('<Status>Success</Status>', $response->GetWeatherResult);
	}

	/**
	 * @covers AppBundle\Services\GlobalWeatherClient::getCitiesByCountry
	 */
	public function test_it_returns_the_cities_for_a_country()
	{
		$weather_client = new GlobalWeatherClient();
		$response = $weather_client->getCitiesByCountry([
			'CountryName' => 'United States'
		]);

		$this->assertContains('<NewDataSet>', $response->GetCitiesByCountryResult);
	}
}
