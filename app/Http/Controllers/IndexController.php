<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Course;
use App\Models\Event;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Config;



class IndexController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        $courses = Course::orderBy('created_at', 'desc')->take(config('settings.coursesOnPage'))->get();
        $courses->load('category');
        foreach ($courses as $course) {
            $course->description = mb_substr($course->description, 0, 100) . '...';
        }
        $feedbacks = Feedback::orderBy('created_at', 'desc')->take(config('settings.feedbacksOnPage'))->get();
        $feedbacks->load('course');
        $feedbacks->load('user');
        foreach ($feedbacks as $feedback) {
            $feedback->text = mb_substr($feedback->text, 0, 100) . '...';
        }
        $data = [
            'menu' => $this->mainMenu,
            'advantages' => Advantage::all(),
            'courses' => $courses,
            'events' => Event::all(),
            'feedbacks' => $feedbacks,
            'categories'=> $this->categories,
        ];

        return view('index')->with($data);
    }
}
