<?php

namespace App\Inc\Scraper\Analyze;

use App\Inc\Scraper\Analyze\Client;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DomCrawler\Crawler;

/**
 * This class handles low-level operations like
 * retrieving the html of a url, and detecting its status.
 */

class SourceManagement
{
	protected $client;
	protected $crawler;
	protected $responseCode;

	public function getStatusCode()
	{
		return $this->responseCode;
	}

	public function isSuccessful()
	{
		if($this->responseCode >= 200 && $this->responseCode <= 226)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function isRedirect()
	{
		if($this->responseCode >= 300 && $this->responseCode <= 308)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getRedirectURL()
	{

	}

	public function getHTMLwithPhantom()
	{

	}

	public function getHTML()
	{

	}

	public function getCrawler()
	{

	}

	public function convertToSymfony()
	{

	}

	public function __construct ($url)
	{
		$this->client = new Client();
		$this->crawler = $this->client->request('GET', $url);
		$this->responseCode = $this->client->getResponse()->getStatus();;
	}
}