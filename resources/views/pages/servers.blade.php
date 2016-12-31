@extends('layouts.default')

@section('title')
Game Servers
@stop

@section('content')
<div class="wrapper">
    <div class="pure-g">
        <div class="pure-u-1">
            <h1>Game Servers</h1>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1 egn-block egn-block__pad">
            <div class="egn-servers">
                <div class="egn-game-icon">
                    <img src="{{ url('/images/csco_icon.png') }}" alt="csco icon">
                </div>
                <div class="egn-wrapper">
                    <a href="http://www.gametracker.com/server_info/    197.96.40.6:27015/" target="_blank">
                    <div class="egn-tracker">&nbsp;</div>
                    </a>
                </div>
            </div>
            <h3>Counter-Strike: Classic Offensive</h3>
            <p>We're hosting a Counter-Strike Classic Offensive server in South Africa.
                We also plan to host a 128 tick rate server if there is demand for it. Join our server by opening console (pressing ~ key) and entering <span class="egn-highlight">connect csco.eishgaming.co.za</span> for example:
            </p>
            <img src="{{ url('/images/csco_connect.png') }}" alt="csco connect">
            <p>Check out <a href="http://www.moddb.com/mods/counter-strike-classic-offensive">Counter-Strike Classic Offensive's Moddb page</a> for screenshots and download links.</p>
        </div>
    </div>
</div>
@stop

