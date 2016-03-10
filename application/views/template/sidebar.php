<?php if("administrator"==$this->session->userdata('level')){
    $this->load->view('template/admin');
}else if("manajer"==$this->session->userdata('level')){
    $this->load->view('template/manajer');
}else if("operator"==$this->session->userdata('level')){
    $this->load->view('template/operator');
}else{
    echo "";
}