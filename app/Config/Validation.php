<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

   
    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $siswa = [
        'nis'     => 'required',
        'nama_siswa'     => 'required',
        'tempat_lahir'     => 'required',
        'jurusan'     => 'required',
        'tgl_lahir'     => 'required',
        'jenis_kelamin'     => 'required',
        'agama'     => 'required',
        'alamat'     => 'required',
        'no_hp'     => 'required',
        'id_kelas'     => 'required',
    ];

    public $siswa_errors = [
        'nis' => [
            'required'    => 'NIS wajib diisi.',
        ],
        'nama_siswa'    => [
            'required' => 'Nama wajib diisi.'
        ],
        'tempat_lahir'    => [
            'required' => 'Tempat Lahir wajib diisi.'
        ],
        'jurusan'    => [
            'required' => 'jurusan  wajib diisi.'
        ],
        'tgl_lahir'    => [
            'required' => 'tanggal lahir  wajib diisi.'
        ],
        'jenis_kelamin'    => [
            'required' => 'jenis Kelamin  wajib diisi.'
        ],
        'agama'    => [
            'required' => 'agama  wajib diisi.'
        ],
        'alamat'    => [
            'required' => 'alamat  wajib diisi.'
        ],
        'no_hp'    => [
            'required' => 'no_hp  wajib diisi.'
        ],
        'id_kelas'    => [
            'required' => 'Kelas wajib diisi.'
        ],
    ];

    public $nilai = [
        'nis'   => 'required',
        'semester'   => 'required',
        'tahun' => 'required'
    ];

    public $nilai_errors = [
        'nis' => [
            'required'  => 'Nis wajib diisi.',
        ],
        'semester' => [
            'required'  => 'Semester wajib diisi.',
        ],
        'tahun'    => [
            'required' => 'Tahun wajib diisi.'
        ]
    ];
}
