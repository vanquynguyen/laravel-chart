<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $dataSet = Data::all();

        $dataSet->transform(function ($item) {
            return [
                'labels' => $item->date->format('F'),
                'data' => $item->value,
            ];
        })->toArray();

        return $this->convertData($dataSet);
    }

    /**
     * @param $dataSet
     * @return array
     */
    protected function convertData($dataSet)
    {
        $labels = [];
        $data = [];
        foreach ($dataSet as $item) {
            $data[] = $item['data'];
            $labels[] = $item['labels'];
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }
}
