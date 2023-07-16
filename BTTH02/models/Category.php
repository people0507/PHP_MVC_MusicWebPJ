<?php
class Category {
    private $ma_tloai;
    private $ten_tloai;

    public function __construct($ma_tloai, $ten_tloai){
        $this->ma_tloai = $ma_tloai;
        $this->ten_tloai = $ten_tloai;
    }
    public function getMaTloai(){
        return $this->ma_tloai;
    }
    public function getTenTloai(){
        return $this->ten_tloai;
    }
}
