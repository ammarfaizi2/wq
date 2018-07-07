<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    	public function index()
	{
		 $sql="SELECT MAX(turunan_ke) as jumKet FROM `tb_turunan`";
                $resulta = $this->db->query($sql)->row_array();
                $jumKet = $resulta['jumKet'];
                $sqla="SELECT count(nama) as jumDat FROM `tb_turunan`";
                $result = $this->db->query($sqla)->row_array();
                $jumDat = $result['jumDat'];
		$data['jumlah_data']=$jumDat;
		$data['jumlah_keturunan']=$jumKet;
		$this->template->display('dashboard',$data);
	}
	public function ubah_password(){
		$this->template->display('ganti_password');
	}
	public function proses_ganti(){
		$this->load->model('Muser');
		$id = $this->session->userdata('u_id');
		$pass= md5($this->input->post('password'));
		$info = array("u_paswd"=>"$pass");
		$this->Muser->update($id,$info);
$this->session->sess_destroy();
        redirect('login');
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

