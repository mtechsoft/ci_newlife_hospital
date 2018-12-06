<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Frontend_model extends CI_Model {
    
    public function get_dept_info_by_id ($dept_id)
    {
//        $data['dept_id'] = $dept_id
        $row = $this->db->select('*')->from('tbl_department')
//                        ->join('tbl_facilities', 'tbl_facilities.dept_id = tbl_department.dept_id')
                        ->where('dept_id', $dept_id)
                        ->get()
                        ->row();
                return $row;
    }
    public function get_fac_info_by_id ($dept_id)
    {
//      $data['dept_id'] = $dept_id
        $result = $this->db->select('*')->from('tbl_facilities')
//                        ->join('tbl_facilities', 'tbl_facilities.dept_id = tbl_department.dept_id')
                        ->where('dept_id', $dept_id)
                        ->get()
                        ->result();
                return $result;
    }
    public function get_all_department_info()
    {
        $result = $this->db->select('*')->from('tbl_department')->order_by('dept_name', 'ASC')
                        ->join('tbl_admin', 'tbl_admin.admin_id = tbl_department.head_of_dept')
//                        ->where('tbl_admin.admin_role', 2)
                        ->get()
                        ->result();
                return $result;
    }
    public function get_all_unit_info()
    {
        $result = $this->db->select('*')->from('tbl_unit')
                        ->join('tbl_department','tbl_department.dept_id=tbl_unit.dept_id')
                        ->order_by('dept_name', 'ASC')
                        ->get()
                        ->result();
                return $result;
    }
    
    public function get_all_ward_info()
    {
        $result = $this->db->select('*')->from('tbl_ward')->order_by('ward_no', 'ASC')
                        ->join('tbl_unit','tbl_unit.unit_id=tbl_ward.unit_id')
                        ->join('tbl_department','tbl_department.dept_id=tbl_unit.dept_id')
                        ->get()
                        ->result();
                return $result;
    }
    public function get_all_bed_info()
    {
        $result = $this->db->select('*')->from('tbl_bed')->order_by('bed_no', 'ASC')
                        ->join('tbl_ward','tbl_ward.ward_id=tbl_bed.ward_id')
                        ->join('tbl_unit','tbl_unit.unit_id=tbl_ward.unit_id')
                        ->join('tbl_department','tbl_department.dept_id=tbl_unit.dept_id')
                        ->get()
                        ->result();
                return $result;
    }
    public function get_all_cabin_info()
    {
        $result = $this->db->select('*')->from('tbl_cabin')->order_by('cabin_no', 'ASC')
                        ->join('tbl_department','tbl_department.dept_id=tbl_cabin.dept_id')
                        ->get()
                        ->result();
                return $result;
    }
    public function get_all_icu_info()
    {
        $result = $this->db->select('*')->from('tbl_icu')->order_by('icu_no', 'ASC')
                        ->join('tbl_department','tbl_department.dept_id=tbl_icu.dept_id')
                        ->get()
                        ->result();
                return $result;
    }
    
    
}
