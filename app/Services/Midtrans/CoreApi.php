<?php


namespace App\Services\Midtrans;

use Midtrans\CoreApi as CoreApiMidtrans;


class CoreApi extends Midtrans {

    public function __construct()
    {
        parent::__construct();
    }

    public function charge($params)
    {
        $snapToken = CoreApiMidtrans::charge($params);

        return $snapToken;
    }
}
