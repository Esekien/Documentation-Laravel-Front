<?php

namespace App\Observers;

use App\Models\Version;
use App\Models\Documentation;
use Illuminate\Support\Collection;

class VersionObserver
{
    /**
     * Handle the Version "created" event.
     *
     * @param  \App\Models\Version  $version
     * @return void
     */
    public function created(Version $version)
    {
        
        $queryMaster = Documentation::where('version_id','1')->get()
        ->map(
            function($item){
                return $item->Toarray();
            });
        //dd($queryMaster);
       
        $lastIdVersion = $version->id;    //last version id 
        //dd($queryMaster);
        
        foreach($queryMaster as $key){
            //THE MODEL HAS TO BE INSTALLED IN THE CYCLE OR IT WILL JUST SAVE THE LAST DATA.
            $documentation = new Documentation();
            $documentation->title = $key['title']; //title
            $documentation->information = $key['information']; //information
            /*the last version id will be entered*/
            $documentation->version_id = $lastIdVersion; //version_id FK las id version insert
            //EL FOREACH FUNCIONA pero el "save()" solo guarda el ultimo
            $documentation->save();
                
        }
        
       


    }

    /**
     * Handle the Version "updated" event.
     *
     * @param  \App\Models\Version  $version
     * @return void
     */
    public function updated(Version $version)
    {
        //
    }

    /**
     * Handle the Version "deleted" event.
     *
     * @param  \App\Models\Version  $version
     * @return void
     */
    public function deleted(Version $version)
    {
        //
    }

    /**
     * Handle the Version "restored" event.
     *
     * @param  \App\Models\Version  $version
     * @return void
     */
    public function restored(Version $version)
    {
        //
    }

    /**
     * Handle the Version "force deleted" event.
     *
     * @param  \App\Models\Version  $version
     * @return void
     */
    public function forceDeleted(Version $version)
    {
        //
    }
}
