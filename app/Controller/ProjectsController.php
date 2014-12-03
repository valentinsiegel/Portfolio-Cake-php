<?php
class ProjectsController extends AppController {
	public function index(){
		$projects = $this->Project->Find("all");
		if ($this->request->is('requested')) {
			return $projects;
		}
		else {
			$this->set('projects', $projects);
		}
	}

	public function view($id){
		if (!$id) {
			throw new NotFoundException(__("Entrée invalide"));
		}
		$project = $this->Project->findById($id);
		if (!$project) {
			throw new Exception(__("Entrée invalide"));
		}
		$this->set('project', $project);
	}
}