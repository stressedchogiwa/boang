<?php 

class Materials extends MY_Controller{
    
    public function index(){
        $this->load_page_admin('materials');
    }

    public function addMaterials() {
        $message = '';
        $status = null;

        $config['allowed_types'] = 'pdf';
        $config['upload_path'] = './assets/uploads/materials/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('material')){ 
            $fileData = $this->upload->data(); 
            $data['file_name'] = $fileData['file_name'];
            $data['material_name'] = $_POST['material_title'];

            insert('tbl_materials', $data);

            $message = 'Material added successfully';
            $status = true;
        }else{
            $message = $this->upload->display_errors();
            $status = false;
        }
        $res['message'] = $message;
        $res['status'] = $status;
        json($res);
    }

    public function getMaterials(){
        $limit = $this->input->post('length');
        $offset = $this->input->post('start');
        $search = $this->input->post('search');
        $order = $this->input->post('order');
        $draw = $this->input->post('draw');
        $select = "id, file_name, material_name, created_at";
        $column_order = array(
            'id', 'material_name', 'file_name', 'created_at', 
        );

        $join = array();

        // $where = array(
        //     'status' => '!= accepted'
        // );
        $where = "";

        $list = datatables('tbl_materials',$column_order, $select, $where, $join, $limit, $offset ,$search, $order);
        $new_array = array();
        foreach ($list['data'] as $key => $value) {
            $new_array[] = $value;
        }
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $list['count_all'],
            "recordsFiltered" => $list['count'],
            "data" => $new_array,
        );
        json($output);
    }



}