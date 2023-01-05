<?php
class xu_ly
{
    private $SoKhach;
    private $Ngay;
    private $LoaiTiec;
    private $DiaDiem;
    private $Ten;
    private $DiaChi;
    private $GioiTinh;
    private $Tuoi;
    private $ThongTin;
    private $YeuCau;

    public function setSoKhach($SoKhach)
    {
        $this->SoKhach = $SoKhach;
    }
    public function getSoKhach()
    {
        return $this->SoKhach;
    }
    public function setNgay($Ngay)
    {
        $this->Ngay = $Ngay;
    }
    public function getNgay()
    {
        return $this->Ngay;
    }
    public function setLoaiTiec($LoaiTiec)
    {
        $this->LoaiTiec = $LoaiTiec;
    }
    public function getLoaiTiec()
    {
        return $this->LoaiTiec;
    }
    public function setDiaDiem($DiaDiem)
    {
        $this->DiaDiem = $DiaDiem;
    }
    public function getDiaDiem()
    {
        return $this->DiaDiem;
    }
    public function setTen($Ten)
    {
        $this->Ten = $Ten;
    }
    public function getTen()
    {
        return $this->Ten;
    }
    public function setDiaChi($DiaChi)
    {
        $this->DiaChi = $DiaChi;
    }
    public function getDiaChi()
    {
        return $this->DiaChi;
    }
    public function setGioiTinh($GioiTinh)
    {
        $this->GioiTinh = $GioiTinh;
    }
    public function getGioiTinh()
    {
        return $this->GioiTinh;
    }
    public function setThongTin($ThongTin)
    {
        $this->ThongTin = $ThongTin;
    }
    public function getThongTin()
    {
        return $this->ThongTin;
    }
    public function setYeuCau($YeuCau)
    {
        $this->YeuCau = $YeuCau;
    }
    public function getYeuCau()
    {
        return $this->YeuCau;
    }
    public function setTuoi($Tuoi)
    {
        $this->Tuoi = $Tuoi;
    }
    public function getTuoi()
    {
        return $this->Tuoi;
    }
    public function setchitietngay($chitietngay)
    {
        $this->chitietngay = $chitietngay;
    }
    public function getchitietngay()
    {
        return $this->chitietngay;
    }
}
