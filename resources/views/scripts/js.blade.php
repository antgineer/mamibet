<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>


  <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">
  $(document).ready(function()
{
    var slider_width = $('.pollSlider').width();//get width automaticly
  $('#pollSlider-button').click(function() {
    if($(this).css("margin-right") == slider_width+"px" && !$(this).is(':animated'))
    {
        $('.pollSlider,#pollSlider-button').animate({"margin-right": '-='+slider_width});
    }
    else
    {
        if(!$(this).is(':animated'))//perevent double click to double margin
        {
            $('.pollSlider,#pollSlider-button').animate({"margin-right": '+='+slider_width});
        }
    }


  });
 });     
  </script>