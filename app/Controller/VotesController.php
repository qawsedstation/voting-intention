<?php







class VotesController extends AppController {


	public function index() {
		
		
	$this->set('title',"Results");
	  
	    $this->set('Candidates',$this->Vote->getCandidates('all'));
	  if ($this->request->is('post')) {
		  
		  
		  
		  $this->set('Votes', $this->Vote->find('all',array('conditions' => array('Vote.REGION' => $_POST['constituency']),
    'fields' => array(
        'Vote.ID_CAND',
        'COUNT(Vote.ID) as final'
    ),'group' => 'Vote.ID_CAND'
)));

	  }
	  else
	  {
	  
	  		$this->set('Votes', $this->Vote->find('all',array(
    'fields' => array(
        'Vote.ID_CAND',
        'COUNT(Vote.ID) as final'
    ),'group' => 'Vote.ID_CAND'
)));

	  }
	  
	  
    }

	}

	



?>