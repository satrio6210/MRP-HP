<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class admin extends CI_Controller {
    
    function __construct(){
        parent::__construct();      
        $this->load->model('data');
        $this->load->helper('url');
    }
 
    public function index(){        
        $data = $this->data->read('admin')->result_array();
        $admin['admin'] = $data;
        $this->load->view('admin/header');
        $this->load->view('admin/login', $admin);
        $this->load->view('admin/footer');
    }

    public function dashboard(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->read('admin')->result_array();
            $admin['admin'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/dashboard', $admin);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/index'));
        }
    }

    /*function inputkompetisi(){
        if ($this->session->has_userdata('username_admin')) {
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/kompetisi');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}

    function tambahKompetisi(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            $this->session->has_userdata('username_admin');
            echo print_r(array('error' => $this->upload->display_errors()));
        }
        else{
            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $tanggal = $this->input->post('tanggal');
            $penyelenggara = $this->input->post('penyelenggara');
            $lokasi = $this->input->post('lokasi');
            $data = array(
                'id_kompetisi' => $id,
                'nama_kompetisi' => $nama,
                'tanggal_kompetisi' => $tanggal,
                'penyelenggara' => $penyelenggara,
                'lokasi_kompetisi' => $lokasi,
                'gambar_kompetisi' => $url, 
                );
            $this->data->insertData('kompetisi', $data);
            redirect($uri = base_url('index.php/admin/inputkompetisi'), $method = 'auto', $code = NULL);}}

    function datakompetisi(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectKompetisi()->result_array();
            $tampil['datakompetisi'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/datakompetisi', $tampil);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}
    */

    /*
    public function datapenyewaan(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectJadwal2($this->session->userdata('username_admin'))->result_array();
            $jadwal['jadwal'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/datapenyewaan', $jadwal);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/index'));}}
     */       
    /*public function cek_login(){
            $data = $this->data->read('admin')->result_array();
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $read = $this->data->readWhere('admin', $username, 'username_admin')->result_array();
            $pass1 = $this->data->enkripsi($password);
            foreach ($read as $id) {
                $admin = $id['username_admin'];
                $pass = $id['password_admin'];
                $type = $id['type'];
                }
            $pass1 = $this->data->enkripsi($password);	       
            if ($username==$admin) {
                if ($pass1==$pass) {
                    $pass1 = $this->data->enkripsi($password);
                    $data = array(
                        'username_admin'=>$admin,
                        'type'=>$type
                    );
                    $this->session->set_userdata($data);
                    $this->load->view('admin/headermasuk');
                    $this->load->view('admin/dashboard');
                    $this->load->view('admin/footer');
                            
                }
                else{
                    $this->session->set_flashdata('pesan', '<strong>Maaf</strong> Password anda salah.
                            ');
                    redirect('index.php/admin/index');
                } 
            }
            else{
                $this->session->set_flashdata('pesan', '<strong>Maaf</strong> Username anda salah.
                            ');
               redirect(base_url('index.php/admin/index'));}}*/

               //----------------------------------------------- cek login original diatas ^^^

    public function cek_login(){
            $data = $this->data->read('admin')->result_array();
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $read = $this->data->readWhere('admin', $username, 'username_admin')->result_array();
            $pass1 = $password;
            foreach ($read as $id) {
                $admin = $id['username_admin'];
                $pass = $id['password_admin'];
                $type = $id['type'];
                }
            $pass1 = $password;         
            if ($username==$admin) {
                if ($pass1==$pass) {
                    $pass1 = $password;
                    $data = array(
                        'username_admin'=>$admin,
                        'type'=>$type
                    );
                    $this->session->set_userdata($data);
                    $this->load->view('admin/headermasuk');
                    $this->load->view('admin/dashboard');
                    $this->load->view('admin/footer');
                            
                }
                else{
                    $this->session->set_flashdata('pesan', '<strong>Maaf</strong> Password anda salah.
                            ');
                    redirect('index.php/admin/index');
                } 
            }
            else{
                $this->session->set_flashdata('pesan', '<strong>Maaf</strong> Username anda salah.
                            ');
               redirect(base_url('index.php/admin/index'));}}


    function deleteDataLapangan($id){  
        $where = array('id_lapangan' => $id ); 
        $res = $this->data->deleteLapangan($where);  
        redirect($uri = base_url('index.php/admin/datalapangan'), $method = 'auto', $code = NULL);
    }

    function login(){
        if ($this->session->has_userdata('username_admin')) {
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/index'));}}

    function logout(){
        $this->session->sess_destroy();
        $this->load->view('admin/header');
        $this->load->view('admin/login');
        $this->load->view('admin/footer');
        redirect(base_url('index.php/admin'));}

    /*function inputlapangan(){
        if ($this->session->has_userdata('username_admin')) {
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/lapangan');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}

    function tambahLapangan(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            $this->session->has_userdata('username_admin');
            echo print_r(array('error' => $this->upload->display_errors()));
        }
        else{
            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $detail = $this->input->post('detail');
            $type = $this->input->post('type');
            $admin = $this->input->post('admin');
            $tarifmhs = $this->input->post('tarifmhs');
            $tarifnon = $this->input->post('tarifnon');
            $data = array(
                'id_lapangan' => $id,
                'nama_lapangan' => $nama,
                'detail_lapangan' => $detail,
                'pemilik' => $admin,
                'type'=> $type,
                'tarif_student' => $tarifmhs,
                'tarif_umum' => $tarifnon,
                'gambar_lapangan' => $url, 
                );
            $this->data->insertData('lapangan', $data);
            redirect($uri = base_url('index.php/admin/inputlapangan'), $method = 'auto', $code = NULL);}}

    function datalapangan(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectLapangan($this->session->userdata('username_admin'))->result_array();
            $tampil['datalapangan'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/datalapangan', $tampil);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}

    function editDataLapangan($id){
        $update = $this->data->getDataLapangan("where id_lapangan = '$id'");

            $image= $update[0]['gambar_lapangan'];
            $id = $update[0]['id_lapangan'];
            $nama = $update[0]['nama_lapangan'];
            $detail = $update[0]['detail_lapangan'];
            $admin = $update[0]['pemilik'];
            $type = $update[0]['type'];
            $tarifmhs = $update[0]['tarif_student'];
            $tarifnon = $update[0]['tarif_umum'];
            $data = array(
                'id_lapangan' => $id,
                'nama_lapangan' => $nama,
                'detail_lapangan' => $detail,
                'pemilik' => $admin,
                'type' => $type,
                'tarif_student' => $tarifmhs,
                'tarif_umum' => $tarifnon,
                'gambar_lapangan' => $image, 
                );
        $this->load->view('admin/headermasuk');
        $this->load->view('admin/editDataLapangan', $data);
        $this->load->view('admin/footer');}

    function doEditLapangan(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            echo print_r(array('error' => $this->upload->display_errors()));    
            //redirect(base_url());
        }
        else{
            $id = $_POST['id'];
            $where = array('id_lapangan' => $id);

            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $detail = $this->input->post('detail');
            $type = $this->input->post('type');
            $admin = $this->input->post('admin');
            $tarifmhs = $this->input->post('tarifmhs');
            $tarifnon = $this->input->post('tarifnon');
            $data = array(
                'id_lapangan' => $id,
                'nama_lapangan' => $nama,
                'detail_lapangan' => $detail,
                'pemilik' => $admin,
                'type'=> $type,
                'tarif_student' => $tarifmhs,
                'tarif_umum' => $tarifnon,
                'gambar_lapangan' => $url, 
                );
            $this->data->updateData('lapangan', $data, $where);
            redirect($uri = base_url('index.php/admin/inputlapangan'), $method = 'auto', $code = NULL);}}

    function editDataKompetisi($id){
        $update = $this->data->getDataKompetisi("where id_kompetisi = '$id'");

            $image= $update[0]['gambar_kompetisi'];
            $id = $update[0]['id_kompetisi'];
            $nama = $update[0]['nama_kompetisi'];
            $tanggal = $update[0]['tanggal_kompetisi'];
            $penyelenggara = $update[0]['penyelenggara'];
            $lokasi = $update[0]['lokasi_kompetisi'];
            $data = array(
                'id_kompetisi' => $id,
                'nama_kompetisi' => $nama,
                'tanggal_kompetisi' => $tanggal,
                'penyelenggara' => $penyelenggara,
                'lokasi_kompetisi' => $lokasi,
                'gambar_kompetisi' => $image, 
                );
        $this->load->view('admin/headermasuk');
        $this->load->view('admin/editDataKompetisi', $data);
        $this->load->view('admin/footer');}

    function doEditKompetisi(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            echo print_r(array('error' => $this->upload->display_errors()));    
            //redirect(base_url());
        }
        else{
            $id = $_POST['id'];
            $where = array('id_kompetisi' => $id);

            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $tanggal = $this->input->post('tanggal');
            $penyelenggara = $this->input->post('penyelenggara');
            $lokasi = $this->input->post('lokasi');
            $data = array(
                'id_kompetisi' => $id,
                'nama_kompetisi' => $nama,
                'tanggal_kompetisi' => $tanggal,
                'penyelenggara' => $penyelenggara,
                'lokasi_kompetisi' => $lokasi,
                'gambar_kompetisi' => $url, 
                );
            $this->data->updateData('kompetisi', $data, $where);
            redirect($uri = base_url('index.php/admin/inputkompetisi'), $method = 'auto', $code = NULL);}}
    */
    function deleteData($id){  
        $where = array('no' => $id ); 
        $res = $this->data->deleteData($where); 
        redirect('admin/datapesanan');
    }
    
    public function validasi($id){
        $where = array('no' => $id);
        $status ["status"] = 1;
        $this->data->updateData('pesanan', $status, $where);
        $data = $this->data->read('pesanan')->result_array();
        $pesanan['pesanan'] = $data;
        $this->load->view('admin/headermasuk');
        $this->load->view('admin/datapesanan', $pesanan);
        $this->load->view('admin/footer');
    }

    public function validasikain($id){
        $where = array('id' => $id);
        $status ["status"] = 1;
        $this->data->updateData('kain', $status, $where);
        $data = $this->data->read('kain')->result_array();
        $kain['kain'] = $data;
        $this->load->view('admin/headermasuk1');
        $this->load->view('admin/datakain', $kain);
        $this->load->view('admin/footer');
    }


    //-----------------------------------------------------------------------------------------------------------------MRPHP

    function hitungROP(){
        if ($this->session->has_userdata('username_admin')) {

            //$this->data->get_safetystock('kain');
            //$data = $this->data->read('kain')->result_array();
            //$kain['kain'] = $data;

            $this->load->view('admin/headermasuk');
            $this->load->view('admin/hitungROP');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}

    function inputbahan(){
        if ($this->session->has_userdata('username_admin')) {
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/bahan');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));}}

    function inputkain(){
        if ($this->session->has_userdata('username_admin')) {
            $this->load->view('admin/headermasuk1');
            $this->load->view('admin/kain');
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/adminP/login'));}}

    function tambahkain(){
        
            //$url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $kategori = $this->input->post('kategori');
            $warna = $this->input->post('warna');
            $kode_warna = $this->input->post('kode_warna');
            $motif = $this->input->post('motif');
            $qty = $this->input->post('qty');
            $tanggal_pesan = $this->input->post('tanggal_pesan');
            $Status = 0;
            $data = array(
                'id' => $id,
                'kategori' => $kategori,
                'warna' => $warna,
                'kode_warna' => $kode_warna,
                'motif' => $motif,
                'qty' => $qty,
                'tanggal_pesan' => $tanggal_pesan,
                );
            $this->data->insertData('kain', $data);
            redirect($uri = base_url('index.php/admin/inputkain'), $method = 'auto', $code = NULL);}

    function tambahbahan(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            $this->session->has_userdata('username_admin');
            echo print_r(array('error' => $this->upload->display_errors()));
        }
        else{
            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $tanggal = $this->input->post('tanggal');
            $supplier = $this->input->post('supplier');
            $lokasi = $this->input->post('lokasi');
            $Stock = $this->input->post('Stock');
            $data = array(
                'id_bahan' => $id,
                'nama_bahan' => $nama,
                'tanggal_update' => $tanggal,
                'supplier' => $supplier,
                'lokasi_bahan' => $lokasi,
                'Stock' => $Stock,
                'gambar_bahan' => $url, 
                );
            $this->data->insertData('bahan', $data);
            redirect($uri = base_url('index.php/admin/inputbahan'), $method = 'auto', $code = NULL);}}

    function databahan(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectbahan()->result_array();
            $tampil['databahan'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/databahan', $tampil);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));
        }

    }

    function datakain(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectkain()->result_array();
            $tampil['datakain'] = $data;
            $this->load->view('admin/headermasuk1');
            $this->load->view('admin/datakain', $tampil);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));
        }

    }

    function datakain1(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectkain()->result_array();
            $tampil['datakain'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/datakain', $tampil);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/login'));
        }

    }

    function deleteDatabahan($id){  
        $where = array('id_bahan' => $id ); 
        $res = $this->data->deletebahan($where);  
        redirect($uri = base_url('index.php/admin/databahan'), $method = 'auto', $code = NULL);
    }

    function editDatabahan($id){
        $update = $this->data->getDatabahan("where id_bahan = '$id'");

            $image= $update[0]['gambar_bahan'];
            $id = $update[0]['id_bahan'];
            $nama = $update[0]['nama_bahan'];
            $tanggal = $update[0]['tanggal_update'];
            $supplier = $update[0]['supplier'];
            $lokasi = $update[0]['lokasi_bahan'];
            $Stock = $update[0]['Stock'];
            $data = array(
                'id_bahan' => $id,
                'nama_bahan' => $nama,
                'tanggal_update' => $tanggal,
                'supplier' => $supplier,
                'lokasi_bahan' => $lokasi,
                'Stock' => $Stock,
                'gambar_bahan' => $image, 
                );
        $this->load->view('admin/headermasuk');
        $this->load->view('admin/editDatabahan', $data);
        $this->load->view('admin/footer');}


    function doEditbahan(){
        $config['upload_path']          = './assets/lapangan/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')) {
            echo print_r(array('error' => $this->upload->display_errors()));    
            //redirect(base_url());
        }
        else{
            $id = $_POST['id'];
            $where = array('id_bahan' => $id);

            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $tanggal = $this->input->post('tanggal');
            $supplier = $this->input->post('supplier');
            $lokasi = $this->input->post('lokasi');
            $Stock = $this->input->post('Stock');
            $data = array(
                'id_bahan' => $id,
                'nama_bahan' => $nama,
                'tanggal_update' => $tanggal,
                'supplier' => $supplier,
                'lokasi_bahan' => $lokasi,
                'Stock' => $Stock,
                'gambar_bahan' => $url, 
                );
            $this->data->updateData('bahan', $data, $where);
            redirect($uri = base_url('index.php/admin/inputbahan'), $method = 'auto', $code = NULL);}}

            public function datapesanan(){
        if ($this->session->has_userdata('username_admin')) {
            $data = $this->data->selectpesanan2($this->session->userdata('username_admin'))->result_array();
            $pesanan['pesanan'] = $data;
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/datapesanan', $pesanan);
            $this->load->view('admin/footer');
        }
        else{
            redirect(base_url('index.php/admin/index'));}}

    function editDatakain($id){
        $update = $this->data->getDatakain("where id = '$id'");

            
            $safetystock = $update[0]['safetystock'];
            $data = array(
                
                'safetystock' => $safetystock, 
                );
        $this->load->view('admin/headermasuk');
        $this->load->view('admin/hitungROP', $data);
        $this->load->view('admin/footer');}

    function hitung(){
        
        $safetystock = $_POST['safetystock'];
        $rr = $_POST['rr'];
        $lt = $_POST['lt'];

        //$safetystock = $this->input->post('safetystock');
        //$rr = $this->input->post('rr');
        //$lt = $this->input->post('lt');

        //echo $safetystock ;
        //echo $rr ;
        //echo $lt ;
        //echo 'TESTING' ;
        $hasil = ($lt*$rr)+($safetystock);
        
        $data = array(
                'safetystock' => $safetystock,
                'rr' => $rr,
                'lt' => $lt,
                'hasil' => $hasil, 
                );
        
            $this->load->view('admin/headermasuk');
            $this->load->view('admin/hasilROP', $data);
            $this->load->view('admin/footer');

    }
    
}