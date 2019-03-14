<?php

if ($_SESSION['unix'] == null) {    
    redirect('l_admin');    
}
?>
        <div class="content pb-0">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">Rp <span class="count">23569</span></div>
                                        <div class="stat-heading">Pendapatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">Rp <span class="count">34350</span></div>
                                        <div class="stat-heading">Pengeluaran</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">68</span></div>
                                        <div class="stat-heading">Agenda</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <?php
                                            foreach ($jml_member as $key ) {
                                            ?>
                                                 <div class="stat-text"><span class="count"><?php echo $key->jumlah; ?></span></div> 
                                         <?php
                                           }
                                        ?>
                                                                                       
                                        <div class="stat-heading">Anggota</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="row">
                
                  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                               
                                <h4 class="mb-7"style="text-align:center" >Status Distribusi Air</h4>
                                <hr>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <div class="col-lg-4">
                        <div class="card-body">
                                <div class="col-lg-12">
                                <div class="card weather-box">
                                <div id="m-booked-weather-bl250-94078"> <div class="booked-wzs-250-src175 weather-customize" style="background-color:#cfcfcf;width:306px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>31</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>31&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>26&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Yogyakarta</div> <div class="booked-wzs-250-175-date">Thursday, 24 January</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/jakarta-18977"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Fri</td> <td>Sat</td> <td>Sun</td> <td>Mon</td> <td>Tue</td> <td>Wed</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>28&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> <td class="week-day-val"><span class="plus">+</span>28&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>27&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-94078'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=18977&type=3&scode=124&ltid=3458&domid=w209&anc_id=57317&cmetric=1&wlangID=1&color=cfcfcf&wwidth=306&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                                </div><!-- /.card -->
                        </div> <!-- /.card-body -->
                    </div>
                </div>                  

                            <div class="col-sm-12 ">
                                <div class="card  "> 
                                    <div class=" card-body">                                
                                        <h4 class="mb-3 text-center font-weight-bold">Daftar Agenda </h4>                                    
                                        <div class="flot-container">
                                                <table class="  table ">
                                                            <thead class="ml-5" >
                                                                <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Tanggal</th>
                                                                <th scope="col">Keterangan</th>
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody> 
                                                        <?php
                                                            foreach ($agenda as $key ) {                                                       
                                                        ?> 
                                                            <tr>

                                                                <td><?php echo $key->No?></td>
                                                                <td><?php echo  date('d-m-Y ',strtotime($key->Tanggal));?></td>
                                                                <td><?php echo $key->Keterangan?></td>
                                                            </tr>
                                                            <?php                                                                
                                                            }
                                                            ?>
                                                        </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>  
            
    </div><!-- /# column -->
           
            
            
            

           