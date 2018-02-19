<?php

namespace App\Inc\Scraper\Manage\URLs;
use App\StaticFragment;
use App\IncrementFragment;
use App\Inc\Scraper\Analyze\SourceManagement;
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


class GetInitialURLs
{

public function run()
{
	$generator_id = 2;
	$generater_type = "selection";
	$generator_max_iterations = 5;

	/* Get all fragments associated with the generator. */
	$static_fragments = StaticFragment::where('generator_id', $generator_id)->get();
	$increment_fragments = IncrementFragment::where('generator_id', $generator_id)->get();

	/* Order the fragments according to their position property. */
	$fragments = $this->orderFragments($static_fragments, $increment_fragments);
	$urls = [];

	/* Generate however many urls is specified in the generators max iterations. */
	for($x = 0; $x <= $generator_max_iterations; $x++)
	{
		foreach($fragments as $fragment)
		{
			/* Check to see if the current model is an increment. */
			if(is_a($fragment, 'App\IncrementFragment')){
				/* If value is zero or null, set to start value. */
				if(empty($fragment->value)){
					$fragment->value = $fragment->start;
				}
				/* Otherwise, increment the value by the step. */
				else{
					$fragment->value = $fragment->value + $fragment->step;
				}
			}
		}

		$url = $this->constructURL($fragments);

		/* Confirm url status is valid. */
		$source_management = new SourceManagement($url);
		if($source_management->isSuccessful()){


			array_push($urls, $url);
		}
		//.search-pagination li.next


		/* Check for end criteria. */
			/* Stop iterations (either this loop or next depending on xxx) */

		/* Save urls to database. */
	}
	echo '<pre>';
		var_dump($urls);
	echo '</pre>';
	//dd($fragments);
}

public function checkEndCritera($generator)
{
	//Type
	//selection
	//regex


	//ID

	//get_next
	//
	switch()
	{

	}
}

public function constructURL($fragments)
{
	$url = "";

	foreach($fragments as $fragment)
	{
		$url .= $fragment->value;
	}

	return $url;
}

public function orderFragments($static_fragments, $increment_fragments)
{
	/* Merge all of the collections togeither. */
	$collection = collect();

	foreach($static_fragments as $static_fragment)
	{
		$collection->push($static_fragment);
	}

	foreach($increment_fragments as $increment_fragment)
	{
		$collection->push($increment_fragment);
	}

	/* Sort collection by position property. */
	$collection = $collection->sortBy(function($model){
		return $model->position;
	});

	return $collection;
}

}
