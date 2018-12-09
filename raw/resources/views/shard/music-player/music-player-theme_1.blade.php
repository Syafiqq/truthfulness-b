<?php
$musics = [
    ['name' => 'Truthfulness 1', 'source' => '/assets/audio/mp3/truth1.mp3'],
    ['name' => 'Truthfulness 2', 'source' => '/assets/audio/mp3/truth2.mp3'],
    ['name' => 'Truthfulness 3', 'source' => '/assets/audio/mp3/truth3.mp3'],
    ['name' => 'Truthfulness 4', 'source' => '/assets/audio/mp3/truth4.mp3'],
    ['name' => 'Truthfulness 5', 'source' => '/assets/audio/mp3/truth5.mp3'],
]
?>
<div id="cover">
    <div class="panel panel-default">
        <audio id="audio" tabindex="0" controls>
            <source src="{{$musics[0]['source']}}">
        </audio>
    </div>

    <ul id="playlist">
        @foreach($musics as $k => $music)
            <li class="{{$k === 0 ? 'active' : ''}} list-group-item">
                <a href="{{$music['source']}}">
                    {{$music['name']}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
