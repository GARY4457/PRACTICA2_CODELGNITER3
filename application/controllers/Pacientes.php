<?php
class Pacientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Paciente_model');
    }

    public function index() {
        $data['pacientes'] = $this->Paciente_model->obtener_pacientes();
        $this->load->view('pacientes/index', $data);
    }

    public function crear() {

        $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'diagnostico' => $this->input->post('diagnostico'),
            'fecha_ingreso' => $this->input->post('fecha_ingreso')
        );

        $this->Paciente_model->insertar_paciente($data);

        redirect('pacientes');
    }

    public function eliminar($id) {
        $this->Paciente_model->eliminar_paciente($id);
        redirect('pacientes');
    }
    public function editar($id) {

    $data['paciente'] = $this->Paciente_model->obtener_paciente($id);

    $this->load->view('pacientes/editar', $data);
}

public function actualizar($id) {

    $data = array(
        'nombre_completo' => $this->input->post('nombre_completo'),
        'diagnostico' => $this->input->post('diagnostico'),
        'fecha_ingreso' => $this->input->post('fecha_ingreso')
    );

    $this->Paciente_model->actualizar_paciente($id, $data);

    redirect('pacientes');
}
}
?>