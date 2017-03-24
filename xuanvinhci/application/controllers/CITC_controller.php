    <?php 
class Chi_controller extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->model('CITC_model');
      
    }
    function Them_CITC()
    {
      
         $this->load->library("form_validation");  
              if($this->input->post('btnThemChi')!='')
                    {
                        $this->form_validation->set_rules("LiDo_C","Lí Do Chi","required");
                        $this->form_validation->set_rules("SoTien_C","Số Tiền Chi","required");
                        $this->form_validation->set_rules("Ngay_C","Ngày Chi","required");
                        $this->form_validation->set_rules("Thang_C","Tháng Chi","required");
                        $this->form_validation->set_rules("Nam_C","Năm Chi","required");
                        $this->form_validation->set_rules("Date_C","Date Chi","required");
                        $this->form_validation->set_rules("ID_TK","Khoảng Chi","required");
                              if($this->form_validation->run()==true)
                                  {
                                    $data_insert = array(
                                                    "LiDo_C"=>$this->input->post("LiDo_C"),
                                                    "SoTien_C"=>$this->input->post("SoTien_C"),
                                                    "Ngay_C"=>$this->input->post("Ngay_C"),
                                                    "Thang_C"=>$this->input->post("Thang_C"),
                                                    "Nam_C"=>$this->input->post("Nam_C"),
                                                    "Date_C"=>$this->input->post("Date_C"),
                                                    "ID_TK"=>$this->input->post("ID_TK")

                                                 );        
                                     $this->Chi_model->Insert_chi($data_insert);
                                      $data_update = array (
                                              "taikhoan.SoTien_TK"
                                        )
                                  
                                   }
                              else
                                  {
                                    echo 'input that bai';
                                  }
                    }  
              else
                  {
                     echo 'kiem tra that bai';
                  }

        $data['temp']='admin/Themchi_view';
        $this->load->view('admin/index',$data);

    }
    ?>