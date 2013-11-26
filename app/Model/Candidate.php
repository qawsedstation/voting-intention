<?php

App::uses('Vote', 'Model');

class Candidate extends AppModel {



	public function saveVote($data) {
		$Vote = new Vote();
		if($Vote->save($data))
		return true;
		else
		return false;
	}
	
	





}



?>