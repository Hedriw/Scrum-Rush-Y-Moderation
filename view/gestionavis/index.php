<?php
// print_r($data);
if(empty($data["error"])&&!empty($data))
{
	foreach($data as $avi)
	{
		echo "<fieldset class='list'>
			<h2>".$avi->avi_id->avi_titre."</h2>
			Note :".$avi->avi_id->avi_note."
			</br>
			Avis : ".$avi->avi_id->avi_detail."
			</br>
			</br>
			Auteur : ".$avi->avi_id->ach_id->ach_pseudo."
			</br>
			Avis utile :
			</br>
			Oui : ".$avi->avi_id->avi_nbutileoui." Non : ".$avi->avi_id->avi_nbutilenon."
			<p>
			<a href=http://srv-tpinfo/G246/Scrum-Rush-Y-Moderation/?r=GestionAvis&id=".$avi->abu_id."&action=delete&avi=".$avi->avi_id->avi_id." class='mui-btn mui-btn--primary'>Supprimer l'avis</a>
			<a href=http://srv-tpinfo/G246/Scrum-Rush-Y-Moderation/?r=GestionAvis&id=".$avi->abu_id."&action=remove class='mui-btn mui-btn--primary'>Enlever signalement</a>
			</p>
			</fieldset>
			";
	}
}
else
{

	echo $data["error"];
}