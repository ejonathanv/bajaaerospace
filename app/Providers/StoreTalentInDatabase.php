<?php

namespace App\Providers;

use App\Models\Talent;
use App\Providers\StoreTalent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreTalentInDatabase
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StoreTalent $event): void
    {
        $request = $event->request;

        info($request->all());

        $talent = new Talent();
        $talent->first_name = $request->first_name;
        $talent->last_name = $request->last_name;
        $talent->email = $request->email;
        $talent->phone = $request->phone;
        $talent->university = $request->university;
        $talent->career = $request->career;
        $talent->academic_level = $request->academic_level;
        $talent->relevant_projects = $request->relevant_projects;
        $talent->skills = json_encode($request->skills);
        
        // Guardamos el archivo en la carpeta public/resumes
        $resumeFile = $request->file('attach_resume');
        $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
        $resumeFile->move(public_path('resumes'), $resumeFileName);

        $talent->attach_resume = $resumeFileName;
        
        $talent->save();

    }
}
