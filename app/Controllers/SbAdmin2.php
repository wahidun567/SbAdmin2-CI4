<?php

namespace App\Controllers;

class SbAdmin2 extends BaseController
{
	public function index()
	{
		return view('sbAdmin2/index');
	}
	public function buttons()
	{
		return view('sbAdmin2/buttons');
	}
	public function cards()
	{
		return view('sbAdmin2/cards');
	}
	public function colors()
	{
		return view('sbAdmin2/utilities-color');
	}
	public function borders()
	{
		return view('sbAdmin2/utilities-border');
	}
	public function animations()
	{
		return view('sbAdmin2/utilities-animation');
	}
	public function other()
	{
		return view('sbAdmin2/utilities-other');
	}
	public function login()
	{
		return view('sbAdmin2/login');
	}
	public function register()
	{
		return view('sbAdmin2/register');
	}
	public function forgotPassword()
	{
		return view('sbAdmin2/forgot-password');
	}
	public function error()
	{
		return view('sbAdmin2/404');
	}
	public function blank()
	{
		return view('sbAdmin2/blank');
	}
	public function charts()
	{
		return view('sbAdmin2/charts');
	}
	public function tables()
	{
		return view('sbAdmin2/tables');
	}
	public function template(){
		return view('layout/template');
	}
}
