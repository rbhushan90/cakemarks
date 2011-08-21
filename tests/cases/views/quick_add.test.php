<?php
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

App::import('CakemarksWebTestCase');

/**
 * Excerises the quick add box in the sidebar.
 *
 * @author Martin Ueding <dev@martin-ueding.de>
 */
class QuickAddTestCase extends CakemarksWebTestCase {
	/**
	 * Adds bookmark via the sidebar and checks whether it appears on the
	 * startscreen.
	 *
	 * @author Martin Ueding <dev@martin-ueding.de>
	 */
	function test_input_to_reading_list() {
		$this->get($this->baseurl."/");
		$this->verify_page_load();

		$this->input_title = String::uuid();
		$this->input_url = String::uuid().'.tld';
		$this->setField('data[Bookmark][title]', $this->input_title);
		$this->setField('data[Bookmark][url]', $this->input_url);
		$this->setField('data[Bookmark][reading_list]', "1");
		$this->click("Create Bookmark");

		$this->verify_page_load();

		$this->assertPattern("/$this->input_title/");
		$this->assertPattern("/$this->input_url/");
		$this->assertNoPattern("/This is on your reading list./");
	}
}
