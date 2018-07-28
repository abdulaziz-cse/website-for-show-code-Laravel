

@extends('layouts.app')
@section('start')

<div class="col mx-auto" style="padding: 80px;">

  <div class="content">

 <div class="container">
   
    <div class="row">
@foreach($post as $posts)
<div class="col-sm-6" style="padding: 10px;">
    <div class="card" >  
        @if ($posts->tag == "JS" ) 
        <img src="https://lh3.googleusercontent.com/8Vv_KdNegmrnKAeelTNNNJQX5c3DVzixsuqk7sXNLIM-HA5dsqOdha9Ft50K75m-gATKP1AVvtaKd4cQ9gt96At3oPCH6muMeDyMkSRx9TbJ4c5Z9IrqwYi8j3NvDb-KF3boB16dVo3BVXqYmIEnbZbMQjQ9bOghSKtEHkKIFyl8m2WcDo5gXyrkKxInTPcxiolHWbSrsW2k89i_kTpnbykg-qsMw9_dQKe2hcLzewNBrfwXTvFdX79DyF3AeCJPFoiMGhCyBmyfJB0Z-6eAKIiTdcxhV9kezLdp1Fgk93j_BG6k2jne0eDQjm6TCFKdo5snrzD2odZBHN6gxfgH_f-k7P_5WE__U4NPYXRFLInQpeZOUuBuJenHdK8zPSIrch_23mapXUfZomTxiqKvlLH0fQPZNMMogk-Mkv1KwvlXVQ4ekx0q-cnxZIhc2grSOb5q41ViVXIBv5bn0tSR_5W4pm6guUu9WX7JXyK6rqKYxp5Q0JqvC8wgucKI-lJOweku_h9PO5DiPX2v2ylbgRcYtEXZWTmjdFYZ2cvoRZoV91_snKx93otUYUTZgY_v_N9cUoncZvTQQzQLg3vsA8K0JfrBTbnGVGk1HUI=s500-no" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">
        @elseif($posts->tag == "PHP" ) 
        <img src="https://lh3.googleusercontent.com/nn3MvFa2-u8gvIFdRIen06_39vwqdXW2xfYhReXmtBmRnlk34yi4Z-nlQ5AwS6x5DcWbYPX52WPfvubkpVh-9jqgoMljKo80yfd1MygErTUVaAz06Q3O3WcBXUkBwfzmuy7c4buRjI7Sk5bbLaM1Zkm68fPxaBXuwvomIJlevvWzBUmM259IWubsI6fIjABImRizRN-FDhIZubw-cTyS7QxPFV0h7WhXjjsPAwOjjEKbti_a7LYBQgFcPWzOrP1NIY_zcVuTMi8yNDZNubzg1lxMvF3yS_-mRJvkgrtpxDYD3kZjyti5IbTjdK00dTtZBTP66a-0ChRng6FvmKEvQEQJCkb8QTL3xBluqHboa20IDvOCASm9z8ATlzBq76NczF-U9_Fk2PRMz8tv--bsE_Ejg52S6rbTbnhWPZCZ4WluXVnXmwboczOmGaY2mAaqCcG2kNXBfIvzfLB7wfftHGmbg0-2vOBal5F1RQlEXXS4MVdQEqO8R5-HMcfK8RwfblsAbUo5c27xtgw1rERNd0VGJmwuqvzuwBmFM-mHTg8ZPmPN0oNXi7o7ZMGtfCvKClTk8iiH24uSGfLC4ffjL6qERuHd-7SA-fqjTNg=s500-no"   alt="Card image cap"  class="card-img-top " style="height:300px; width: 300px; margin: auto;"  >
        @elseif($posts->tag == "HTML" ) 
        <img src="http://icons.iconarchive.com/icons/cornmanthe3rd/plex/256/Other-html-5-icon.png"   alt="Card image cap"  class="card-img-top" style="height:300px; margin: auto; width: 300px;" >
        @elseif ($posts->tag == "SWIFT" ) 
        <img src="http://www.henrycountyr1.k12.mo.us/HighSchool/webpages_16-17/WrightM/images/Swift_logo.svg.png" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">
        @elseif ($posts->tag == "C++" ) 
        <img src="https://lh3.googleusercontent.com/RtlbX_E0_uk9_GHzngmswR1dNRCslMOl8gvLNI3ecbufXicdTG6U0SV9DaMwi-vtbfTIwqw43WvmPZkvn1E-6Hl33gHalCfFVe3YpsLtAhmIbadwBxbE0elvYf6pQS5yGPk1PAdJ7_5dwrU1uvSG11-hyU00Cxc-6X4bRpWvrLznyP1eA5LrTC1ompo38Q2Eu8k_gOjLI6FjNhsE2mw16ZkwWiYczAEKuTKjebSZtM7gSgaxFoByXGtCUBK30_ynScHhZEfzCMRIvxq0PJfQKEdaDrhheLuvXD0RPo9nlsBvfCgsQXYSIpCdeSSl0tlmNVzC-Buoqq4siaZUuNkGlvgtDv8UmxIPewKmb7a9WPDfgToMMbmXf2fr2llzUnL7Xc16Vm5jyj8MztfiFesYJR7KJ0N-fxO2cvmOZBi3Ru1A56BH5rhoETwHVEC0XWs_R3Eo7XficmwC1x0nCN5hEibpA42u91q8K6cs9CtwxMLxpGNpKvt1ndt7jOn5FN2JcOtUNaNw6ZS9D_-pye61aCqmULak1mr_T4MzO4Fr7w6n7KkSQOyqj10FEixJdFyGU60J-d14AN8hWtbc6tjBssyx1FI2HTKWF9XJ02w=s500-no" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">
        @elseif ($posts->tag == "JAVA" ) 
        <img src="https://lh3.googleusercontent.com/yeCqcOAl4AO5L16Je4ILGZipDUES_BCPgBSjh4tPOS7pO9yA2xyT_x-nvwo-LLIqF8Drr-wRog=s328-no" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">
        @elseif ($posts->tag == "Python" ) 
        <img src="https://lh3.googleusercontent.com/9aQzE7B98dveqjAikQzhZYfyHPwfUNIXEnbQk1-XAP06ZfXkHpvrAxMtSt6fIjcawE-b1sX8-UiRjBRFoN4WcpiO0o5z9fIvPlZ7RP7IZDCY55uL4l3AGrY0FU1J5KTqG_LI2xekp6SGdnt_0SBHP15bFyZqkM8QHkR0NQgsCKgQFjV0AfO6u7D17RkNRKGtkq-yPCMqbyqhC97v3CU11fY9QppPWlHwM0EOpzCP4Fr6aXuKFyOxL9PjQWiUm7jOkQdigMslsYOvs7RjexX0NWSyKABlh6l3Eg66iNDJChU_jRuTgHXe6jkiMi5l8MOS5ldv2rs0TuNgZZmhMF9AVu4ttdLVv_6Qbnpid7cOX4msqN1oQFJt-YYRvDdwqCA8fjWZKRFUyjl9ebPjzWrPHXXVk5GlYNLPKJXufrtl2a6KVP6SkN04tCx5QgsCs7ZQ_n4RaJGNzWh4dvnEmTz7li1eGgSBHzf4bWShnVBfPHYH-Xn_aY4XmlQPnm9XCA4DGYn3gihF8SUqSFXnkmTQbI8pf-Z0Ff5xWyWRFIwglDbxDuE_WBiGkBhP1PGGAF3KbCw0WBcZpPtBFnwV0vbwwLjygGNqnnDjhAWnavc=s500-no" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">
        @elseif ($posts->tag == "Laravel" ) 
        <img src="http://www.cloudheadtechnologies.com/img/services/frameworks/laravel.png" alt="Card image cap" class="card-img-top" style="height:250px; width: 250px; margin: auto;">

        @endif
                 <div class="card-body" style="display:inline-block;">
              <h4 class="card-title">{{ $posts->name }}</h4>
              <h6 class="card-subtitle mb-2 text-muted"> By {{ $posts->user->name}}</h6>
                 <p class="card-text">
                  {{ str_limit(strip_tags($posts->body), 50) }}
                  @if (strlen(strip_tags($posts->body)) > 50)
                  <a  href="/posts/{{$posts->id}}"> More .. </a>
                    @endif
                 </p>

              <button type="button" name="price" class="btn btn-default"> {{ $posts->price }}   <i class="fas fa-dollar-sign"></i> </button>

              <button type="button" class="btn btn-warning"> {{ $posts->tag }} <i class="fas fa-code"></i> </button>

            </div>
            
          </div>
        </div>
@endforeach

<ul class="pagination" style=" margin: auto;">
    {{ $post->links() }}

</ul>

</div>
</div>

</div>

</div>


    
    
@endsection



