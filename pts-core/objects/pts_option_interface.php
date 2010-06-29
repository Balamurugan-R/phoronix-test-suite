<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2008, Phoronix Media
	Copyright (C) 2008, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

interface pts_option_interface
{
	// If a class implementing this interface has a public static function required_function_sets()
	// that returns an array, it will automatically load those array elements

	// If a class implementing this interface has a public static function argument_checks()
	// that returns an array of pts_argument_check options, pts-core will automatically perform the argument checks prior to running the function

	public static function run($passed_arguments_array);
}

?>
