<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }

    // hasill search
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        if ($keyword) {
            $data['mahasiswa'] = $this->model->search($keyword);
        } else {
            $data['mahasiswa'] = $this->model->findAll();
        }
        return view('mahasiswa_view', $data);
    }

    // detail mahasiswa
    public function detail($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id);
        
        if (!$data['mahasiswa']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mahasiswa tidak ditemukan.');
        }

        return view('mahasiswa_detail', $data);
    }

    // buat data mahasiswa
    public function create()
    {
        return view('mahasiswa_create');
    }

    // simpan data mahasiswa
    public function store()
    {
        $this->model->save([
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ]);
        return redirect()->to('/mahasiswa');
    }


    // edit data mahasiswa
    public function edit($id){
        $data['mahasiswa'] = $this->model->find($id);
        if (!$data['mahasiswa']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mahasiswa tidak ditemukan.');
        }
        return view('mahasiswa_edit', $data);
    }

    // simpan update data mahasiswa
    public function update($id){
        $this->model->update($id, [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    //delete data mahasiswa
    public function delete($id){
        $this->model->delete($id);
        return redirect()->to('/mahasiswa');
    }
}
