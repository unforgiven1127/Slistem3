<script type="text/javascript">
    //localStorage.setItem("loginFlag", "loginPage");
</script>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            .highcharts-xaxis-labels
            {
                font-weight: bold !important;
            }
            .highcharts-title
            {
                padding-bottom: 30px;
                padding-top: -20px;
                font-weight: bold !important;
            }
            .highcharts-legend-item text
            {
                font-size: 20px !important;
                margin-top: 2cm !important;
            }
            .highcharts-legend-item rect
            {
                font-size: 20px !important;
                margin-top: 2cm !important;
            }
            .menunav1pos_top
            {
                margin-top: -30px !important;
            }
        </style>
<script type="text/javascript">
$(function () {

    var title = "<?php echo $title; ?>";

    var max_rabbit_1 = "<?php echo $max_rabbit_1; ?>";
    var max_rabbit_2 = "<?php echo $max_rabbit_2; ?>";
//-----------------------------------------------------------------------------------------//
    var users = "<?php echo $inplay_formatted; ?>";
    users = users.split(';');
//-----------------------------------------------------------------------------------------//
/*    var inplay_count = "<?php echo $inplay_count; ?>";
    inplay_count = inplay_count.split(';');

    for(var i=0; i<inplay_count.length; i++) { inplay_count[i] = parseInt(inplay_count[i], 10); }*/
//-----------------------------------------------------------------------------------------//
/*    var inplay_rsc = "<?php echo $inplay_rsc; ?>";
    inplay_rsc = inplay_rsc.split(';');

    for(var i=0; i<inplay_rsc.length; i++) { inplay_rsc[i] = parseInt(inplay_rsc[i], 10); }*/
//-----------------------------------------------------------------------------------------//
//
//
//
//
//-----------------------------------------------------------------------------------------//
    var new_candi_met = "<?php echo $new_candi_met; ?>";
    new_candi_met = new_candi_met.split(';');

    for(var i=0; i<new_candi_met.length; i++) { new_candi_met[i] = parseInt(new_candi_met[i], 10); }
//-----------------------------------------------------------------------------------------//

//-----------------------------------------------------------------------------------------//
    var new_candi_count = "<?php echo $new_candi_count; ?>";
    new_candi_count = new_candi_count.split(';');

    for(var i=0; i<new_candi_count.length; i++) { new_candi_count[i] = parseInt(new_candi_count[i], 10); }
//-----------------------------------------------------------------------------------------//
//
//-----------------------------------------------------------------------------------------//
    var new_posi_count = "<?php echo $new_posi_count; ?>";
    new_posi_count = new_posi_count.split(';');

    for(var i=0; i<new_posi_count.length; i++) { new_posi_count[i] = parseInt(new_posi_count[i], 10); }
//-----------------------------------------------------------------------------------------//

    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: title
        },
        xAxis: {
            categories: users
        },
        yAxis: [{
            /*plotLines:[{
                value:max_rabbit_2,
                color: 'black',
                width:1,
                zIndex:4,
                label:{
                        useHTML: true,
                        text:'<img src="/component/sl_candidate/resources/pictures/tabs/rabbit_40.png"/>',
                        verticalAlign: 'top',
                        textAlign: 'center',
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold'
                        }
                      }
            },
            {
                value:max_rabbit_1,
                color: 'black',
                width:1,
                zIndex:4,
                label:{
                        useHTML: true,
                        text:'<img src="/component/sl_candidate/resources/pictures/tabs/rabbit_40.png"/>',
                        verticalAlign: 'top',
                        textAlign: 'center',
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold'
                        }
                      }
            }],*/
            tickInterval:1,
            title: {
                text:'',
                style: {
                    color: 'black'
                }
            }
        }, {
            tickInterval:1,
            linkedTo: 0,
            opposite: true,
            title: {
                text:'',
                style: {
                    color: 'black'
                }
            }
        }],
        legend: {
            //reversed: true,
            verticalAlign: 'top',
            itemMarginTop: 50,
            //itemMarginBottom: 50
        },
        plotOptions: {
            /*series: {
                stacking: 'normal'
            }*/
            series: {
                //groupPadding: 0.5,  // Exactly overlap
                pointWidth: 12
            }
        },
        series: [ {
            name: 'New candidates met',
            style: {
                        fontSize: '20px',
                        fontWeight: 'bold'
                    },
            color: 'rgba(179, 0, 0,1)',//red
            opacity: '.4',
            data: new_candi_met
        },{
            name: 'New candidates in play',
            color: 'rgba(43, 101, 236,1)',//blue
            opacity: '.4',
            data: new_candi_count
        },{
            name: 'New positions in play',
            color: 'rgba(45, 185, 68,1)',//green
            opacity: '.4',
            data: new_posi_count
        }]

    });
});
</script>
</head>
<body>


<script src="/common/lib/highcharts5/js/highcharts.js" ></script>
<script src="/common/lib/highcharts5/js/modules/exporting.js" ></script>

<script>

    setTimeout(function() {
        var nextloop = '<?php echo $nextloop; ?>';
        var url = '/index.php5?uid=555-006&ppa=pprev&ppt=revenue&ppk=0&watercooler=1&nextloop='+nextloop;
        //alert('test');
        window.location.replace(url);
    }, 30000);


</script>

<div id="container" style="width:99%; height: 99%; margin: 0 auto"></div>

</body>
</html>