<?php

namespace App\Http\Livewire;

use App\Models\Classes;
use App\Models\Section;
use Livewire\Component;

class Assignment extends Component
{
    public $selectedClass = null;
    public $selectedSection = null;
    public $sections = null;

    public function render()
    {
        return view('livewire.assignment', [
            'classes' => Classes::all(),
        ]);
    }

    public function updatedSelectedClass($class_id)
    {
        $this->sections = Section::where('class_id', $class_id)->get();
    }
}
