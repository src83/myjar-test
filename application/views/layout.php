<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/client">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="8nOERGXWA2p9aVhKVPoHZkcwi-WAmFICvAmrvjbODhg">
    <meta name="p:domain_verify" content="78f0ca212c9b6a555cd8c8158095dee4">

    <meta name="application-name" content="<?= $application_name ?>">
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">

    <title><?= $title ?></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet'>

    <link href="/myjar/css/common.css" rel="stylesheet" media="all">
    <link href="/myjar/css/responsive.css" rel="stylesheet" media="all and (min-width: 120px)">
    <link href="/myjar/css/rangeslider.css" rel="stylesheet" media="all">
    <link href="/myjar/angular-css/bootstrap.css" rel="stylesheet" media="all">
    <link href="/myjar/angular-css/client.css" rel="stylesheet" media="all">
    <link href="/myjar/css/custom.css" rel="stylesheet" media="all">

    <!-- JS Libs -->
        <!-- General -->
            <script src="/myjar/js/config.js"></script>
            <script src="/myjar/js/jquery.min.js"></script>
            <script src="/myjar/js/jquery.remodal.js"></script>
            <script src="/myjar/js/moment.js"></script>
            <script src="/myjar/js/rangeslider.js"></script>
            <script src="/myjar/js/throttle.js"></script>
            <script src="/myjar/js/underscore-min.js"></script>
        <!-- /General -->
        <!-- Angular -->
            <script src="/myjar/js/angular/angular.min.js"></script>
            <script src="/myjar/js/angular/angular-route.min.js"></script>
            <script src="/myjar/js/angular/angular-animate.min.js"></script>
            <!-- Angular extras -->
            <script src="/myjar/angular-app/angular-modules/angular-modal-service.js"></script>
            <script src="/myjar/angular-app/angular-modules/angular-ladda.min.js"></script>
            <!-- /Angular extras -->
        <!-- /Angular -->
    <!-- /JS Libs -->
</head>

<body class="loan-request-desktop request-desktop">

<div ng-app="myjar" ng-controller="MyjarController" ng-init='loanRequestData = {"loan_request":{"credit_limit":"925","maximum_duration_date":"2015-06-04","limits_per_duration_json":"{\"3month\":{\"1\":{\"lower\":100,\"upper\":425},\"2\":{\"lower\":100,\"upper\":425},\"3\":{\"lower\":100,\"upper\":425},\"4\":{\"lower\":100,\"upper\":425},\"5\":{\"lower\":100,\"upper\":425},\"6\":{\"lower\":100,\"upper\":425},\"7\":{\"lower\":100,\"upper\":425},\"8\":{\"lower\":100,\"upper\":425},\"9\":{\"lower\":100,\"upper\":425},\"10\":{\"lower\":100,\"upper\":425},\"11\":{\"lower\":100,\"upper\":425},\"12\":{\"lower\":100,\"upper\":425},\"13\":{\"lower\":100,\"upper\":425},\"14\":{\"lower\":100,\"upper\":425},\"15\":{\"lower\":100,\"upper\":425},\"16\":{\"lower\":100,\"upper\":425},\"17\":{\"lower\":100,\"upper\":425},\"18\":{\"lower\":100,\"upper\":425},\"19\":{\"lower\":100,\"upper\":425},\"20\":{\"lower\":100,\"upper\":425},\"21\":{\"lower\":100,\"upper\":425},\"22\":{\"lower\":100,\"upper\":425},\"23\":{\"lower\":100,\"upper\":425},\"24\":{\"lower\":100,\"upper\":425},\"25\":{\"lower\":100,\"upper\":425},\"26\":{\"lower\":100,\"upper\":425},\"27\":{\"lower\":100,\"upper\":425},\"28\":{\"lower\":100,\"upper\":425},\"29\":{\"lower\":100,\"upper\":425},\"30\":{\"lower\":100,\"upper\":425},\"31\":{\"lower\":100,\"upper\":425},\"32\":{\"lower\":100,\"upper\":425},\"33\":{\"lower\":100,\"upper\":425},\"34\":{\"lower\":100,\"upper\":425},\"35\":{\"lower\":100,\"upper\":425},\"36\":{\"lower\":100,\"upper\":425},\"37\":{\"lower\":100,\"upper\":425},\"38\":{\"lower\":100,\"upper\":425},\"39\":{\"lower\":100,\"upper\":425},\"40\":{\"lower\":100,\"upper\":425},\"41\":{\"lower\":100,\"upper\":425},\"42\":{\"lower\":100,\"upper\":450},\"43\":{\"lower\":100,\"upper\":450},\"44\":{\"lower\":125,\"upper\":450},\"45\":{\"lower\":125,\"upper\":475},\"46\":{\"lower\":125,\"upper\":475},\"47\":{\"lower\":125,\"upper\":475},\"48\":{\"lower\":125,\"upper\":500},\"49\":{\"lower\":150,\"upper\":500},\"50\":{\"lower\":150,\"upper\":500},\"51\":{\"lower\":150,\"upper\":525},\"52\":{\"lower\":150,\"upper\":525},\"53\":{\"lower\":175,\"upper\":525},\"54\":{\"lower\":175,\"upper\":550},\"55\":{\"lower\":175,\"upper\":550},\"56\":{\"lower\":175,\"upper\":550},\"57\":{\"lower\":175,\"upper\":575},\"58\":{\"lower\":200,\"upper\":575},\"59\":{\"lower\":200,\"upper\":575},\"60\":{\"lower\":200,\"upper\":600},\"61\":{\"lower\":200,\"upper\":600},\"62\":{\"lower\":225,\"upper\":600},\"63\":{\"lower\":225,\"upper\":625},\"64\":{\"lower\":225,\"upper\":625},\"65\":{\"lower\":225,\"upper\":625},\"66\":{\"lower\":225,\"upper\":650},\"67\":{\"lower\":250,\"upper\":650},\"68\":{\"lower\":250,\"upper\":650},\"69\":{\"lower\":250,\"upper\":675},\"70\":{\"lower\":250,\"upper\":675},\"71\":{\"lower\":275,\"upper\":675},\"72\":{\"lower\":275,\"upper\":700},\"73\":{\"lower\":275,\"upper\":700},\"74\":{\"lower\":275,\"upper\":700},\"75\":{\"lower\":275,\"upper\":725},\"76\":{\"lower\":300,\"upper\":725},\"77\":{\"lower\":300,\"upper\":725},\"78\":{\"lower\":300,\"upper\":750},\"79\":{\"lower\":300,\"upper\":750},\"80\":{\"lower\":325,\"upper\":750},\"81\":{\"lower\":325,\"upper\":775},\"82\":{\"lower\":325,\"upper\":775},\"83\":{\"lower\":325,\"upper\":775},\"84\":{\"lower\":325,\"upper\":800},\"85\":{\"lower\":350,\"upper\":800},\"86\":{\"lower\":350,\"upper\":800},\"87\":{\"lower\":350,\"upper\":825},\"88\":{\"lower\":350,\"upper\":825},\"89\":{\"lower\":375,\"upper\":825},\"90\":{\"lower\":375,\"upper\":850},\"91\":{\"lower\":375,\"upper\":850},\"92\":{\"lower\":375,\"upper\":850},\"93\":{\"lower\":375,\"upper\":875},\"94\":{\"lower\":400,\"upper\":875},\"95\":{\"lower\":400,\"upper\":875},\"96\":{\"lower\":400,\"upper\":900},\"97\":{\"lower\":400,\"upper\":900},\"98\":{\"lower\":425,\"upper\":925}}}"},"next_income_date":"2015-05-09"}'>

    <div ng-controller="ClientController">
        <div ng-if="loanRequestData" ng-include="" src="'/myjar/angular-app/client/overview/partials/index.html'">
        </div>
    </div>

</div>


<!-- MYJAR app modules -->
<script src="/myjar/angular-app/controllers.js"></script>
<script src="/myjar/angular-app/services.js"></script>
<script src="/myjar/angular-app/directives.js"></script>
<script src="/myjar/angular-app/filters.js"></script>
<script src="/myjar/angular-app/helpers.js"></script>
<script src="/myjar/angular-app/app.js"></script>
<script src="/myjar/angular-app/homeApp.js"></script>

<script src="/myjar/angular-app/client/controllers.js"></script>
<script src="/myjar/angular-app/client/directives.js"></script>
<script src="/myjar/angular-app/client/services.js"></script>

<script src="/myjar/angular-app/client/overview/controllers.js"></script>
<script src="/myjar/angular-app/client/overview/directives.js"></script>

<script src="/myjar/angular-app/client/update/controllers.js"></script>
<!-- /MYJAR app modules -->


<!-- JS Libs : General -->
<script src="/myjar/js/mobiscroll.custom-2.14.4.min.js"></script>
<!-- /JS Libs : General -->

</body>
</html>
