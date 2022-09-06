<?php 

namespace App\Controllers;
use App\Models\User;

class AdminController extends Controller{

    public function viewUsers()
    {
        $users = User::all();
        return $this->view('admin.viewusers', ['users' => $users]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return $this->redirect('admin.viewusers');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return $this->view('admin.edituser', ['user' => $user]);
    }

    public function addAnime()
    {
        return $this->view('admin.addanime');
    }

}