<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\WisataModel;

class Admin extends BaseController
{
    protected $userModel;
    protected $wisataModel;
    // protected $adminModel;
    // public function __construct()
    // {
    //     $this->adminModel = new AdminModel();
    // }

    // public function index()
    // {
    //     $users = $this->adminPanel->findAll();
    //     $data = [
    //         'title' => 'Dashboard Admin | Admin-Sivax',
    //         'user' => $users

    //     ];
    //     return view('admin/index', $data);
    // }
    // public function edit()
    // {
    //     $data = [
    //         'title' => 'Edit user | Admin-Sivax ',
    //         'nav' => 'daftar',
    //     ];
    //     return view('admin/edit', $data);
    // }

    // TUTORIAL KOTAKODE
    public function __construct()
    {
        $this->session = session();
        $this->wisataModel = new WisataModel();
        $this->users = new USerModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Gedog Tourism'
        ];
        //cek apakah ada session bernama isiLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }

        return view('admin/index', $data);
    }
    public function kelolaWisata()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }
        session();
        helper(['form']);
        $data = [
            'title' => "admin - kelolaWisata",
            'wisata' => $this->wisataModel->paginate(10),
            'pager' => $this->wisataModel->pager
        ];
        return view('admin/kelolaWisata', $data);
    }
    public function create()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }
        session();
        helper(['form']);
        $data = [
            'title' => 'admin || Tambah Wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tambahWisata', $data);
    }
    public function save()
    {
        // if (!$this->validate([
        //     'namaWisata' => [
        //         'rules' => 'required|is_unique[wisata.nama_wisata]',
        //         'errors' => [
        //             'is_unique' => 'Masukkan {field} lain. NamaWisata sudah terdaftar'
        //         ]
        //     ],
        //     'gambar' => [
        //         'rules' => 'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,2048]',
        //         'errors' => [
        //             'uploaded' => 'Harus Ada File yang diupload',
        //             'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
        //             'max_size' => 'Ukuran File Maksimal 2 MB'
        //         ]
        //     ]
        //     // 'deskripsi' => [
        //     //     'rules' => 'required|is_unique[wisata.namaWisata]',
        //     //     'errors' => [
        //     //         'is_unique' => 'Masukkan {field} lain. NamaWisata sudah terdaftar'
        //     //     ]
        //     // ], DESKRIPSI MINIMAL HARUS 10 KATA
        //     // 'lokasi' => [
        //     //     'rules' => 'required|is_unique[wisata.namaWisata]',
        //     //     'errors' => [
        //     //         'is_unique' => 'Masukkan {field} lain. NamaWisata sudah terdaftar'
        //     //     ]
        //     // ]

        // ])) {

        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/admin/addWisata')->withInput()->with('validation', $validation);
        // }

        // $data = $this->request->getPost();

        // //masukan data ke database
        // $this->wisataModel->save([
        //     'namaWisata' => $data['namaWisata'],
        //     'gambar' => $data['gambar'],
        //     'deskripsi' => $data['deskripsi'],
        //     'lokasi' => $data['lokasi']
        // ]);


        // //arahkan ke halaman login
        // session()->setFlashdata('tambah', 'Data berhasil ditambahkan');
        // return redirect()->to('/admin/kelolaWisata');

        if (!$this->validate([
            'namaWisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new WisataModel();
        $dataBerkas = $this->request->getFile('berkas');
        $dataBerkas->move('uploads/');
        $fileName = $dataBerkas->getName();
        $berkas->save([
            'nama_wisata' => $this->request->getPost('namaWisata'),
            'gambar' => $fileName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lokasi' => $this->request->getPost('lokasi')
        ]);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('/admin/kelolaWisata'));
    }
    public function edit($id)
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }
        session();
        helper(['form']);
        $data = [
            'title' => 'admin || editWisata',
            'validation' => \Config\Services::validation(),
            'wisata' => $this->wisataModel->getWisata($id)
        ];
        return view('admin/editWisata', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'namaWisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new WisataModel();
        $dataBerkas = $this->request->getFile('berkas');
        $dataBerkas->move('uploads/');
        $fileName = $dataBerkas->getName();
        $berkas->save([
            'id' => $id,
            'nama_wisata' => $this->request->getPost('namaWisata'),
            'gambar' => $fileName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lokasi' => $this->request->getPost('lokasi')
        ]);
        session()->setFlashdata('update', 'Berkas Berhasil update');
        return redirect()->to(base_url('/admin/kelolaWisata'));
    }
    public function delete($id)
    {
        $this->wisataModel->delete($id);
        return redirect()->to('/admin/kelolaWisata');
    }
}
