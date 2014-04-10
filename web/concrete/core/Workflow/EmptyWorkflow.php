<?
namespace Concrete\Core\Workflow;
use \Concrete\Core\Foundation\Object;
use \Concrete\Core\Workflow\Progress\Progress as WorkflowProgress;

class EmptyWorkflow extends Workflow {
	public function start(WorkflowProgress $wp) {
		$req = $wp->getWorkflowRequestObject();
		$wpr = $req->approve($wp);
		$wp->delete();
		return $wpr;
	}
	public function updateDetails($vars) {}
	public function loadDetails() {}
	
	public function canApproveWorkflowProgressObject(WorkflowProgress $wp) {
		return false;
	}
	public function getWorkflowProgressActions(WorkflowProgress $wp) {
		return array();
	}
	public function getWorkflowProgressCurrentDescription(WorkflowProgress $wp) {
		return '';
	}
	public function getWorkflowProgressStatusDescription(WorkflowProgress $wp) {
		return '';
	}

}