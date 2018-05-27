<?php 

class StudentModel extends MY_Model {

	public $attributes = [];

	public function setAttr($data){
		foreach ($data as $key => $value) {
			if($key == 'dob'){
				$this->attributes[$key] = strtotime($value);
			}
			$this->attributes[$key] = $value;
		}
		$this->attributes['CreatedAt'] = time();
		$this->attributes['UpdatedAt'] = time();
		$this->attributes['CreatedBy'] = $this->ion_auth->user()->row()->id;
		$this->attributes['UpdatedBy'] = $this->ion_auth->user()->row()->id;
	}

	public function create(){
		if ($this->db->insert('students', $this->attributes)) {
           	return $this->attributes;
        } else {
           	return false;
        }
	}

	public function getStudents(){
		$query = $this->db->get('students');
        return $query->result();
	}
}