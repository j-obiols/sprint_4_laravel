@extends('errors::minimal')

@section('title', __('Prohibit'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'FProhibit'))
