<?php
class DividerRunonceJob extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function run()
	{
		$this->import('Files');
		if(is_dir('system/modules/Divider')) {
			$this->Files->rrdir('system/modules/Divider');
		}
		
	}
}
$objDividerRunonceJob = new DividerRunonceJob();
$objDividerRunonceJob->run();
?>