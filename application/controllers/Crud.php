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
      foreach($data->result() as $row) {
        $output .= '
                  <tr>
                  <td>'.$row->lname.'</td>
                  <td>'.$row->fname.'</td>
                  <td>'.$row->mname.'</td>
                  </tr>
                  ';
      }
    }
    else {
    $output .= '<tr>
              <td colspan="5">No Data Found</td>
              </tr>';
    }


  }

  else {

    $output .= '<tr>
              <td class="center" colspan="5">No Data Found</td>
              </tr>';

  }

  
 
  echo $output;
}

}