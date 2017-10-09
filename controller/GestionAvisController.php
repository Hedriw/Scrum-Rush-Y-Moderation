<?php

class GestionAvisController extends Controller{
	public function __construct(){

	}
	function Delete($id)
		{
			$sql = "delete from t_e_avis_avi where avi_id=".$id;
		    $st = db()->prepare($sql);
			$st->execute();
			return;
		}
	function Remove($id)
		{
			$sql = "delete from t_j_avisabusif_ava where abu_id=".$id;
			$st = db()->prepare($sql);
			$st->execute();
			return;
		}

	public function index(){
		if (isset($_GET['action']))
		{
			if($_GET['action']=='delete')
			{
				$this->Remove($_GET['id']);
				$this->Delete($_GET['avi']);
			}
			elseif($_GET['action']=='remove')
			{
				$this->Remove($_GET['id']);
			}
		    
		}
		    
		$sql = "select * from t_j_avisabusif_ava";
		$st = db()->prepare($sql);
		$st->execute();
		$row = $st->fetch(PDO::FETCH_ASSOC);
		if($st->execute())
			{
				$avisAbu=array();
				while($row=$st->fetch(PDO::FETCH_ASSOC))
				{
					$avisAbu[]=new AvisAbusif($row["abu_id"]);
				}
				if(empty($avisAbu))
				{
					$error=array("error"=>"Pas d'avis Signalés ! (Empty AvisAbusif)");
					$this->render("index",$error);
				}
				else
				{
					$this->render("index",$avisAbu);
				}	
			}
			else
			{
				$error=array("error"=>"Pas d'avis Signalés ! (Exec Error)");
				$this->render("index",$error);
			}
	}

}