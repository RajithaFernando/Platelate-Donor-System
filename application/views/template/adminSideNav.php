<script src="<?php echo base_url('assets/Chartsjs2/js/Chart.min.js');?>"></script>
<!--<script src="--><?php //echo base_url('assets/Chartsjs2/js/jquery-2.0.0.min.js');?><!--" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>


<div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Charts</li>
        </ol>
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Donors Summery</div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30">

                </canvas>
            </div>
            <div class="card-footer small text-muted">Updated today at <?php echo  date("F j, Y, g:i a");  ?></div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- Example Bar Chart Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100" height="50">

                        </canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Example Pie Chart Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
                    <div class="card-body">
                        <canvas id="myPieChart" width="100%" height="100"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
 </div>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'get',
            url:'<?php echo base_url()?>/charts/get_linegraph',
            success:function(data){
                console.log(data);
                //console.log(data[0][0]);
                var parameters = [];
                var parameterv =[];
                var len=data.length;
                for(var i=0; i<len; i++ ){
                    parameters.push(data[i].label);
                    parameterv.push(data[i].value);
                }
                //console.log(parameters);
                //console.log(parameterv);

                //var paramValues=[];
                var data={
                    //labels:["2017-09-01", "2017-10-22", "2017-11-07", "2017-11-13", "2017-11-15", "2017-11-29", "2017-12-03"],
                    labels:parameters,
                    datasets:[{
                        label:"Number of visitors",
                        data:parameterv,
                        backgroundColor:"blue",
                        borderColor:"lightblue",
                        fill: false,
                        lineTension:0,
                        pointRadius:5
                    }]
                };

                var ctx=$('#myAreaChart');
                var chart = new Chart(ctx,{
                    type:"line",
                    data:data,
                    options:{}
                });



                /*var mychart= new Chart(ctx,{
                    type :'line',
                    data:{
                        label:parameters,
                        datasets:{
                            fill:true,
                            lineTension:0.1,
                            backgroundColor:"rgba(75,192,192,0.4)",
                            borderColor:"rgba(75,192,192,1)",
                            borderCapStyle:"butt",
                            borderDash:[],
                            borderDashOffset:0.0,
                            borderJoinStyle:'miter',
                            pointBorderColor:"rgb(75,192,192,1)",
                            pointHoverWidth:10,
                            pointHoverRadius:5,
                            pointHoverBackgroundColor:"rgb(75,192,192,1)",
                            pointHoverBorderColor:"rgba(220,220,220,1)",
                            pointHoverBorderWidth:5,
                            pointRadius:1,
                            pointHitRadius:10,

                            data:parameterv,
                            spanGaps:false,
                        }
                    }

                });
*/
            },
            error:function(data){

            }
        });
    });
</script>
