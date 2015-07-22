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
        if ((@include(TL_ROOT . '/system/modules/Divider/config/config.php')) !== false)
        {
            $this->Files->rrdir('system/modules/Divider');
        }
    }
}
$objDividerRunonceJob = new DividerRunonceJob();
$objDividerRunonceJob->run();
?>