<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->call->model('UsersModel');
        $data['users'] = $this->UsersModel->all();

        $this->call->view('users/index', $data);
    }
}