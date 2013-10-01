<?php

class Bookmarks extends CI_Controller
{
	public function sheets()
	{
		$this->template->build('bookmarks/sheets');
	}
}