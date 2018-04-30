<?php

require_once("grima-lib.php");

class ViewXmlPortfolio extends GrimaTask {

	function do_task() {
		$this->portfolio = new Electronic_Portfolio();
		$this->portfolio->loadFromAlmaX($this['portfolio_id']);
	}

	function print_success() {
		XMLtoWeb($this->portfolio->xml);
	}

}

ViewXmlPortfolio::RunIt();
