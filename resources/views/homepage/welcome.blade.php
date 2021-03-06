@extends('layouts.app')
<link rel="stylesheet" href="css/homepage.css">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--Ads-->
            <div class="panel panel-default">
                <div id="ads">
                    <div id="adsleft">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/slider-1.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/slider-2.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/slider-3.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/slider-4.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!--End Ads-->

            <div class="content" style="margin-top:50px; background: gray">
                @include('homepage.item-homepage', ["title" => "Bán chạy", "type"=>"hot", "items" => $new_items])
                @include('homepage.item-homepage', ["title" => "Mới về", "type"=>"new", "items" => $new_items])
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script defer src="jquery.flexslider.js"></script>

<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
      }
  });
  });
</script>
@endsection
