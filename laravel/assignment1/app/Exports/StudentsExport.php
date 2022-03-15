<?php
  
namespace App\Exports;
  
use App\Students;
use Maatwebsite\Excel\Concerns\FromCollection;
  
class StudentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
}