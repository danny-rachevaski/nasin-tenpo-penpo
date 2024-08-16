<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index()
    {
        $gregorianDate = Carbon::now();
        $tokiPonaDate = $this->getTokiPonaDate($gregorianDate);

        return view('index', compact('gregorianDate', 'tokiPonaDate'));
    }

    private function getTokiPonaDate(Carbon $date)
    {
        // Check if today is suno pi toki pona
        if ($date->day == 8 && $date->month == 8) {
            return [
                'dayName' => 'suno pi toki pona',
                'monthName' => 'kipisi lawa',
                'yearName' => $this->getYearName($date),
                'cyclePartName' => $this->getCyclePartName($date),
                'weekName' => 'nanpa wan',
            ];
        }

        // Determine the year cycle
        $epoch = Carbon::create(2001, 8, 8); // Epoch date
        $daysSinceEpoch = $date->diffInDays($epoch) - 3; //because epoch is on suno mama

        $cycleYears = ["tenpo sike kala", "tenpo sike pipi", "tenpo sike akesi", "tenpo sike soweli", "tenpo sike waso", "tenpo sike kijetesantakalu"];
        $cycleParts = ["sin", "kama", "awen", "tawa", "weka"];

        // Calculate cycles
        $yearIndex = floor($daysSinceEpoch / (365.25 * 6)); // 6-year cycle
        $yearInCycle = $daysSinceEpoch % (365.25 * 6) / 365.25;

        $yearCycleName = $cycleYears[(int)$yearInCycle];
        $cyclePartName = $cycleParts[$yearIndex % 5];

        // Calculate the day and month
        $daysInYear = $daysSinceEpoch % (int)(365.25);
        $months = ["kipisi lawa", "kipisi sijelo", "kipisi luka", "kipisi poka", "kipisi noka"];
        $monthIndex = floor($daysInYear / 73);
        $monthName = $months[$monthIndex];

        $daysInMonth = $daysInYear % 73;
        $weeksInMonth = floor($daysInMonth / 15);
        $dayIndex = $daysInMonth % 15;

        $days = [
            "suno kasi",
            "suno pan",
            "suno kule",
            "suno toki",
            "suno moli",
            "suno lete",
            "suno walo",
            "suno nimi",
            "suno seli",
            "suno moku",
            "suno kulupu",
            "suno musi",
            "suno mama",
            "suno nasin",
            "suno penpo"
        ];

        // Adjust for skipped suno moli every 4th week
        if (($weeksInMonth + 1) % 4 == 0 && $dayIndex > 3) {
            $dayIndex += 1;
        }

        $dayName = $days[$dayIndex];

        $weekNames = ["nanpa wan", "nanpa tu", "nanpa tu wan", "nanpa tu tu", "nanpa luka"];
        $weekName = $weekNames[$weeksInMonth];

        return [
            'dayName' => $dayName,
            'weekName' => $weekName,
            'monthName' => $monthName,
            'yearName' => $yearCycleName,
            'cyclePartName' => $cyclePartName,
        ];
    }

    private function getYearName(Carbon $date)
    {
        $epoch = Carbon::create(2001, 8, 8); // Epoch date
        $daysSinceEpoch = $date->diffInDays($epoch);
        $cycleYears = ["tenpo sike kala", "tenpo sike pipi", "tenpo sike akesi", "tenpo sike soweli", "tenpo sike waso", "tenpo sike kijetesantakalu"];
        $yearInCycle = $daysSinceEpoch % (365.25 * 6) / 365.25;
        return $cycleYears[(int)$yearInCycle];
    }

    private function getCyclePartName(Carbon $date)
    {
        $epoch = Carbon::create(2001, 8, 8); // Epoch date
        $daysSinceEpoch = $date->diffInDays($epoch);
        $cycleParts = ["sin", "kama", "awen", "tawa", "weka"];
        $yearIndex = floor($daysSinceEpoch / (365.25 * 6)); // 6-year cycle
        return $cycleParts[$yearIndex % 5];
    }
}
