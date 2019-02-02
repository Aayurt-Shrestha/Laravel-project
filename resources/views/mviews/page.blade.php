 @extends('mlayout.master')
 @section('body')
<div class="head_welcome">
        <table cellpadding="5" cellspacing="5" width="100%" border="2" style="color: #fefefe; border-color: #333333">
          <tr><th>&#160;&#160;Welcome to Online Shopping</th></tr>
          <tr><td style="background: #588a02;color: #fefefe;">&#160;&#160;Effective,effecient and secure way to shop. Also, you can post your products for selling..</td></tr>
        </table>
        

    </div>
    <br>
    <br>
    <div class="container"  style="background-color: #111111;border-color: #2f2f2f;border: 1;">
      <div style="color: #ffffff">
      <h2 >All the list of products</h2>
      (Click for detailed view.)
      <br>
      </div>
  <div class="table-responsive">
            <table class="table" border="0" cellpadding="3" >
              
              <tr>  
                <td>
                  <table width="100%" border="1" >
                  <tr>
                    <td>
                      <table border="1" width="100%">
                        <tr>
                          <th colspan="4" bgcolor="#588a02" style="color: white">&#160;&#160;Products</th>
                        </tr>
                        <tr>
                          <?php $i=0?>
                          @foreach($posts as $post)
                            <?php $i++?>
                        
                          <td  width="25%">
                            <div align="center">
                              <img src="{{url($post->img)}}" width="130px" height="150px" style="background-color: white">
                            </div>
                            <div align="center" style="height:80px;margin:3px;">
                              <font style="font-size:16px; ">
                              <a href="post/{{$post->id}}" style="color: #ace600">{{$post->title}}</a>
                              </font>
                              <br>
                                              <font size="1" color="#888888"><b>Rs. {{$post->price}}</b><br><font color="grey">{{$post->type}}</font>
                                              </font>
                                              <br>

                                            </div>
                          </td>
                          @if($i % 4 == 0)
                          </tr><tr>
                          @endif
                          @endforeach
                          
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </table>
                </td>
               
              </tr>
                
            </table>

  </div>
  </div>
    <br>
    
@endsection