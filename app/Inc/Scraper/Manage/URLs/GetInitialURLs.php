<?php

namespace App\Inc\Scraper\Manage\URLs;
/**
 * Generates all of the initial category urls which will
 * be used to retrieve inventory urls later on.
 */

class UrlGenerator
{
	protected $name;
	protected $type;
	/* Available Types
	 * 1. fragments
	 * 2. actions
	 */
}

class StaticFragment
{
	protected $position;
	protected $value;
	protected $generator_id;
}

class IncrementFragment
{
	protected $position;
	protected $step;
	protected $start;
	protected $stop;
	protected $generator_id;
}


class GetInitialURLs
{
/* Get Scraper fragments */
$fragments = $this->GetFragments();





public function GetFragments()
{
	/* Will be replaced with an eloquent call later on. */
	$fragment = new Fragment();
	$fragment->position = 0;
	$fragment->type = "static";

	$fragment2 = new Fragment();
	$fragment2->position = 1;
	$fragment2->type = "increment";
	$fragment2->increment_id = 1;
}

public function GetIncrements()
{

}

}
