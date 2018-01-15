<script src="<?php echo base_url('assets/Chartsjs2/js/Chart.min.js');?>"></script>
<!--<script src="--><?php //echo base_url('assets/Chartsjs2/js/jquery-2.0.0.min.js');?><!--" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>


<!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
<!--            <li class="breadcrumb-item active">Dashboard</li>-->
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <div class="mr-5">Employee</div>
                    </div>
                    <?php if ($this->session->userdata('employee_occupation')=="Admin"): ?>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>/users/register_page">

                        <span class="float-left">View Details</span><?php endif;?>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </div>
                        <div class="mr-5">Donor</div>
                    </div>

                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>/donors/registerDonor"><span class="float-left">View Details</span>
                        <span class="float-right">

                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">Donation</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>/donation/add_donation">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa fa-search"></i>
                        </div>
                        <div class="mr-5">Donor Summary</div>
                    </div>
                        <?php if ($this->session->userdata('employee_occupation')=="Admin"): ?>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>/donorapprovals">
                        <?php endif;?>

                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>

<!--                graph -->
                <div class="container-fluid" id="graph">
                 <!-- Area Chart Example-->
                    <div class="card mb-3" >
                        <div class="card-header">
                            <i class="fa fa-area-chart"></i>(Donation Summary) </div>
                        <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="30">

                            </canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated today at <?php echo  date("F j, Y, g:i a");  ?></div>
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
                                        label:"Number of donations",
                                        data:parameterv,
                                        //backgroundColor:"blue",
                                        //borderColor:"lightblue",
                                        //fill: false,
                                        //lineTension:0,
                                        //pointRadius:5,
                                        pointRadius:5,
                                        fill:true,
                                        lineTension:0.1,
                                        backgroundColor:"rgba(75,192,192,0.4)",
                                        borderColor:"rgba(75,192,192,1)",
                                        borderCapStyle:"butt",
                                        borderDash:[],
                                        borderDashOffset:0.0,
                                        borderJoinStyle:'miter',
                                        pointBorderColor:"rgba(75,192,192,1)",
                                        pointHoverWidth:10,
                                        pointHoverRadius:5,
                                        pointHoverBackgroundColor:"rgba(75,192,192,1)",
                                        pointHoverBorderColor:"rgba(220,220,220,1)",
                                        pointHoverBorderWidth:5,
                                        pointHitRadius:10


                                    }]
                                };
                                var options={
                                    title:{
                                        display:true,
                                        position:"top",
                                        text:" Number of donation accroding to date",
                                        fontSize:18,
                                        fontColor:"#333"
                                    },
                                    legend:{
                                        display:true,
                                        position:"bottom"
                                    }
                                };

                                var ctx=$('#myAreaChart');
                                var chart = new Chart(ctx,{
                                    type:"line",
                                    data:data,
                                    options:options
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

<script>
    $(document).ready(function(){

        $("#graph").animate({
                left: '25px',
                height: '700px',
                width: '1050px'
        });
    });
</script>

