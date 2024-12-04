<?php
namespace App\Controllers;
use App\Models\Leak;

class LeaksController {

    public function index() {
        $leaks = Leak::all();
        require '../resources/views/leaks/index.blade.php';
    }

    public function create() {
        require '../resources/views/leaks/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $leakDate = $_POST['leak_date'];
        $lines = $_POST['lines'];
        $sensitivityLevel = $_POST['sensitivity_level'];

        $newLeak = new Leak([
            'name' => $name,
            'company' => $company,
            'leak_date' => $leakDate,
            'lines' => $lines,
            'sensitivity_level' => $sensitivityLevel
        ]);
        $newLeak->save();
        header('Location: /leaks');
    }

    public function edit($id) {
        $leak = (new \App\Models\Leak)->find($id);
        if (!$leak) {
            header('Location: /leaks');
            exit();
        }
        require '../resources/views/leaks/edit.blade.php';
    }

    public function update($id) {
        $leak = (new \App\Models\Leak)->find($id);
        if (!$leak) {
            header('Location: /leaks');
            exit();
        }
        $leak->name = $_POST['name'];
        $leak->company = $_POST['company'];
        $leak->leak_date = $_POST['leak_date'];
        $leak->lines = $_POST['lines'];
        $leak->sensitivity_level = $_POST['sensitivity_level'];
        $leak->save();
        header('Location: /leaks');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /leaks');
            exit();
        }
        $leak = (new \App\Models\Leak)->find($id);
        return require '../resources/views/leaks/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Leak)->delete($id);
        header('Location: /leaks');
    }

    public function confirmDelete($id) {
        $leak = (new \App\Models\Leak)->find($id);
        return require '../resources/views/leaks/delete.blade.php';
    }

    public function view($id) {
        $leak = (new \App\Models\Leak)->find($id);
        if ($leak) {
            require '../resources/views/leaks/view.blade.php';  // Pass the leak data to the view
        } else {
            header('Location: /leaks');
            exit();
        }
    }
}
