<!doctype html>
<html lang="en">
<head>
    <title>CV - 07/2017</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Sebastian Śliwiński"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <style type="text/css">
        .fa {
            display: inline;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 1;
            font-family: FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <style type="text/css">
        * {
            font-family: 'Dejavu Serif';
            font-size: 13px;
            box-sizing: border-box;
            margin: 0;
            padding: 0px;
        }

        .container {
            padding: 15px 15px;
        }

        .col-left {
            width: 30%;
            float: left;
        }

        .col-right {
            width: 70%;
            float: left;
        }

        .col-left .label {
            display: block;
        }

        .col-left .abstract {
            margin-bottom: 20px;
            padding-left: 10px;
        }

        .col-left .abstract .fa {
            margin-left: -10px;
            font-size:
        }

        .col-left .value {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .section, .person {
            padding: 10px 10px 0;
        }

        .person .name .value {
            font-size: 220%;
            font-family: 'Dejavu Sans';
        }

        .section .header {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 19px;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
            font-family: 'Dejavu Sans';
        }

        .list .list-item .description, .list .list-item .description b {
            font-size: 12px;
            line-height: 18px;
        }

        .list .list-item {
            margin-bottom: 15px;
        }

        .list .list-item .description {
            margin-bottom: 25px;
        }

        .list .list-item .name {
            font-weight: bold;
            margin-bottom: 15px;
            /*border-left: 5px solid #F68121;*/
            position: relative;
            text-indent: 15px;
            font-size: 16px;
        }

        .list .list-item .name:before {
            content: ' ';
            position: absolute;
            width: 8px;
            height: 8px;
            display: block;
            background: #F68121;
            left: 0;
            top: 10px;
        }

        .fa {
            color: #F68121;
        }

        .date-range .fa {
            margin-left: 5px;
        }

        .list .list-item .occupation {
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        .list .list-item .date-range {
            text-align: right;
            position: absolute;
            right: 260px;
            font-size: 11px;
            display: inline-block;
            padding-top: 3px;
        }

        .list .list-item .date-range img {
            display: none;
        }

        .list .list-item .list-item-rate-rate {
            background: #fff;
            position: absolute;
            right: 0px;
            height: 10px;
            top: 8px;
        }

        .list .list-item .list-item-rate-rate table {
            width: 100%;
        }

        .list .list-item .rate .fill, .list .list-item .rate .empty {
            height: 6px;
            background: #F68121;
        }

        .list .list-item .list-item-rate-rate span {
            margin-left: 3px;
            font-size: 12px;
        }

        .list .list-item .rate .empty {
            background: silver;
        }

        .footer {
            text-align: center;
            padding: 10px;
            width: 100%;
            bottom: 60px;
            position: fixed;
            border-top: 1px solid #000;
        }

        .footer .terms .item {
            font-size: 9px;

        }

        .col-left img {
            width: 150px;
            margin-left: 40px;
            margin-top: 20px;
        }
    </style>


</head>
<body>
<div class="container">
    <div class="col-left">

        <img src="./assets/cv/img.png" alt=""/>

        <?php echo $htmlParts['person']; ?>
        <?php echo $htmlParts['sections']['lang'];
        unset($htmlParts['sections']['lang']); ?>
    </div>
    <div class="col-right">
        <?php
            echo array_shift($htmlParts['sections']);
        ?>
    </div>
</div>
<div style="page-break-before: always;"></div>
<div class="container">
    <div class="col-left">
        <br> &nbsp;<br> &nbsp;<br> &nbsp;<br> &nbsp;<br> &nbsp;
    </div>
    <div class="col-right">
        <?php
        foreach ($htmlParts['sections'] as $section):
            echo $section;
        endforeach;
        ?>
    </div>
</div>
<div class="container footer">
    <?php echo $htmlParts['terms']; ?>
</div>
</body>
</html>
