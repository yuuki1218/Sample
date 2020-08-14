<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TaskStatus extends Enum
{
    const Moving = "作業中";
    const Finish = "完了";
}
