<?php
class Paciente_model extends CI_Model {

    public function obtener_pacientes() {
        return $this->db->get('pacientes')->result();
    }

    public function insertar_paciente($data) {
        return $this->db->insert('pacientes', $data);
    }

    public function eliminar_paciente($id) {
        return $this->db->delete('pacientes', array('id' => $id));
    }

    public function obtener_paciente($id) {
        return $this->db->get_where('pacientes', array('id' => $id))->row();
    }

    public function actualizar_paciente($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pacientes', $data);
    }
}
?>