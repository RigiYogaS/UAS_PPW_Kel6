<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index() 
    {
        echo view('/guest/index.php');
    }

    public function film() 
    {
        echo view('/guest/film.php');
    }

    public function news() 
    {
        echo view('/guest/news.php');
    }

    public function review() 
    {
        echo view('/guest/review.php');
    }

    public function about() 
    {
        echo view('/guest/about.php');
    }

    public function signin() 
    {
        echo view('/auth/login.php');
    }

    public function addreview() 
    {
        echo view('/guest/addreview.php');
    }

    public function signup() 
    {
        echo view('/auth/regis.php');
    }

    public function indexDash() 
    {
        echo view('/dashboard/index.php');
    }

    public function filmDash() 
    {
        echo view('/dashboard/film.php');
    }

    public function newsDash() 
    {
        echo view('/dashboard/news.php');
    }

    public function reviewDash() 
    {
        echo view('/dashboard/review.php');
    }

    public function aboutDash() 
    {
        echo view('/dashboard/about.php');
    }

    public function addreviewDash() 
    {
        echo view('/dashboard/addreview.php');
    }
};