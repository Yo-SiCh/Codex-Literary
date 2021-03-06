@extends('layouts.template')

@section('title', 'Verify Account')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        #auth_form {
          width: 34% !important;
        }
        
        p {
          text-align: start;
          padding: .8em 0;
          margin: .2em .4em;
        }

        #auth_sumbition {
            padding-top: 0 !important;
        }

        button {
            margin-bottom: 1.2em !important;
        }
    </style>
@endsection

@section('content')
    <main>
        <section id="auth_form">
            <h2 id="auth_title">VERIFY YOUR EMAIL ADDRESS</h2>
            <section id="auth_sumbition">
                @if (session('resent'))
                    <p>A fresh verification link has been sent to your email address.</p>
                @endif
                <p>
                    Before proceeding, please check your email for a verification link.
                    If you did not receive the email.
                </p>
                <form action="{{ route('verification.resend') }}" method="POST">
                    @csrf
                    <button type="submit">Click here to request another.</button>
                </form>
            </section>
        </section>
    </main>
@endsection