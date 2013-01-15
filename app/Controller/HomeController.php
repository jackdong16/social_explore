<?php
App::uses('FB', 'Facebook.Lib');
App::import('Vendor', 'Renren', array('file' => 'Renren'.DS.'RenrenRestApiService.class.php'));
//App::import("Vendor", "Weibo");
//App::import("Vendor", "Renren");

class HomeController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
    	//$Users = new UsersController();
    	 //$rrObj = new RenrenRestApiService;
    	debug(App::path('Vendor'));
    }

    public function search(){
    	$query = $this->data['home']['search'];     
    
    	$results = FB::api('/search?q='.$query.'&type=post');
		$this->set('results', $results);     
    
    }

}

?>