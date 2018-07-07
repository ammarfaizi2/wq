<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Turunan extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        $this->load->model('Mturunan');
    }

    public function getDataJSON($id){
        
      $data = $this->Mturunan->get_by_id2($id);
      
        foreach ($data as $value) {
        
            //$this->db->or_where('anak_dari',$value->id);
             echo $value->nama."<br> ";
             $this->db->like('anak_dari',$id);
              $this->db->from("tb_turunan");
        
        $query = $this->db->get();
             foreach ($query->result() as $value) {
                 echo $value->nama."<br> ";
             }
         
        }

 
   

}
    	public function index()
    
	{
		$data['data'] = $this->Mturunan->all_data();
		$this->template->display('data_turunan',$data);
	}
	public function tambah_data(){
		$this->template->display('tambah_turunan');
	}
    public function edit_data($id){
        $data['result'] = $this->Mturunan->get_by_id($id);
        $this->template->display('edit_turunan',$data);
    }
    public function search_by_id($id){
        $data['data'] = $this->Mturunan->get_by_id2($id);
        $data['id'] = $id;
        $this->template->display('turunan_id',$data);
    }
    public function hirikari_turunan(){
        $data['data'] = $this->Mturunan->all_data();
        $this->template->display('all_turunan',$data);
    }
    public function cari_data(){
        $data['data'] = $this->Mturunan->all_data();
        $this->template->display('search_data',$data);
    }
    public function search($id){
    
         if( ! empty($id)){
         $data = $this->Mturunan->search($id);
        
        // Kita load file view.php sambil mengirim data  hasil query function search 
          echo "

<table id='table' class='table table-striped'>
                <tbody>
                    <tr>
                 <th>Nama</th>
        <th>Nama Panggilan</th>
        <th>Nama Istri</th>
        <th>Aksi</th>
                </tr>";
    if( ! empty($data)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
        foreach($data as $data){ // Lakukan looping pada variabel siswa dari controller
            echo "<tr>";
            echo "<td>".$data->nama."</td>";
            echo "<td>".$data->panggilan."</td>";
            echo "<td>".$data->nama_istri."</td>";
            ?>
            <td><a href='<?php echo base_url('turunan/search_by_id/'.$data->anak_dari);?>'  class='btn bg-green btn-flat margin'>  View Data</a></td>
        <?php   echo "</tr>";
        }
    }else{ // Jika data tidak ada
        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
    }
    echo"       </tbody></table>";
       }
       
    
    }
	 public function proses_input(){
      //membuat konfigurasi
	 	if($this->input->post("parent")==""){
	 		$parent = "";
            $anak_dari = "A1";
	 		$turunan_ke = 1;
	 	}else {
	 		$parent = $this->input->post('parent');
	 			$result = $this->db->get_where('tb_turunan', array('id' => $parent))->row_array();
                $k=$result['anak_dari'];
                $sql="SELECT MAX(anak_dari) as maxKode, nama FROM `tb_turunan` WHERE anak_dari LIKE '$k%' AND parent = $parent";
                $resulta = $this->db->query($sql)->row_array();
                $anak = $resulta['maxKode'];
                if(!empty($anak)){
               $noUrut = substr($anak,-1);
$noUrut++;
$jum=strlen($anak);
$ha=$jum-1;
$kodeT=substr($anak,0,$ha);

$anak_dari= $kodeT.$noUrut;
        }else {
            
            $anak_dari = $k."A1";
        }

	 		$turun = $result['turunan_ke'];
	 		$turunan_ke = $turun + 1;

	 	}

      $data = array(
                'anak_dari'=>$anak_dari,
                'parent' => $parent,
                'turunan_ke'=>$turunan_ke,
                'nama' => $this->input->post('nama_lengkap'),
                'panggilan' => $this->input->post('nama_panggilan'),
                'nama_istri' => $this->input->post('nama_istri'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'no_telp' => $this->input->post('no_telp'),
                'no_hp' => $this->input->post('no_hp'),

            );
 
        if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }
 
        $insert = $this->Mturunan->save($data);
        redirect('turunan');

  }
   public function proses_update()
    {
        if($this->input->post("parent")==""){
            $parent = "";
            $anak_dari = "A1";
            $turunan_ke = 1;
        }else {
            $parent = $this->input->post('parent');
                $result = $this->db->get_where('tb_turunan', array('id' => $parent))->row_array();
                $k=$result['anak_dari'];
                $sql="SELECT MAX(anak_dari) as maxKode, nama FROM `tb_turunan` WHERE anak_dari LIKE '$k%' AND parent = $parent";
                $resulta = $this->db->query($sql)->row_array();
                $anak = $resulta['maxKode'];
                if(!empty($anak)){
               $noUrut = substr($anak,-1);
$noUrut++;
$jum=strlen($anak);
$ha=$jum-1;
$kodeT=substr($anak,0,$ha);

$anak_dari= $kodeT.$noUrut;
        }else {
            
            $anak_dari = $k."A1";
        }

            $turun = $result['turunan_ke'];
            $turunan_ke = $turun + 1;

        }

      $data = array(
                'anak_dari' => $anak_dari,
                'turunan_ke'=>$turunan_ke,
                'nama' => $this->input->post('nama_lengkap'),
                'panggilan' => $this->input->post('nama_panggilan'),
                'nama_istri' => $this->input->post('nama_istri'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'no_telp' => $this->input->post('no_telp'),
                'no_hp' => $this->input->post('no_hp'),

            );
            
 
        if($this->input->post('remove_photo')) // if remove photo checked
        {
            if(file_exists('./assets/images/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                unlink('./assets/images/'.$this->input->post('remove_photo'));
            $data['foto'] = '';
        }
 
        if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();
             
            //delete file
            $person = $this->Mturunan->get_by_id($this->input->post('id'));
            if(file_exists('./assets/images/'.$person->foto) && $person->foto)
                unlink('./assets/images/'.$person->foto);
 
            $data['foto'] = $upload;
        }
 
        $this->Mturunan->update(array('id' => $this->input->post('id')), $data);
        redirect('turunan');
    }
 
    public function hapus_data($id)
    {
        //delete file
        $person = $this->Mturunan->get_by_id($id);
        if(file_exists('./assets/images/'.$person->foto) && $person->foto)
            unlink('./assets/images/'.$person->foto);
         
        $this->Mturunan->delete_by_id($id);
        redirect('turunan');
    }
 
    private function _do_upload()
    {
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
 
        $this->load->library('upload',$config);
 
        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        $file = $this->upload->data();
        return $file['file_name'];
    }
	
}

