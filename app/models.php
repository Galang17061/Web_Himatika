<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\model\master\m_category_beasiswa;
use App\model\master\m_category_post;
use App\model\master\m_category_keprofesian;
use App\model\master\m_category_olimpiade;
use App\model\master\m_category_berita_terkini;
use App\model\main\beasiswa\d_beasiswa_image;
use App\model\main\beasiswa\d_beasiswa_detail;
use App\model\main\post\d_post_image;
use App\model\main\post\d_post_detail;
use App\model\main\olimpiade\d_olimpiade_image;
use App\model\main\olimpiade\d_olimpiade_detail;
use App\model\main\berita_terkini\d_berita_terkini_image;
use App\model\main\berita_terkini\d_berita_terkini_detail;
use App\model\main\keprofesian\d_keprofesian_image;
use App\model\main\keprofesian\d_keprofesian_detail;

class models extends model
{
    public function User()
    {
        $User = new User();
        return $User;
    }

    public function m_category_beasiswa(){
        $m_category_beasiswa = new m_category_beasiswa();
        return $m_category_beasiswa;
    }

    public function m_category_post(){
        $m_category_post = new m_category_post();
        return $m_category_post;
    }

    public function m_category_olimpiade(){
        $m_category_olimpiade = new m_category_olimpiade();
        return $m_category_olimpiade;
    }

    public function m_category_berita_terkini(){
        $m_category_berita_terkini = new m_category_berita_terkini();
        return $m_category_berita_terkini;
    }

    public function m_category_keprofesian(){
        $m_category_keprofesian = new m_category_keprofesian();
        return $m_category_keprofesian;
    }

    public function d_beasiswa_detail(){
        $d_beasiswa_detail = new d_beasiswa_detail();
        return $d_beasiswa_detail;
    }

    public function d_beasiswa_image(){
        $d_beasiswa_image = new d_beasiswa_image();
        return $d_beasiswa_image;
    }

    public function d_post_detail(){
        $d_post_detail = new d_post_detail();
        return $d_post_detail;
    }

    public function d_post_image(){
        $d_post_image = new d_post_image();
        return $d_post_image;
    }

    public function d_keprofesian_detail(){
        $d_keprofesian_detail = new d_keprofesian_detail();
        return $d_keprofesian_detail;
    }

    public function d_keprofesian_image(){
        $d_keprofesian_image = new d_keprofesian_image();
        return $d_keprofesian_image;
    }

    public function d_olimpiade_detail(){
        $d_olimpiade_detail = new d_olimpiade_detail();
        return $d_olimpiade_detail;
    }

    public function d_olimpiade_image(){
        $d_olimpiade_image = new d_olimpiade_image();
        return $d_olimpiade_image;
    }
    public function d_berita_terkini_detail(){
        $d_berita_terkini_detail = new d_berita_terkini_detail();
        return $d_berita_terkini_detail;
    }

    public function d_berita_terkini_image(){
        $d_berita_terkini_image = new d_berita_terkini_image();
        return $d_berita_terkini_image;
    }

}
