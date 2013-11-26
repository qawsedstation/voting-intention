<?php


App::uses('Vote', 'Model');



class Result extends AppModel {


	public function getResults($query) {
		$Vote = new Vote();
		return $Vote->find($query);
	}
	



	

	





	



	







}



?>