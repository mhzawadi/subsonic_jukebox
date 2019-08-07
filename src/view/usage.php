<?php
$html = 'Usage:

    $ curl '.$this->settings['URL'].'          # current playing track

Supported action types

    /get                                       # Get the playlist
    /status                                    # start playing
    /set                                       # Clear the playlist and add new track
    /start                                     # Start playing
    /stop                                      # Stop playing
    /skip                                      # Skip track, requires an ID
    /add                                       # Add a track, requires track ID
    /clear                                     # Clear the playing
    /remove                                    # Remove a track
    /shuffle                                   # Shuffle the playing
    /setGain                                   # Set the volume

Passing more options

    /skip/4                                    # Skip to track 4

';
