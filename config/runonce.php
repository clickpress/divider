<?php
class DividerRunonceJob extends Controller
{
   public function __construct()
   {
       parent::__construct();
       $this->import('Files');
   }
   public function run()
   {
	   $this->Files->rrdir(TL_ROOT . 'system/modules/Divider');
   }
}
$objDividerRunonceJob = new DividerRunonceJob();
$objDividerRunonceJob->run();
?>