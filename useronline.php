<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>user online</title>
    </head>
    <body>
        Online User Now:
        <table>
            <tr>
                <td width="100px">Name</td>
                <td>Last Login</td>
            </tr>
            <tr>
                <td><div id="user_online"></div></td>
                <td><div id="timed"></div></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td width="700px">write your short chat (Andriawan FireChat V1):</td>
                
            </tr>
            <tr>
                <td width="700px"><textarea id="cont" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td><button id="ready" >post</button></td>
            </tr>
            <tr id="is">
                
            </tr>
            <tr id="sel">
                
            </tr>
        </table>
        
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="user.js"></script>
    </body>
</html>
