<?php
class News_model extends CI_Model {

        public function get_data()
        {
                return $this->db->get('news')->result_array();
        }
        // KODE DARI DOCUMENTASI CODE IGNITER YG ASLI :

//         public function __construct()
//         {
//                 $this->load->database();
//         }

//         public function get_news($slug = FALSE)
// {
//         if ($slug === FALSE)
//         {
//                 $query = $this->db->get('news');
//                 return $query->result_array();
//         }

//         $query = $this->db->get_where('news', array('slug' => $slug));
//         return $query->row_array();
// }

//         public function set_news() 
//         {
//                 $this->load->helper('url');

//                 $slug = url_title($this->input->post('title'), 'dast', TRUE);

//                   $data = array(
//         'title' => $this->input->post('title'),
//         'slug' => $slug,
//         'text' => $this->input->post('text')
//     );
//         }
}