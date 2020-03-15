


<?php


class Contoh extends CI_Controller {

    public function index()
    {
        $this->load->model('News_model');
        $data['news'] = $this->News_model->get_data();
    
        $this->load->view('news/v_news', $data);
    
    }


    public function what() {
        echo "Hii!";
    }
    
}
?>