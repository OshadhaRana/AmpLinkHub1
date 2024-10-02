<?php

namespace App\Http\Controllers;

use App\Models\BatteryReplacement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; // Import the Auth facade


class BatteryReplacementController extends Controller
{
    public function Replacementstore(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'replacement_date' => 'required|date',
        ]);

        // Create the battery replacement record
        BatteryReplacement::create([
            'user_id' => $request->user_id,
            'replacement_date' => $request->replacement_date,
        ]);

        return response()->json(['message' => 'Battery replacement saved successfully']);
    }


    public function getBatteryPercentage()
    {
        // Get the authenticated user
        $user = Auth::user();
        $userId = $user->id;
        $userName = $user->name;  // Fetch the authenticated user's name

        // Fetch battery replacement records for the user, ordered by latest date
        $replacements = BatteryReplacement::where('user_id', $userId)
            ->orderBy('replacement_date', 'desc')
            ->get();

        // Initialize variables
        $batteryPercentage = 0;
        $estimatedLifeDays = 0;
        $timeSinceLastReplacement = 0;

        // If only one replacement, assume the battery will last 5 years (1825 days)
        if ($replacements->count() == 1) {
            $latestReplacement = $replacements->first();

            // Calculate the time since the last replacement
            $timeSinceLastReplacement = Carbon::parse($latestReplacement->replacement_date)
                ->diffInDays(Carbon::now());

            // Assume the battery will last for 1825 days (5 years)
            $batteryLifeSpan = 1825; // 5 years

            // Calculate the battery percentage based on the time since the last replacement
            $batteryLifeRemaining = 1 - ($timeSinceLastReplacement / $batteryLifeSpan);

            // Convert to a percentage and ensure it doesn't exceed 100%
            $batteryPercentage = max(0, min(100, round($batteryLifeRemaining * 100)));

            $estimatedLifeDays = $batteryLifeSpan;
        }

        // If two or more replacements exist
        if ($replacements->count() >= 2) {
            // Get the two most recent replacements
            $latestReplacement = $replacements->first();
            $previousReplacement = $replacements->skip(1)->first();  // The second latest

            // Step 1: Calculate the time difference between the two latest replacements
            $timeBetweenReplacements = Carbon::parse($latestReplacement->replacement_date)
                ->diffInDays(Carbon::parse($previousReplacement->replacement_date));

            // Step 2: Calculate the time since the last replacement
            $timeSinceLastReplacement = Carbon::parse($latestReplacement->replacement_date)
                ->diffInDays(Carbon::now());

            // Step 3: Calculate the battery percentage based on the time since last replacement
            $batteryLifeRemaining = 1 - ($timeSinceLastReplacement / $timeBetweenReplacements);

            // Convert to a percentage and ensure it doesn't exceed 100%
            $batteryPercentage = max(0, min(100, round($batteryLifeRemaining * 100)));

            $estimatedLifeDays = $timeBetweenReplacements;
        }

        // Pass values to the view, including the authenticated user's name
        return view('batterypercentage')->with([
            'user_name' => $userName,
            'battery_percentage' => $batteryPercentage,
            'estimated_life_days' => $estimatedLifeDays,
            'days_since_last_replacement' => $timeSinceLastReplacement,
            'error' => null // No error, so set to null
        ]);
    }

    public function getBatteryReplacementStats()
    {
        // Assuming your `battery_replacements` table has a `brand` column
        $batteryData = DB::table('battery_replacements')
            ->select(DB::raw('brand, COUNT(*) as total'))
            ->groupBy('brand')
            ->get();

        return view('your_view_name', compact('batteryData'));
    }




}

