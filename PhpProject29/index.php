<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <link href ="SS.css" type ="text/css" rel="stylesheet">
        <script src="JS/jquery-3.2.1.min.js"></script>
        <script src="JS/angular.min.js"></script>
        <script src="JS/angular-route.js"></script>
        <script src ="JS/depend/plotly-latest.min.js"></script>
        <title>Track My Health</title>
    </head>
    <body ng-app="unit">
        <div id ="main">
            <h1 align ="center"> Track My Health </h1>
            <div ng-controller="operation">
                <a id = "home" href ="#!/" ng-click = "main()"><img src ="pics/home_1.png"/></a>
                <!-- buttons-->
                <!-- login
                <div class ="form" id ="login" align ="center">
                    <input id ="val" class="form" placeholder ="email" ng-model ="email"/>
                    <br><br>
                    <input id ="pass" class ="form" placeholder="password" ng-model="pass"/>
                    <br><br>
                    <button class ="form" id = "enter" ng-click = "login(email,pass)" >Login</button>
                </div>-->
                <div align ="center" ng-controller="start">
                    <div id = "main_menu">
                        <a id = "bp_btn" ng-click = "bp_menu()"><img src ="pics/BP.png"/></a>
                        <br>
                        <a id = "bs_btn" ng-click = "bs_menu()"><img src ="pics/BS.png"/></a>
                        <br>
                        <a id ="wt_btn" ng-click = "wt_menu()"><img src="pics/Weight.png"></a>
                    </div>
                    <br>
                    <div id = "sub_bs">
                        <a href ="#!BS_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a href ="#!BS_view"><img src ="pics/stats.png"/></a>
                    </div>
                    <br>
                    <div id = "sub_bp">
                        <a  href="#!BP_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a  href ="#!BP_view"><img src ="pics/stats.png"/></a>
                    </div>
                    <div id = "sub_wt">
                        <a href="#!WT_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a><img src ="pics/stats.png"/></a>
                    </div>
                </div>
                
                <div id ="chart" align = "center"></div>      
                <div align = "center" ng-view id = "spa"></div>
            </div>
        </div>
       <script src="JS/Routing.js"></script>
        <script src="JS/main.js"></script>
        <script src="JS/blood_sugar.js"></script>
        <script src="JS/blood_pressure.js"></script>
        <script src ="JS/weight.js"></script>
        <script type="text/javascript" src="cordova.js"></script>
    </body>
</html>