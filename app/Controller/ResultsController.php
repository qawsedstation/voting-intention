<?php







class ResultsController extends AppController {


	public function index() {
		
		
			$this->set('Votes', $this->Result->getAnswers('all'));

      
	
		}

	}

	



?>