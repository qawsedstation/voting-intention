<?php

App::uses('Candidate', 'Model');

class Vote extends AppModel {



	
	public function getCandidates($query) {
		$Candidate = new Candidate();
		return $Candidate->find($query);
	}
	






}



?>