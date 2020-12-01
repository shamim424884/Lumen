<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Test API</title>        
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
        <meta name="keywords" content="Texeurop (BD) Ltd., Washing, Dying, Knitting, Labeling, Printing"/>
        <meta name="description" content="Texeurop (BD) Ltd. is a private limited company. We are a full package knit wear manufacturer with the ability to provide solutions."/>
        <meta name="author" content="Shamimul Haque"/>          
    </head>
    <body class="skin-green sidebar-collapse" style="height: auto;">

        <div class="wrapper" style="height: auto;">
            
            <div class="content-wrapper" style="min-height: 600px;">                
                <section class="content">    
                    <div class="row" style="padding-left: 10px; padding-right: 10px;"> 
                        <table class="table" style="width: 100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th style="width: 50%;">All Orders</th>
                                    <th style="width: 50%;">Specific Order</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="gallery-item" href="/api/orders">All Orders</a>      </td>
                                    <td>
                                        @foreach($orders as $order)
                                        <a class="gallery-item" href="/api/orders/{!! $order->id !!}">For Order{!! $order->id !!}</a><br>      
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>                        
                    </div>
                </section>                                 
            </div>
          </div> 
    </body>
</html>