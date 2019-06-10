<?php


use App\Riddle;
use App\Team;
use Illuminate\Support\Carbon;

if (!function_exists('is_riddle_completed')) {
    function is_riddle_completed(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        return !is_null($riddle_team) and !is_null($riddle_team->pivot->end_date);
    }
}

if (!function_exists('is_riddle_started')) {
    function is_riddle_started(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        return !is_null($riddle_team) and !is_null($riddle_team->pivot->start_date);
    }
}


if (!function_exists('start_riddle')) {
    function start_riddle(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        if (is_null($riddle_team)) {
            $riddle->teams()->attach($team, ['start_date' => now()]);
        } else if (is_null($riddle_team->pivot->start_date)) {
            $riddle->teams()->updateExistingPivot($team->id, ['start_date' => now()]);
        } else {
            throw new Exception("Riddle already started");
        }
    }
}

if (!function_exists('cancel_riddle')) {
    function cancel_riddle(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        if (is_null($riddle_team) || is_null($riddle_team->pivot->start_date))
            throw new Exception("Riddle not started");
        if (!is_null($riddle_team->pivot->end_start))
            throw new Exception("Riddle already finished");
        $riddle->teams()->updateExistingPivot($team->id, ['start_date' => null]);
    }
}

if (!function_exists('end_riddle')) {
    function end_riddle(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        if (is_null($riddle_team) || is_null($riddle_team->pivot->start_date))
            throw new Exception("Riddle not started");
        if (!is_null($riddle_team->pivot->end_start))
            throw new Exception("Riddle already finished");
        $riddle->teams()->updateExistingPivot($team->id, ['end_date' => now()]);
    }
}


if (!function_exists('riddle_info')) {
    function riddle_info(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        return [
            'id' => $riddle->id,
            'name' => $riddle->name,
            'description' => $riddle->description,
            'url' => $riddle->url,
            'start_date' => is_null($riddle_team) || is_null($riddle_team->pivot->start_date) ? null : new Carbon($riddle_team->pivot->start_date),
            'end_date' => is_null($riddle_team) || is_null($riddle_team->pivot->end_date) ? null : new Carbon($riddle_team->pivot->end_date),
            'line' => $riddle->line
        ];
    }
}

if (!function_exists('riddle_info_for_gm')) {
    function riddle_info_for_gm(Riddle $riddle, Team $team)
    {
        $riddle_team = $riddle->teams->where('id', $team->id)->first();
        return [
            'id' => $riddle->id,
            'start_date' => is_null($riddle_team) || is_null($riddle_team->pivot->start_date) ? null : new Carbon($riddle_team->pivot->start_date),
            'end_date' => is_null($riddle_team) || is_null($riddle_team->pivot->end_date) ? null : new Carbon($riddle_team->pivot->end_date),
        ];
    }
}