<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category', 'media'])->get()->groupBy(function ($item) {
            return $item->category->id;
        });
        $categories = ProjectCategory::all();

        return view('index')->with([
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }

    public function shopDrawing()
    {
        $shopdrawing_structure_services = [
            'BẢN VẼ SHOP THÉP CỌC',
            'BẢN VẼ SHOP CHI TIẾT THÉP ĐÀI MÓNG, GIA CỐ ĐẦU CỌC',
            'BẢN VẼ SHOP CHI TIẾT ĐÀI MÓNG THANG MÁY',
            'BẢN VẼ SHOP THI CÔNG CHỐNG MỐI',
            'BẢN VẼ SHOP THI CÔNG CHỐNG THẤM',
            'BẢN VẼ SHOP CHI TIẾT VÁCH HẦM',
            'BẢN VẼ SHOP CHI TIẾT BỂ XỬ LÝ NƯỚC THẢI, BỂ NƯỚC NGẦM',
            'BẢN VẼ SHOP CHI TIẾT GIẰNG MÓNG',
            'BẢN VẼ SHOP CHI TIẾT THÉP SÀN',
            'BẢN VẼ SHOP CHI TIẾT THÉP CỘT, VÁCH',
            'BẢN VẼ SHOP CHI TIẾT THÉP DẦM',
            'BẢN VẼ SHOP CHI TIẾT THÉP CẦU THANG, RAM DỐC',
            'BẢN VẼ SHOP CHI TIẾT THÉP TƯỜNG RÀO, HẠ TẦNG',
        ];

        $shopdrawing_completed_services = [
            'BẢN VẼ SHOP XÂY TƯỜNG',
            'BẢN VẼ SHOP TÔ TƯỜNG',
            'BẢN VẼ SHOP TRẦN THẠCH CAO',
            'BẢN VẼ SHOP ỐP GẠCH LÁT',
            'BẢN VẼ SHOP CỬA CHỐNG CHÁY',
            'BẢN VẼ SHOP CỬA NHÔM KÍNH',
            'BẢN VẼ SHOP LAN CAN',
            'BẢN VẼ SHOP CHỐNG THẤM',
            'BẢN VẼ SHOP ỐP ĐÁ(CẦU THANG, THANG MÁY, LAVABO)',
            'BẢN VẼ SHOP TỦ BẾP',
            'BẢN VẼ SHOP SÀN GỖ',
            'BẢN VẼ SHOP KẾT CẤU CANOPY, MÁI CHE',
            'BẢN VẼ SHOP SƠN NƯỚC',
        ];

        return view('shopdrawing')->with([
            'shopdrawing_structure_services' => $shopdrawing_structure_services,
            'shopdrawing_completed_services' => $shopdrawing_completed_services,
        ]);
    }

    public function projects()
    {
        $projects = Project::with(['category', 'media'])->get()->groupBy(function ($item) {
            return $item->category->id;
        });
        $categories = ProjectCategory::all();

        return view('projects')->with([
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }

    public function training()
    {
        return view('training');
    }

    public function recruitment()
    {
        $recruitments = Recruitment::get();

        return view('recruitment')->with([
            'recruitments' => $recruitments,
        ]);
    }
}
