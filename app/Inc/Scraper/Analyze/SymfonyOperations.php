<?php

namespace App\Inc\Scraper\Analyze;

use Symfony\Component\DomCrawler\Image;

class SymfonyOperations extends SourceManagement
{
	public function processSelection($selection)
	{
		$nodes;
		$response;

		switch($selection->type)
		{
			case "filter":
				$nodes = $this->crawler->filter($selection->filter);
				break;
			case "eq":
				$nodes = $this->crawler->filter($selection->filter)->eq($selection->eq_index);
				break;
			case "first":
				break;
			case "last":
				break;
			case "siblings":
				break;
			case "nextAll":
				break;
			case "previousAll":
				break;
			case "children":
				break;
			case "parents":
				break;
			case "nextAll":
				break;
			case "nextAll":
				break;
		}

		if($selection->is_array)
		{
			foreach($nodes as $node)
			{
				$response[] = $this->nodeProcessing($selection, $node);
			}
		}
		else
		{
			$response = $this->nodeProcessing($selection, $nodes);
		}

		return $response;
	}

	public function nodeProcessing($selection, $node)
	{
		switch($selection->method)
		{
			case "attr":
				break;
			case "src":
				break;
			case "text":
				return $node->text();
				break;
			case "image-link":
				$image = new Image($node, $this->client->getHistory()->current()->getUri());
				return $image->getUri();
				break;
		}
	}
}
