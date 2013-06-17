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
	   if ((@include(TL_ROOT . '/system/modules/Divider')) !== false)
	   {
		   $this->Files->rrdir(TL_ROOT . 'system/modules/Divider');
	   }
   }
}
$objDividerRunonceJob = new DividerRunonceJob();
$objDividerRunonceJob->run();
?>