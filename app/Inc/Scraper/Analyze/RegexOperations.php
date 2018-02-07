<?php

namespace App\Inc\Scraper\Analyze;

class RegexOperations extends SourceManagement
{
	public function processRegex($regex)
	{
		switch($regex->type)
		{
			case "getmatch":
				return $this->getMatch($regex);
				break;
			case "doesmatch":
				return $this->doesMatch($regex);
				break;
			case "getmatches":
				return $this->getMatches($regex);
				break;
			default:
				return $this->doesMatch($regex);
				break;
		}
	}

	private function doesMatch($regex)
	{
		/* Preg match returns false if an error occurs and zero if no match is found. This function will return false either way. */

		$result = preg_match($regex->pattern, $this->crawler->html());

		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	private function getMatch($regex)
	{
		$result = preg_match($regex->pattern, $this->crawler->html(), $match);

		if($match[1])
		{
			return $match[1];
		}
		else
		{
			return false;
		}
	}

	private function getMatches($regex)
	{
		//code
	}
}