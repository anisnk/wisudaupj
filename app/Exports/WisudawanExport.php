<?php

namespace App\Exports;

use App\Wisudawan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;

// class WisudawanExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Wisudawan::all();
//     }
// }

class WisudawanExport implements FromView
{
    public function view(): View
    {
        return view('wisudawan-excel', [
            'data_wisudawan' => Wisudawan::all()
        ]);
    }
}
