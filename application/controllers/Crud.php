<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

function try(){
  echo "hi";
}

function search(){
  $output = '';
  $query = '';
  
  $this->load->model('crud_model');

  if($this->input->post('query')){

    $query = $this->input->post('query');

    $data = $this->crud_model->fetch_data($query);

    if($data->num_rows() > 0) {
      foreach($data->result() as $key => $row) {
        $output .= '
                  <tr>
                  <td>'.($key+1).'</td>;
                  <td style ="vertical-align:middle;">'.ucwords($row->lname).'</td>
                    <td style ="vertical-align:middle;">'.ucwords($row->fname).'</td>
                    <td style ="vertical-align:middle;">'.ucwords($row->mname).'</td>
                    <td style ="vertical-align:middle;">'.strtoupper($row->course).'</td>
                    <td><button class="view-req btn btn-success" .modal-sm" data-toggle="modal" data-target="#modal-view-req" data-toggle="tooltip" title="View requirements submitted" id='.$row->id.'><i class="ace-icon fa fa-eye"></i></button>
                                  <button class="view-req btn btn-primary" .modal-sm" data-toggle="modal" data-target="#modal-student-update" data-toggle="tooltip" title="Update student" id='.$row->id.'><i class="ace-icon fa fa-edit"></i></button></td>
                  </tr>
                  ';
      }
    }
    else {
    $output .= '<tr>
              <td class="center" colspan="7">No Data Found</td>
              </tr>';
    }
  }

  else {

    $output .= '<tr>
              <td class="center" colspan="7">No Data Found</td>
              </tr>';
  }

  echo $output;
}


function view_req(){
  $output = '';
  $id = '';
  
  $this->load->model('crud_model');

  if($this->input->post('id')){

    $id = $this->input->post('id');

    $data = $this->crud_model->fetch_req($id);

    if($data->num_rows() > 0) {
      $counter = 1;
      foreach($data->result() as $row) {
        
        $output .= '
                  <tr>
                    <td style ="vertical-align:middle;">'.$counter.'</td>
                    <td style ="vertical-align:middle;">'.ucwords($row->name).'</td>
                  </tr>
                  ';

        $counter++;
      }
    }
    else {
    $output .= '<tr>
              <td colspan="2">No Requirements Found</td>
              </tr>';
    }
  }

  else {
    $output .= '<tr>
              <td colspan="2">No Requirements Found</td>
              </tr>';
  }

  echo $output;
}

}