<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';

use app\core\Controller;

class StudentController extends Controller
{

    public function index(): void
    {
       $this->view('students.index');
    }

    public function create(): void
    {
        $this->view('students.create');
    }

    public function show(string $id)
    {
        $this->view('students.edit');
    }

    public function edit(string $id)
    {
        $this->view('students.show');
    }
}
?>