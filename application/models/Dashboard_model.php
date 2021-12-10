<?php 

class Dashboard_model extends CI_Model
{
	
	 

	function __construct() {
        parent::__construct();
    }

    function getAllwarning() {
        return $this->db->where('stok_akhir <= (10)')->from("Bagian")->count_all_results();
    }

    function getAllfile()
    {
        $query = $this->db->query("SELECT Count(*) as file FROM `file`");
        return $query->row()->file;               
    }

    function getAllkatagori()
    {
        $query = $this->db->query("SELECT Count(*) as katagori FROM `katagori`");
        return $query->row()->katagori;               
    }

    function getAllpembelian()
    {
        $query = $this->db->query("SELECT Count(*) as pembelian FROM `pembelian` where status = 0");
        return $query->row()->pembelian;               
    }
	
    function getAllpembayaran()
    {
        $query = $this->db->query("SELECT Count(*) as pembayaran FROM `pembayaran` where status = 0");
        return $query->row()->pembayaran;               
    }

    function getAllpegawai()
    {
        $query = $this->db->query("SELECT Count(*) as pegawai FROM `pegawai` where jabatan != 'Manager'");
        return $query->row()->pegawai;               
    }
    function getAllBagian()
    {
        $query = $this->db->query("SELECT Count(*) as Bagian FROM `Bagian`");
        return $query->row()->Bagian;               
    }

}
 ?>