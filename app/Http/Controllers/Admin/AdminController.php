<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      
        return view('admin.index');
    }   
    public function alerts()
    {
      
        return view('admin.components.alerts');
    }    
    public function accordion()
    {
      
        return view('admin.components.accordion');
    }    
    public function badges()
    {
      
        return view('admin.components.badges');
    }    
    public function breadcrumbs()
    {
      
        return view('admin.components.breadcrumbs');
    }    
    public function buttons()
    {
      
        return view('admin.components.buttons');
    }   
    public function cards()
    {
      
        return view('admin.components.cards');
    }   
    public function carousel()
    {
      
        return view('admin.components.carousel');
    }    
    public function group()
    {
      
        return view('admin.components.group');
    }    
    public function modal()
    {
      
        return view('admin.components.modal');
    }    
    public function tabs()
    {
      
        return view('admin.components.tabs');
    }    
    public function pagination()
    {
      
        return view('admin.components.pagination');
    }    
    public function progress()
    {
      
        return view('admin.components.progress');
    }    
    public function spinners()
    {
      
        return view('admin.components.spinners');
    }   
    public function tooltips()
    {
      
        return view('admin.components.tooltips');
    } 
    // forms views    
    public function forms_elements()
    {
      
        return view('admin.forms.forms-elements');
    }    
    public function forms_layouts()
    {
      
        return view('admin.forms.forms_layouts');
    }    
    public function forms_editors()
    {
      
        return view('admin.forms.forms_editors');
    }    
    public function forms_validation()
    {
      
        return view('admin.forms.forms_validation');
    }    
    public function tables_general()
    {
      
        return view('admin.tables.tables_general');
    }    
    public function tables_data()
    {
      
        return view('admin.tables.tables_data');
    }    
    public function charts_chartjs()
    {
      
        return view('admin.charts.charts_chartjs');
    }    
    public function charts_apexcharts()
    {
      
        return view('admin.charts.charts_apexcharts');
    }    
    public function charts_echarts()
    {
      
        return view('admin.charts.charts_echarts');
    }    
    public function icons_bootstrap()
    {
      
        return view('admin.icons.icons_bootstrap');
    }    
    public function icons_remix()
    {
      
        return view('admin.icons.icons_remix');
    }    
    public function icons_boxicons()
    {
      
        return view('admin.icons.icons_boxicons');
    }    
    public function users_profile()
    {
      
        return view('admin.users_profile');
    }    
    public function faq()
    {
      
        return view('admin.faq');
    }    
    public function contact()
    {
      
        return view('admin.contact');
    }    
    public function register()
    {
      
        return view('admin.register');
    }    
    public function login()
    {
      
        return view('admin.login');
    }    
    public function NotFound()
    {
      
        return view('admin.404');
    }    
    public function blank()
    {
      
        return view('admin.blank');
    }
}
