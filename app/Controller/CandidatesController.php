<?php



class CandidatesController extends AppController {

	public $helpers = array('Html', 'Form');

	

	public function index() {
		
		$this->set('title',"Vote now!");
		$this->set('Candidates', $this->Candidate->find('all'));
		 
		if ($this->request->is('post')) {

			
		
			
			
			$data = array(
						'Vote' => array(
						'REGION' => $_POST['constituency'],
						'ID_CAND' => $_POST['Candidate']
						
						)
						);
						
						
		$this->Candidate->saveVote($data);
		
		
	return $this->redirect(array('controller' => 'Votes','action' => 'index'));
			
		
		
		
			
		}

		
	}
	


public function votes() {
	
	
	
}
    
       

	
}

?>