@extends('layouts.layout')


<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: block;">
    {{ csrf_field() }}
    <button value="Logout" name="logout">Logout</button>
</form>