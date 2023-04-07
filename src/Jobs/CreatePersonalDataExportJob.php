<?php

namespace Mstfkhazaal\FilamentJet\Jobs;

use Illuminate\Bus\Batchable;
use Spatie\PersonalDataExport\Jobs\CreatePersonalDataExportJob as BaseCreatePersonalDataExportJob;

class CreatePersonalDataExportJob extends BaseCreatePersonalDataExportJob
{
    use Batchable;
}
