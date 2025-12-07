<?php
class UserController
{
    use Render;
    public function index()
    {
        $users = UserModel::getAllUsers();
        $this->renderView('user/index', [
            'users' => $users
        ]);
    }

    public function register()
    {
        $users = UserModel::getAllUsers();
        $this->renderView('user/register', [
            'users' => $users
        ]);
    }

    public function login()
    {
        $users = UserModel::getAllUsers();
        $this->renderView('user/login', [
            'users' => $users
        ]);
    }

    public function logout()
    {
        $users = UserModel::getAllUsers();
        $this->renderView('user/logout', [
            'users' => $users
        ]);
    }
}