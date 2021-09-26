<!--begin modal window-->
<div class="modal fade products-view-modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">
          <h4><strong>PRODUCT</strong></h4>
          {{--<button type="button" onclick="zoomin()"> Zoom In</button>
          <button type="button" onclick="zoomout()"> Zoom Out</button>--}}
        </div>
        <button type="button" class="close" data-dismiss="modal" title="Close"> <i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body">

      <!--CAROUSEL CODE GOES HERE-->

    <!--begin carousel-->
    <div id="myGallery" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        @foreach($products as $key => $product)
        <div class="item @if($key == 0) active @endif view-image-center zoom">
          <img src="{{ asset('storage'.$product->path) }}" alt="item{{$key}}" class="view-image" id="zoom{{$key}}">
          {{--<div class="carousel-caption">
            <h3>Heading 3</h3>
            <p>Slide 1 description.</p>
          </div>--}}
        </div>
        @endforeach
        <!--end carousel-inner-->
      </div>
      <!--Begin Previous and Next buttons-->
      <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
      <!--end carousel-->
    </div>
      <!--end modal-body-->
        
      </div>
      <div class="modal-footer">
        <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
        <!--end modal-footer-->
      </div>
      <!--end modal-content-->
    </div>
    <!--end modal-dialoge-->
  </div>
  <!--end myModal-->>
</div>

<!-- <script type="text/javascript" src="https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js"></script> -->
<script type="text/javascript">
  function zoomin(){
        var myImg = $(".item.active").children(".view-image").attr('id');
        console.log(myImg);
        // var currWidth = myImg.clientWidth;
        // if (currWidth == 2500) {
        //     return false;
        //  } else {
        //     myImg.style.width = (currWidth + 100) + "px";
        // }
    }
    function zoomout(){
        var myImg = $(".item.active").children(".view-image").attr('id');
        // var currWidth = myImg.clientWidth;
        // if (currWidth == 100) {
        //     return false;
        // } else {
        //     myImg.style.width = (currWidth - 100) + "px";
        // }
    }
</script>