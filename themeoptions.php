<?php

class ThemeOptions {


	function ThemeOptions() {
		/* put any setup code needed here */
		setOptionDefault('Allow_comments', false);
		setOptionDefault('Allow_search', true);
	}

	function handleOption($option, $currentValue) {
	}
}

