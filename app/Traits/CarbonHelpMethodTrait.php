<?php

namespace App\Traits;

use Carbon\Carbon;

trait CarbonHelpMethodTrait
{
    
    public function currentTime()
    {
        $currentTime = Carbon::now();
        
        return $currentTime;
    }
    
    public function currentYear()
    {
        $currentYear = Carbon::now()->year;
        
        return $currentYear;
    }

    public function firstDayOfYear($year)
    {
        $firstDayOfYear = Carbon::create($year)->startOfYear()->toDateString();
        
        return $firstDayOfYear;
    }

    public function lastDayOfYear($year)
    {
        $lastDayOfYear = Carbon::create($year)->endOfYear()->toDateString();
        
        return $lastDayOfYear;
    }
    
    public function currentMonth()
    {
        $currentMonth = Carbon::now()->month;
        
        return $currentMonth;
    }

    public function firstDayOfMonth($year,$month)
    {
        $firstDayOfMonth = Carbon::create($year,$month)->startOfMonth()->toDateString();
        
        return $firstDayOfMonth;
    }

    public function lastDayOfMonth($year,$month)
    {
        $lastDayOfMonth = Carbon::create($year,$month)->endOfMonth()->toDateString();
        
        return $lastDayOfMonth;
    }

    public function formattedDateYmd ($date)
    {
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        
        return $formattedDate;
    }

    public function formattedDateYmdHis ($date)
    {
        $formattedDate = Carbon::parse($date)->format('Y-m-d H:i:s');
        
        return $formattedDate;
    }

    public function milliseconds ()
    {
        $now = Carbon::now();
        $milliseconds = $now->timestamp * 1000 + intval($now->micro / 1000);
        
        return $milliseconds;
    }
}