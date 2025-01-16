<?php
class Hero

{
    protected $p_nama;
    protected $p_health;
    protected $p_attack;

    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
    public function set_health($a_health)
    {
        $this->p_health=$a_health;
    }
    public function set_attack($a_attack)
    {
        $this->p_attack=$a_attack;
    }

    public function get_health()
    {
        echo "Health dari {$this->p_nama} adalah {$this->p_health} <br>";
        

    }

}