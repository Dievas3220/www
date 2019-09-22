<?php

class Doctors
{
    private $doctors = [
        '1' => 'dr. Vytas',
        '2' => 'dr. Ona',
        '3' => 'dr. Aloyzas',
    ];

    public function getDoctors()
    {
        return $this->doctors;
    }

    public function getDoctorById($id)
    {
        return $this->doctors[$id];
    }
}
