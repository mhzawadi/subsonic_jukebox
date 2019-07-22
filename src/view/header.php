<?php
$header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Subsonic Jukebox</title>
    <meta http-equiv="refresh" content="30">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/images/subsonic_logo.png" />
    <link rel="apple-touch-startup-image" href="/images/subsonic_logo.png" />
    <style>
    span, a {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      white-space: nowrap;
    }
    div{
      background-color: white; /* Green */
      border: none;
      color: white;
      padding: 5px 5px;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      white-space: nowrap;
    }

    a.jump {
      background-color: white;
      padding: 0;
      margin: 0;
    }

    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button_50 {
      width: 48%;
    }

    .button_title {
      font-size: 16px;
      text-align: left;
      cursor: pointer;
      background-color: white;
      color: black;
      padding: 4px 20px;
      border: 2px solid #e7e7e7;
    }

    span.button_50 {
      width: 40%;
    }

    a.button_50 {
      width: 40%;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
    }

    .button2:hover {
        background-color: #008CBA;
        color: white;
    }

    .button3 {
        background-color: white;
        color: black;
        border: 2px solid #f44336;
    }

    .button3:hover {
        background-color: #f44336;
        color: white;
    }

    .button4 {
        background-color: white;
        color: black;
        border: 2px solid #e7e7e7;
    }

    .button4:hover {background-color: #e7e7e7;}

    .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
    }

    .button5:hover {
        background-color: #555555;
        color: white;
    }
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 10px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
</style>
</head>

<body>
';
