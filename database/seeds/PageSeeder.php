<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new Page();
        $about->name = "About-Us";
    	$about->image = 'Pages/default.jpg';
        $about->text="Insert your Data";
       	$about->save();

        $about = new Page();
        $about->name = "Treatment";
        $about->image = 'Pages/default.jpg';
        $about->text="Insert your Data";
        $about->save();

        $about = new Page();
        $about->name = "Work-with-us";
        $about->image = 'Pages/default.jpg';
        $about->text="Insert your Data";
        $about->save();

        $about = new Page();
        $about->name = "Contact-us";
        $about->image = 'Pages/default.jpg';
        $about->text="Insert your Data";
        $about->save();
    }
}
