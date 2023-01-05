<?php
class xu_ly
{
    private $soA;
    private $soB;
    public function ganGiaTriA($bienGan)
    {
        return $this->soA = $bienGan;
    }
    public function ganGiaTriB($bienGan)
    {
        return $this->soB = $bienGan;
    }
    public function layGiaTriA()
    {
        return $this->soA;
    }
    public function layGiaTriB()
    {
        return $this->soB;
    }
    public function tinhTong($soA, $soB)
    {
        return $this->soA + $this->soB;
    }
    public function tinhHieu($soA, $soB)
    {
        return $this->soA - $this->soB;
    }
    public function tinhTich($soA, $soB)
    {
        return $this->soA * $this->soB;
    }
    public function tinhThuong($soA, $soB)
    {
        return $this->soA / $this->soB;
    }
}
