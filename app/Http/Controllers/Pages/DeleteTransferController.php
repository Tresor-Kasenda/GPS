<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\TransferAgent;
use Illuminate\Http\Request;

class DeleteTransferController extends Controller
{
    public function __invoke(TransferAgent $transfer)
    {
        $transfer->delete();

        return redirect()->route('agent.lists-transfers');
    }
}
