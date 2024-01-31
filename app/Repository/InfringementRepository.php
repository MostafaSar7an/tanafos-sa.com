<?php

namespace App\Repository;
use App\Models\Infringement;
class InfringementRepository implements InfringementRepositoryInterface
{

    public function index()
    {
        $subjects = Subject::get();
        return view('pages.Infringements.Infringements');
    }
}
