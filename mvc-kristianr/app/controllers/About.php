<?php

class  About{
    public function index($nama='Kristian Ronalgo', $pekerjaan='Pelajar'){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}