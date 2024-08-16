<?php 

namespace App\Controllers;

use App\Models\AccountModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('login');
    }

    public function loginSubmit()
    {
        $model = new AccountModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => true,
            ]);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
