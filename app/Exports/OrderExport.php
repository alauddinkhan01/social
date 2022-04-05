<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Order::getallorder());
    }

    public function headings():array{
        return [
            'id',
            'customer name',
            'total products',
            'total amount',
            'order_sr'
        ];
    }
}
