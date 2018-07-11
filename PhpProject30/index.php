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
                <div class ="form" id ="login" align ="center" ng-controller="user">
                    <div id ="login">
                        <input id ="user_email" class="form" placeholder ="email" ng-model ="email"/>
                        <br><br>
                        <input id ="user_pass" type ="password" class ="form" placeholder="password" ng-model="pass"/>
                        <br><br>
                        <a><button class ="form" id = "enter" ng-click = "read(email,pass)" >Login</button></a>
                    </div>
                    <a href="#!x" id = "register" ng-click='create_login()'><button class ="form">Register</button></a>
                </div>
                <div align ="center" ng-controller="start">
                    <div id = "main_menu">
                        <a id = "bp_btn" ng-click = "bp_menu()"><img src ="pics/BP.png"/></a>
                        <a id = "bs_btn" ng-click = "bs_menu()"><img src ="pics/BS.png"/></a>
                        <br>
                        <a id ="wt_btn" ng-click = "wt_menu()"><img src="pics/Weight.png"></a>
                        <a id ="med_btn" ng-click ="med_menu()"><img src ="pics/meds.png"></a>
                    </div>
                    <br>
                    <div id = "sub_bs">
                        <a id = "BS_enter_btn" href ="#!BS_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a id = "BS_stats_btn" href ="#!BS_view"><img src ="pics/stats.png"/></a>
                    </div>
                    <br>
                    <div id = "sub_bp">
                        <a id='BP_enter_btn' href="#!BP_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a id='BP_stats_btn' href ="#!BP_view"><img src ="pics/stats.png"/></a>
                    </div>
                    <div id = "sub_wt">
                        <a id = "WT_enter_btn" href="#!WT_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a id = "WT_stats_btn" href="#!WT_view"><img src ="pics/stats.png"/></a>
                    </div>
                    <div id = "sub_med">
                        <a id ="med_enter_btn" href ="#!med_Enter"><img src ="pics/Enter.png"/></a>
                        <br>
                        <a id ="med_stats_btn" href="#!med_stats"><img src ="pics/stats.png"/></a> 
                    </div>
                </div>     
                <div align = "center" ng-view id = "spa"></div>
            </div>
        </div>
        <script src="JS/Routing.js"></script>
        <script src='JS/register.js'></script>
        <script src="JS/main.js"></script>
        <script src="JS/blood_sugar.js"></script>
        <script src="JS/blood_pressure.js"></script>
        <script src ="JS/weight.js"></script>
        <script src ="JS/meds.js"></script>
        <script type="text/javascript" src="cordova.js"></script>
    </body>
</html>