<?php

namespace App\Inc\Scraper\Testing;

//use App\Inc\Scraper\Analyze\SourceManagement;
use App\Inc\Scraper\Analyze\SymfonyOperations;
use App\Inc\Scraper\Analyze\RegexOperations;
use App\Inc\Scraper\Manage\URLs\GetInitialURLs;

class Selection
{
	public $filter;
	public $type;
	public $method;
	public $data_type;
	public $is_array;
}

class Regex
{
	public $type;
	public $pattern;
}

class Test
{
	public function test2()
	{
		$initialurls = new GetInitialURLs();
		$initialurls->run();
	}

	public function test1()
	{
		$uri = "https://www.mvmtwatches.com/products/chrono-gun-metal-sandstone-leather";

		/* Scraper for MVMT
		 *
		 * Note: Each variant has it's own dedicated page, so the current page is a variant of itself.
		 * There needs to be a system in place to establish 'variant data items' which are nested under
		 * a top level 'variant' which has a url/id.
		 */

		/* Price */
		/*
		$selection = new Selection();
		$selection->filter = ".price-container .money";
		$selection->type = "eq";
		$selection->eq_index = 0;
		$selection->method = "text";
		$selection->is_array = true;
		*/

		/* Title */
		$selection = new Selection();
		$selection->filter = "h1.product-name";
		$selection->type = "eq";
		$selection->eq_index = 0;
		$selection->method = "text";
		$selection->is_array = false;


		/* Images
		$selection = new Selection();
		$selection->filter = "img.product-slider-image";
		$selection->type = "filter";
		$selection->eq_index = 0;
		$selection->method = "image-link";
		$selection->is_array = true;
		*/

		/* SKU */
		/*
		$regex = new Regex();
		$regex->type = "getmatch";
		$regex->pattern = '/"sku":"(.*?)"}]/';
		*/

		/* ID */
		/*
		$regex = new Regex();
		$regex->type = "getmatch";
		$regex->pattern = '/"variantId":(.*?),"/';
		*/


		/* Test Symfony Operations */

		$operation = new SymfonyOperations($uri);
		$result = $operation->processSelection($selection);
		var_dump($result);


		/* Test Regex Operations */
		/*
		$operation = new RegexOperations($uri);
		$result = $operation->processRegex($regex);
		var_dump($result);
		*/

		/* Test Status Codes */
		//$source = new SourceManagement($uri);
		//echo $source->getStatusCode() . '</br>';
		//echo $source->isSuccessful() . '</br>';
		//echo $source->isRedirect() . '</br>';
	}

}
