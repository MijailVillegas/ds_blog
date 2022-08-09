<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center">
                <a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;
                    @php
                        $DateAndTime = date('m-d-Y h:i:s a', time());  
                        echo "La hora y fecha actual es $DateAndTime.";
                    @endphp
                </a>
            </div>
        </div>
    </div>
</div>