<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administradores_model extends CI_Model
{
	public function getAdministradores()
	{
		$this->db->cache_on();
		$this->db->select("u.*, al.nombre as nivel");
		$this->db->from("users u");
		$this->db->join("user_auth_level al","u.auth_level = al.id");
		// $this->db->join("menu_status s","u.id_estado = s.id");	
		
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getAdministrador($id)
	{
		$this->db->cache_on();
		$this->db->select("u.*, al.nombre as nivel");
		$this->db->from("users u");
		$this->db->join("user_auth_level al","u.auth_level = al.id");
		// $this->db->join("menu_status s","u.id_estado = s.id");	
		$this->db->where("u.user_id", $id);
		$resultado = $this->db->get();
		return $resultado->row();

	
	}
	public function getMenuNiveles()
	{
		$this->db->cache_on();
		$this->db->select("u.*");
		$this->db->from("user_auth_level u");
		$this->db->order_by('id', 'ASC');
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("users", $data);
	}

	public function update($id, $data)
	{
		$this->db->cache_delete_all();
		$this->db->where("user_id", $id);
		return $this->db->update("users", $data);
	}
}
