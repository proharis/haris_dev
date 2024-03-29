<?php
class Admin_Login_Model extends CI_Model
{
    public function login($record)
    {
        $this->db->where('admin', $record['email']);
        $this->db->where('password', $record['password']);
        return $this->db->get('admin')->result_array($record);
    }
    public function slider_add($slider)
    {
        if ($slider['slider_status'] == "") {
            $slider['slider_status'] = '0';
            $this->db->insert('slider', $slider);
        } else {
            $this->db->insert('slider', $slider);
        }
        return;
    }
    public function showSliders()
    {
        $query = $this->db->get('slider');
        return $query->result();
    }
    public function updateSlider($data, $slider_id)
    {
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slider', $data);
    }
    public function Slider_delete($slider_id)
    {
        $this->db->delete('slider', $slider_id);
        return  $slider_id;
    }
    public function showSlides($slider_id)
    {
        $query = $this->db->get_where("slides", array("slider_id" => $slider_id));
        return $query->result();
    }
    public function slide_add($slide)
    {
        if ($slide['status'] == "") {
            $slide['status'] = '0';
            $this->db->insert('slides', $slide);
        } else {
            $this->db->insert('slides', $slide);
        }
        return;
    }
    public function showSlidesForEdit($slide_id)
    {
        $query = $this->db->get_where("slides", array("slide_id" => $slide_id));
        return $query->result();
    }
    public function slide_edit($data, $slide_id)
    {
        $this->db->where('slide_id', $slide_id);
        $this->db->update('slides', $data);
    }
    public function Slide_status($slide_id, $status)
    {
        $this->db->where('slide_id', $slide_id);
        $this->db->update('slides', $status);
    }
    public function Slider_status($slider_id, $status)
    {
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slider', $status);
    }
    public function countSlides()
    {
        // $this->db->from('Slides')->join('Slider', 'Slider.slider_id = Slides.slider_id');
        $this->db->select('*');
        $this->db->from('Slides');
        $this->db->join('Slider', 'Slider.slider_id = Slides.slider_id');
        $query = $this->db->get();
        return $query->result();
    }
}