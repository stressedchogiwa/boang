<?php 

class Dashboard extends MY_Controller{

    public function index(){
        $this->load_page_admin('dashboard');
    }

    public function addEmployee(){
        $fullname = $_POST['first_name'].' '.$_POST['middle_name'].' '.$_POST['last_name'];
        $user_credentials = array(
            'fullname' => $fullname,
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'user_type' => 2,
            'user_status' => $_POST['status'],
        );
        insert('tbl_users', $user_credentials);

        $where = array('fullname' => $fullname, 'username' => $_POST['username']);
        $get = select('tbl_users', $where);

        $employee_details = array(
            'fk_uid' => $get->user_id,
            'first_name' => $_POST['first_name'],
            'middle_name' => $_POST['middle_name'],
            'last_name' => $_POST['last_name'],
            'address' => $_POST['address'],
            'job_discipline' => $_POST['job_discipline'],
            'email' => $_POST['email'],
            'status' => $_POST['status'],
        );
        insert('tbl_employees', $employee_details);

        $result['message'] = 'Employee Added Successfully';
        $result['status'] = true;

        json($result);
    }

}