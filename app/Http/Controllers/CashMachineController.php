<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\cash_source\Transaction;

class CashMachineController extends Controller
{
    public $request = [];

   /**
    * Constructor.
    *
    * @return void
    */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(Request $request, Transaction $input_cash)
    {
        $Data = $request->all();

        if (count($Data) > 1) {
            $input_cash->validate($this->request);
            $response = $input_cash->inputs($this->request);

            if ($response['status']) {
                return redirect()->route('details', $response);
            } else {
                echo "<pre>";
                die(print_r([
                    'status' => false
                ]));
            }
        } else {
            switch ($Data['type']) {
                case 'creditCard':
                    return view('cash_machine.creditCard', $request)->withData('Data');
                case 'bankTransfer':
                    return view('cash_machine.bankTransfer', $request)->withData('Data');
                default:
                    return view('cash_machine.cash', $request)->withData('Data');
            }
        }
    }

    public function details($id,Transaction $input_cash)
    {
        echo "<pre>";
        print_r($this->request->all());
    }
}