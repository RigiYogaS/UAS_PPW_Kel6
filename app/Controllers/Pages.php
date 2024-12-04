<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use App\Controllers\BaseController;

class pages extends BaseController
{
    protected $penggunaModel;
    protected $db;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
        $this->db      = \Config\Database::connect();
    }
    public function registersimpan()
    {
        $email = $this->request->getVar('email');
        $pengguna = $this->penggunaModel->where('email', $email)->first();
        if ($pengguna) {
            session()->setFlashdata('error', 'Email has been registered, please use another email');
            return redirect()->to('/auth/regis');
        } else {
            $this->penggunaModel->save([
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ]);
            session()->setFlashdata('success', 'Registration Successful');
            return redirect()->to('/auth/login');
        }
    }
    public function doLogin()
    {
        $session = session();
        $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $pengguna = $this->penggunaModel->where('email', $email)->first();
        if ($pengguna) {
            $pass = $pengguna['password'];
            if ($password === $pass) {
                $ses_data = [
                    'idpengguna' => $pengguna['idpengguna'],
                    'username' => $pengguna['username'],
                    'email' => $pengguna['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('success', 'login successful');
                return redirect()->to('/dashboard/index');
            } else {
                session()->setFlashdata('error', 'Incorrect password');
                return redirect()->to('/auth/login');
            }
        } else {
            session()->setFlashdata('error', 'Email not registered');
            return redirect()->to('/auth/login');
        }
    }
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

    public function logout()
    {
        $session = session();
        $session->remove(['idpengguna', 'username', 'email', 'isLoggedIn']);
        session()->setFlashdata('success', 'You have logged out');
        return redirect()->to('');
    }
};
