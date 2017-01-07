@extends('layouts.banner')

@section('title')
My Profile
@stop

@section('inner_content')

<div class="wrapper">
    <div class="pure-g">
        @can ('access.gaming')
        <div class="pure-u-lg-1-2 pure-u-1-1 egn-block egn-block__pad">
            <h3>Clans</h3>
            
            <div class="egn-clans">
            @foreach ($profile->getClans() as $clan)
            <a href="{{ action('ClanController@getView', compact('clan')) }}">
                <div class="pure-g">
                    <div class="pure-u-xl-5-6 pure-u-1-1">
                        <div class="egn-clan">
                            <div class="egn-avatar">
                                <img src="{{ url('/images/peak-100x100.png') }}" alt="clan_avatar">
                            </div>
                            <div class="egn-wrapper">
                                <div class="egn-title">{{ $clan->name }}</div>
                                <div class="egn-name">{{ $clan->generateDisplayName($profile) }}</div>
                                <div class="egn-role">{{ ucfirst($clan->pivot->role) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            </div>
    
            <p><a href="{{ action('ClanController@getCreate') }}">New Clan</a></p>
        </div>
        
        <div class="pure-u-lg-1-2 pure-u-1-1 egn-block egn-block__pad">
            <h3>Games</h3>
            
            <div class="egn-games">
                <table>
                    <tr><td><img src="{{ url('/images/csgo.png') }}" /></td><td><p>539 hrs<br>210 games</o></td></tr>
                    <tr><td><img src="{{ url('/images/dota.png') }}" /></td><td><p>120 hrs<br>12 games</o></td></tr>
                </table>
            </div>
        </div>
        
        @else
        
        <div class="pure-u-lg-1-2 pure-u-1-1 egn-block egn-block__pad">
            <h3>Connect Steam</h3>
            
            <div class="egn-thirdparty-signin">
                <a href="#"><img src="{{ url('/images/sits_small.png') }}" alt="Sign in with steam" /></a>
            </div>
        </div>
        @endcan
        
        @can ('access.profile')
        <div class="pure-u-lg-1-2 pure-u-1-1 egn-block egn-block__pad">
            <h3>Profile</h3>
            
            <div>
            <table class="egn-table">
                <tbody>
                    <tr>
                        <td>Online Persona</td>
                        <td>{{ $profile->getDisplayName() }}</td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>{{ $profile->getName() }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $profile->getStatusLabel() }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        @if ($profile->getBirthday()->diffInYears() > 0)
                        <td>{{ $profile->getBirthday()->diffInYears() }} Years old</td>
                        @else
                        <td class="egn-highlight">(not set)</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $profile->getEmail() }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{ $profile->getPhoneNumber() }}</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <p><a href="{{ action('ProfileController@getEdit') }}">Edit Profile</a></p>
        </div>
        @endcan
    </div>
</div>
@stop
