<?php

class Magasin extends Model{
	public static $_table ="t_r_magasin_mag";
	public static $_nameid ="mag_id";
	protected $_mag_id;
	protected $_mag_nom;
	protected $_mag_ville;

	public function __toString() {
		return get_class($this).":".$this->_mag_id;
	}
}