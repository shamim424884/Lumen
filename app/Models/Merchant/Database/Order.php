<?php namespace App\Models\Merchant\Database;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    public $table = 'mer_database_orders';
    protected $fillable=['OrderID','OrderNo','ItemDescription','StyleNo','OrderDate','UnitPrice',
        'OrderQuantity','Tolerance','DeliveryDate','RevisedDate','FabricType','GSM','Yarn','SMV','CreatedBy'];
    protected $hidden = [];
    
    
}
