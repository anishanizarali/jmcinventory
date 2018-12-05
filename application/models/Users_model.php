<?php

class Users_model extends CI_Model
{

    // NOTE - these roles must be added in this order to the database so that the role_id matches these values
    const DEFAULT_USER = 1;
    const WORKER_USER = 2;
    const ADMIN_USER = 3;

    public function __construct()
    {
        $this->load->database();
    }

    public function getuser($user_id)
    {
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where('users.id', $user_id);
        $query = $this->db->get();
        $results = $query->result();
        if ($results) {
            return $results[0];
        } else {
            return false;
        }
    }

    public function getallusers()
    {
        $this->db->select("users.*,roles.title as role");
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id=roles.id');
        $this->db->order_by('email');
        $query = $this->db->get();
        $results = $query->result();
        return $results;
    }

    public function getallreservations()
    {
        $this->db->select("*");
        $this->db->from('reservations');
        $this->db->join('users', 'reservations.user_id=users.id');
        $this->db->join('reservation_details', 'reservation_details.reservation_id=reservations.id');
        $this->db->join('items', 'reservation_details.item_id=items.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getreservations($user_id)
    {
        $this->db->select("*");
        $this->db->from('reservations');
        $this->db->join('users', 'reservations.user_id=users.id');
        $this->db->join('reservation_details', 'reservation_details.reservation_id=reservations.id');
        $this->db->join('items', 'reservation_details.item_id=items.id');
        $this->db->where('users.id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getroles()
    {
        $this->db->select("*");
        $this->db->from('roles');
        $query = $this->db->get();
        return $query->result();
    }
}
